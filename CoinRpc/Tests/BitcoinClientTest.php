<?php
namespace CoinRpc\Tests;

use CoinRpc\BitcoinClient;

class BitcoinClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BitcoinClient
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new BitcoinClient('http://user:pass@localhost:8332');
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
     * @covers CoinRpc\BitcoinClient::addMultiSigAddress
     * @todo   Implement testAddMultiSigAddress().
     */
    public function testAddMultiSigAddress()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::addNode
     * @todo   Implement testAddNode().
     */
    public function testAddNode()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::backupWallet
     * @todo   Implement testBackupWallet().
     */
    public function testBackupWallet()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::createRawTransaction
     * @todo   Implement testCreateRawTransaction().
     */
    public function testCreateRawTransaction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::decodeRawTransaction
     * @todo   Implement testDecodeRawTransaction().
     */
    public function testDecodeRawTransaction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::dumpPrivKey
     * @todo   Implement testDumpPrivKey().
     */
    public function testDumpPrivKey()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::encryptWallet
     * @todo   Implement testEncryptWallet().
     */
    public function testEncryptWallet()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getAccount
     * @todo   Implement testGetAccount().
     */
    public function testGetAccount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getAccountAddress
     * @todo   Implement testGetAccountAddress().
     */
    public function testGetAccountAddress()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getAddedNodeInfo
     * @todo   Implement testGetAddedNodeInfo().
     */
    public function testGetAddedNodeInfo()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getAddressByAccount
     * @todo   Implement testGetAddressByAccount().
     */
    public function testGetAddressByAccount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getBalance
     * @todo   Implement testGetBalance().
     */
    public function testGetBalance()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getBlock
     * @todo   Implement testGetBlock().
     */
    public function testGetBlock()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getBlockCount
     * @todo   Implement testGetBlockCount().
     */
    public function testGetBlockCount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getBlockHash
     * @todo   Implement testGetBlockHash().
     */
    public function testGetBlockHash()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getBlockTemplate
     * @todo   Implement testGetBlockTemplate().
     */
    public function testGetBlockTemplate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getConnectionCount
     * @todo   Implement testGetConnectionCount().
     */
    public function testGetConnectionCount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getDifficulty
     * @todo   Implement testGetDifficulty().
     */
    public function testGetDifficulty()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getGenerate
     * @todo   Implement testGetGenerate().
     */
    public function testGetGenerate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getHashPerSec
     * @todo   Implement testGetHashPerSec().
     */
    public function testGetHashPerSec()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getInfo
     * @todo   Implement testGetInfo().
     */
    public function testGetInfo()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getMemoryPool
     * @todo   Implement testGetMemoryPool().
     */
    public function testGetMemoryPool()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getMiningInfo
     * @todo   Implement testGetMiningInfo().
     */
    public function testGetMiningInfo()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getNewAddress
     * @todo   Implement testGetNewAddress().
     */
    public function testGetNewAddress()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getPeerInfo
     * @todo   Implement testGetPeerInfo().
     */
    public function testGetPeerInfo()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getRawMemPool
     * @todo   Implement testGetRawMemPool().
     */
    public function testGetRawMemPool()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getRawTransaction
     * @todo   Implement testGetRawTransaction().
     */
    public function testGetRawTransaction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getReceivedByAccount
     * @todo   Implement testGetReceivedByAccount().
     */
    public function testGetReceivedByAccount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getReceivedByAddress
     * @todo   Implement testGetReceivedByAddress().
     */
    public function testGetReceivedByAddress()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getTransaction
     * @todo   Implement testGetTransaction().
     */
    public function testGetTransaction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getTxOut
     * @todo   Implement testGetTxOut().
     */
    public function testGetTxOut()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getTxOutSetinfo
     * @todo   Implement testGetTxOutSetinfo().
     */
    public function testGetTxOutSetinfo()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::getWork
     * @todo   Implement testGetWork().
     */
    public function testGetWork()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::importPrivKey
     * @todo   Implement testImportPrivKey().
     */
    public function testImportPrivKey()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::keyPoolRefill
     * @todo   Implement testKeyPoolRefill().
     */
    public function testKeyPoolRefill()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::listAccounts
     * @todo   Implement testListAccounts().
     */
    public function testListAccounts()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::listReceivedByAccount
     * @todo   Implement testListReceivedByAccount().
     */
    public function testListReceivedByAccount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::listReceivedByAddress
     * @todo   Implement testListReceivedByAddress().
     */
    public function testListReceivedByAddress()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::listSinceBlock
     * @todo   Implement testListSinceBlock().
     */
    public function testListSinceBlock()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::listTransactions
     * @todo   Implement testListTransactions().
     */
    public function testListTransactions()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::listUnspent
     * @todo   Implement testListUnspent().
     */
    public function testListUnspent()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::listLockUnspent
     * @todo   Implement testListLockUnspent().
     */
    public function testListLockUnspent()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::lockUnspent
     * @todo   Implement testLockUnspent().
     */
    public function testLockUnspent()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::move
     * @todo   Implement testMove().
     */
    public function testMove()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::sendFrom
     * @todo   Implement testSendFrom().
     */
    public function testSendFrom()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::sendMany
     * @todo   Implement testSendMany().
     */
    public function testSendMany()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::sendRawTransaction
     * @todo   Implement testSendRawTransaction().
     */
    public function testSendRawTransaction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::sendToAddress
     * @todo   Implement testSendToAddress().
     */
    public function testSendToAddress()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::setAccount
     * @todo   Implement testSetAccount().
     */
    public function testSetAccount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::setGenerate
     * @todo   Implement testSetGenerate().
     */
    public function testSetGenerate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::setTxFee
     * @todo   Implement testSetTxFee().
     */
    public function testSetTxFee()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::signMessage
     * @todo   Implement testSignMessage().
     */
    public function testSignMessage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::signRawTransaction
     * @todo   Implement testSignRawTransaction().
     */
    public function testSignRawTransaction()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::stop
     * @todo   Implement testStop().
     */
    public function testStop()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::submitBlock
     * @todo   Implement testSubmitBlock().
     */
    public function testSubmitBlock()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::validateAddress
     * @todo   Implement testValidateAddress().
     */
    public function testValidateAddress()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::verifyMessage
     * @todo   Implement testVerifyMessage().
     */
    public function testVerifyMessage()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::walletLock
     * @todo   Implement testWalletLock().
     */
    public function testWalletLock()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::walletPassphrase
     * @todo   Implement testWalletPassphrase().
     */
    public function testWalletPassphrase()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers CoinRpc\BitcoinClient::walletPassphraseChange
     * @todo   Implement testWalletPassphraseChange().
     */
    public function testWalletPassphraseChange()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
