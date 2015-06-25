<?php
namespace CoinRpc\Tests;

use CoinRpc\LitecoinClient;

class LitecoinClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LitecoinClient
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new LitecoinClient('http://user:pass@localhost:8332');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->object = null;
    }

    public function testFoo()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'Nothing to test'
        );
    }
}
