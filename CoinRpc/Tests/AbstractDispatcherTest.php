<?php

namespace CoinRpc\Tests;

use CoinRpc\AbstractClient;

class AbstractClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractClient
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Concrete('http://user:pass@localhost:8332');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->object = null;
    }

    /**
     * @covers CoinRpc\AbstractDispatcher::setSslVerification
     * @todo   Implement testSetSslVerification().
     */
    public function testSetSslVerification()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\AbstractDispatcher::setNotification
     * @todo   Implement testSetNotification().
     */
    public function testSetNotification()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\AbstractDispatcher::dispatch
     * @todo   Implement testDispatch().
     */
    public function testDispatch()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\AbstractDispatcher::__call
     * @todo   Implement test__call().
     */
    public function test__call()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}

class Concrete extends AbstractClient
{

}
