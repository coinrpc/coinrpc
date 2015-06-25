<?php
/*
 * This file is part of the Bitcoin Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CoinRpc;

use Guzzle\Http\Client;

/**
 * Class AbstractClient
 */
abstract class AbstractClient
{
    private $id = 1;
    private $notification = false;

    /**
     * @var string
     */
    private $url;

    /**
     * @var Client
     */
    private $client;

    private $certificateAuthority = false;
    private $verifyPeer = false;
    private $verifyHost = 0;

    /**
     * Constructor
     *
     * Typical URL would be something like:
     *
     *    http://rpc_username:rpc_password@localhost:8332
     *
     * @param string $url
     * @param Client $client Optional pre-configured client
     */
    public function __construct($url, Client $client = null)
    {
        $this->url = $url;
        $this->client = $client;
    }

    /**
     * Setup SSL verification.
     *
     * Setting $certificateAuthority to TRUE will result in the bundled
     * with Guzzle's cacert.pem being used to verify against the remote host.
     *
     * Alternate certificates to verify against can be specified with the
     * $certificateAuthority option set to a certificate file location to be
     * used with CURLOPT_CAINFO, or a certificate directory path to be used
     * with the CURLOPT_CAPATH option.
     *
     * Setting $certificateAuthority to FALSE will turn off peer verification,
     * unset the bundled cacert.pem, and disable host verification. Please
     * don't do this unless you really know what you're doing, and why
     * you're doing it.
     *
     * @param string|bool $certificateAuthority bool, file path, or directory path
     * @param bool        $verifyPeer           FALSE to stop cURL from verifying the peer's certificate.
     * @param int         $verifyHost           Set the cURL handle's CURLOPT_SSL_VERIFYHOST option
     */
    public function setSslVerification($certificateAuthority = true, $verifyPeer = true, $verifyHost = 2)
    {
        $this->certificateAuthority = $certificateAuthority;
        $this->verifyPeer = $verifyPeer;
        $this->verifyHost = $verifyHost;
    }

    /**
     * Set notification.
     *
     * If set false (default), then all successful requests will simply return null, boolean, or a json array response.
     * If set true, the API will always return true for a successful call, and an exception if failed.
     *
     * @param boolean $notification
     */
    public function setNotification($notification)
    {
        $this->notification = (bool) $notification;
    }

    /**
     * Dispatcher.
     *
     * Sends commands to Bitcoin RPC server.
     *
     * @param string $method
     * @param array  $params
     *
     * @throws \Exception
     * @return mixed
     */
    public function dispatch($method, array $params = array())
    {
        $currentId = $this->notification ? null : $this->id;

        $payload = array(
            'id'     => $currentId,
            'method' => $method,
            'params' => $params
        );

        if ($this->client) {
            $client = $this->client;
        } else {
            $client = new Client($this->url);
            $client->setSslVerification($this->certificateAuthority, $this->verifyPeer, $this->verifyHost);
        }

        $request = $client->post('/', null, json_encode($payload));
        $request->addHeader('Content-type', 'application/json');
        try {
            $response = $request->send();
        } catch (\Exception $e) {
            $response = $request->getResponse();
            if (null === $response) {
                throw $e;
            }
        }

        $response = $response->json();

        if (!$this->notification) {
            if ($currentId != $response['id']) {
                throw new \Exception(sprintf("ID mismatch (request ID: '%s', response ID: '%s')", $currentId, $response['id']));
            }

            if (null !== $response['error']) {
                throw new \Exception($response['error']['message']);
            }

            return $response['result'];
        }

        return true;
    }

    /**
     * Magic method to support any future commands.
     *
     * @param $method
     * @param $params
     *
     * @return mixed
     */
    public function __call($method, $params)
    {
        return $this->dispatch($method, $params);
    }
}
