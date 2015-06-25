<?php
/*
 * This file is part of the Bitcoin Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CoinRpc;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\RequestOptions;

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
     * @var array
     */
    private $auth;

    /**
     * @var array
     */
    private $ssl = [];

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
     * @param string $url
     * @param array  $auth   [user, pass]
     * @param Client $client Optional pre-configured client
     */
    public function __construct($url, array $auth = [], Client $client = null)
    {
        $this->url = $url;
        $this->auth = $auth;
        $this->client = $client;
    }

    /**
     * Setup SSL verification.
     *
     * @param boolean|string $verify
     * @param string|array   $cert
     * @param string|array   $sslKey
     */
    public function setSslVerification($verify = false, $cert = null, $sslKey = null)
    {
        $this->ssl = [
            RequestOptions::VERIFY => $verify,
            RequestOptions::CERT => $cert,
            RequestOptions::SSL_KEY => $sslKey,
        ];
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
            $config = ['base_uri' => $this->url, RequestOptions::AUTH => $this->auth];
            $config = array_merge($this->ssl, $config);
            $client = new Client($config);
        }

        try {
            $request = $client->post('/', [
                    RequestOptions::HEADERS => ['Content-type' => 'application/json'],
                    RequestOptions::BODY => json_encode($payload),
                ]
            );

            $response = $request->getBody();
            $response = json_decode($response->getContents(), true);
        } catch (ConnectException $e) {
            throw $e;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $code = $response->getStatusCode();
            if ($code == 401) {
                $response = json_decode($response->getBody(), true);
            } else {
                throw $e;
            }
        }

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
