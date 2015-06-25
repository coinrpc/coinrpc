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
 * Class BitcoinClient
 *
 * Designed for Bitcoin RPC servers v0.8.0+
 *
 * Communicates with Bitcoind RPC server.
 */
class BitcoinClient extends AbstractClient
{
    /**
     * Add a nrequired-to-sign multisignature address to the wallet.
     *
     * Each key is a bitcoin address or hex-encoded public key.
     * If [account] is specified, assign address to [account].
     *
     * @param string      $nrequired
     * @param string      $keys      '["key","key"]'
     * @param string|null $account
     *
     * @return mixed
     */
    public function addMultiSigAddress($nrequired, $keys, $account = null)
    {
        $args = array($nrequired, $keys);
        if (null !== $account) {
            $args[] = $account;
        }

        return $this->dispatch('addmultisigaddress', array($args));
    }

    /**
     * Attempts add or remove <node> from the addnode list
     * or try a connection to <node> once.
     *
     * @param string $node
     * @param string $action add, remove or ontry
     *
     * @return mixed
     */
    public function addNode($node, $action)
    {
        return $this->dispatch('addnode', array($node, $action));
    }

    /**
     * Safely copies wallet.dat to destination,
     * which can be a directory or a path with filename.
     *
     * @param string $destination
     *
     * @return mixed
     */
    public function backupWallet($destination)
    {
        return $this->dispatch('backupwallet', array($destination));
    }

    /**
     * Creates a raw transaction spending given inputs.
     *
     * [{"txid":txid,"vout":n},...] {address:amount,...}
     *
     * @param string $txn
     *
     * @see https://en.bitcoin.it/wiki/Raw_Transactions
     *
     * @return mixed
     */
    public function createRawTransaction($txn)
    {
        return $this->dispatch('createrawtransaction', array($txn));
    }

    /**
     * Produces a human-readable JSON object for a raw transaction
     *
     * @param string $hex
     *
     * @see https://en.bitcoin.it/wiki/Raw_Transactions
     *
     * @return mixed
     */
    public function decodeRawTransaction($hex)
    {
        return $this->dispatch('decoderawtransaction', array($hex));
    }

    /**
     * Reveals the private key corresponding to bitcoin address
     *
     * @param $bitcoinAddress
     *
     * @return mixed
     */
    public function dumpPrivKey($bitcoinAddress)
    {
        return $this->dispatch('dumpprivkey', array($bitcoinAddress));
    }

    /**
     * Encrypts the wallet
     *
     * @param $passphrase
     *
     * @return mixed
     */
    public function encryptWallet($passphrase)
    {
        return $this->dispatch('encryptwallet', array($passphrase));
    }

    /**
     * Returns the account associated with the given address.
     *
     * @param $bitcoinAddress
     *
     * @return mixed
     */
    public function getAccount($bitcoinAddress)
    {
        return $this->dispatch('getaccount', array($bitcoinAddress));
    }

    /**
     * Returns the current bitcoin address for receiving payments to this account.
     *
     * @param $account
     *
     * @return mixed
     */
    public function getAccountAddress($account)
    {
        return $this->dispatch('getaccountaddress', array($account));
    }

    /**
     * Returns information about the given added node, or all added nodes
     *
     * (note that onetry addnodes are not listed here)
     *
     * If dns is false, only a list of added nodes will be provided,
     * otherwise connected information will also be available.
     *
     * @param string $dns
     * @param null   $node
     *
     * @return mixed
     */
    public function getAddedNodeInfo($dns, $node = null)
    {
        $args = array($dns);
        if (null !== $node) {
            $args[] = $node;
        }

        return $this->dispatch('getaddednodeinfo', $args);
    }

    /**
     * Returns the list of addresses for the given account.
     *
     * @param $account
     *
     * @return mixed
     */
    public function getAddressByAccount($account)
    {
        return $this->dispatch('getaddressbyaccount', array($account));
    }

    /**
     * If [account] is not specified, returns the server's total available balance.
     * If [account] is specified, returns the balance in the account.
     *
     * @param null $account
     * @param null $minconf
     *
     * @return mixed
     */
    public function getBalance($account = null, $minconf = null)
    {
        $args = array();
        if (null !== $account) {
            $args[] = $account;
        }

        if (null !== $minconf) {
            $args[] = $minconf;
        }

        return $this->dispatch('getbalance', $args);
    }

    /**
     * Returns information about the given block hash.
     *
     * @param $hash
     *
     * @return mixed
     */
    public function getBlock($hash)
    {
        return $this->dispatch('getblock', array($hash));
    }

    /**
     * Returns the number of blocks in the longest block chain.
     *
     * @return mixed
     */
    public function getBlockCount()
    {
        return $this->dispatch('getblockcount');
    }

    /**
     * Returns hash of block in best-block-chain at <index>
     *
     * @param $index
     *
     * @return mixed
     */
    public function getBlockHash($index)
    {
        return $this->dispatch('getblockhash', array($index));
    }

    /**
     * Returns data needed to construct a block to work on
     *
     * @param null $params
     *
     * @return mixed
     */
    public function getBlockTemplate($params = null)
    {
        $args = array();
        if (null !== $params) {
            $args[] = $params;
        }

        return $this->dispatch('getblocktemplate', $args);
    }

    /**
     * Returns the number of connections to other nodes.
     *
     * @return mixed
     */
    public function getConnectionCount()
    {
        return $this->dispatch('getconnectioncount');
    }

    /**
     * Returns the proof-of-work difficulty as a multiple of the minimum difficulty.
     *
     * @return mixed
     */
    public function getDifficulty()
    {
        return $this->dispatch('getdifficulty');
    }

    /**
     * Returns true or false whether bitcoind is currently generating hashes
     *
     * @return mixed
     */
    public function getGenerate()
    {
        return $this->dispatch('getgenerate');
    }

    /**
     * Returns a recent hashes per second performance measurement while generating.
     *
     * @return mixed
     */
    public function getHashPerSec()
    {
        return $this->dispatch('gethashpersec');
    }

    /**
     * Returns an object containing various state info.
     *
     * @return mixed
     */
    public function getInfo()
    {
        return $this->dispatch('getinfo');
    }

    /**
     * Replaced in v0.7.0 with getblocktemplate, submitblock, getrawmempool
     *
     * @param null $data
     *
     * @return mixed
     */
    public function getMemoryPool($data = null)
    {
        $args = array();
        if (null !== $data) {
            $args[] = $data;
        }

        return $this->dispatch('getmemorypool', $args);
    }

    /**
     * Returns an object containing mining-related information:
     *
     * blocks
     * currentblocksize
     * currentblocktx
     * difficulty
     * errors
     * generate
     * genproclimit
     * hashespersec
     * pooledtx
     * testnet
     *
     * @return mixed
     */
    public function getMiningInfo()
    {
        return $this->dispatch('getmininginfo');
    }

    /**
     * Returns a new bitcoin address for receiving payments.
     *
     * If [account] is specified (recommended), it is added to the address
     * book so payments received with the address will be
     * credited to [account].
     *
     * @param null $account
     *
     * @return mixed
     */
    public function getNewAddress($account = null)
    {
        $args = array();
        if (null !== $account) {
            $args[] = $account;
        }

        return $this->dispatch('getnewaddress', $args);
    }

    /**
     * Returns data about each connected node.
     *
     * @return mixed
     */
    public function getPeerInfo()
    {
        return $this->dispatch('getpeerinfo');
    }

    /**
     * Returns all transaction ids in memory pool
     *
     * @return mixed
     */
    public function getRawMemPool()
    {
        return $this->dispatch('getrawmempool');
    }

    /**
     * Returns raw transaction representation for given transaction id.
     *
     * @see https://en.bitcoin.it/wiki/Raw_Transactions
     *
     * @param     $txid
     * @param int $verbose
     *
     * @return mixed
     */
    public function getRawTransaction($txid, $verbose = 0)
    {
        return $this->dispatch('getrawtransaction', array($txid, $verbose));
    }

    /**
     * Returns the total amount received by addresses with [account]
     * in transactions with at least [minconf] confirmations.
     *
     * If [account] not provided return will include all transactions
     * to all accounts. (version 0.3.24)
     *
     * @param null $account
     * @param null $minconf
     *
     * @return mixed
     */
    public function getReceivedByAccount($account = null, $minconf = null)
    {
        $args = array();
        if (null !== $account) {
            $args[] = $account;
        }

        if (null !== $minconf) {
            $args[] = $minconf;
        }

        return $this->dispatch('getreceivedbyaccount', $args);
    }

    /**
     * Returns the total amount received by <bitcoinaddress> in
     * transactions with at least [minconf] confirmations.
     * While some might consider this obvious, value reported by this
     * only considers *receiving* transactions. It does not check payments
     * that have been made *from* this address. In other words,
     * this is not "getaddressbalance". Works only for addresses
     * in the local wallet, external addresses will always show 0.
     *
     * @param     $address
     * @param int $minconf
     *
     * @return mixed
     */
    public function getReceivedByAddress($address, $minconf = 1)
    {
        return $this->dispatch('getreceivedbyaddress', array($address, $minconf));
    }

    /**
     * Returns an object about the given transaction containing:
     * "amount" : total amount of the transaction
     * "confirmations" : number of confirmations of the transaction
     * "txid" : the transaction ID
     * "time" : time associated with the transaction[1].
     * "details" - An array of objects containing:
     * "account"
     * "address"
     * "category"
     * "amount"
     * "fee"
     *
     * @param $txid
     *
     * @return mixed
     */
    public function getTransaction($txid)
    {
        return $this->dispatch('gettransaction', array($txid));
    }

    /**
     * Returns details about an unspent transaction output
     *
     * @param      $txid
     * @param      $n
     * @param null $includemempool
     *
     * @return mixed
     */
    public function getTxOut($txid, $n, $includemempool = null)
    {
        $args = array($txid, $n);
        if (null !== $includemempool) {
            $args[] = $includemempool;
        }

        return $this->dispatch('gettxout', $args);
    }

    /**
     * Returns statistics about the unspent transaction output set
     *
     * @return mixed
     */
    public function getTxOutSetinfo()
    {
        return $this->dispatch('gettxoutsetinfo');
    }

    /**
     * If [data] is not specified, returns formatted hash data to work on:
     *
     * "midstate" : precomputed hash state after hashing the first half of the data
     * "data" : block data
     * "hash1" : formatted hash buffer for second hash
     * "target" : little endian hash target
     *
     * If [data] is specified, tries to solve the block and
     * returns true if it was successful.
     *
     * @param null $data
     *
     * @return mixed
     */
    public function getWork($data = null)
    {
        $args = array();
        if (null !== $data) {
            $args[] = $data;
        }

        return $this->dispatch('getwork', $args);
    }

    /**
     * Adds a private key (as returned by dumpprivkey) to your wallet.
     * This may take a while, as a rescan is done, looking for existing transactions.
     *
     * @param      $bitcoinKey
     * @param null $label
     * @param null $rescan
     *
     * @return mixed
     */
    public function importPrivKey($bitcoinKey, $label = null, $rescan = null)
    {
        $args = array($bitcoinKey);
        if (null !== $label) {
            $args[] = $label;
        }

        if (null !== $rescan) {
            $args[] = $rescan;
        }

        return $this->dispatch('importprivkey', $args);
    }

    /**
     * Fills the keypool, requires wallet passphrase to be set.
     *
     * @return mixed
     */
    public function keyPoolRefill()
    {
        return $this->dispatch('keypoolrefill');
    }

    /**
     * Returns Object that has account names as keys, account balances as values.
     *
     * @param int $minconf
     *
     * @return mixed
     */
    public function listAccounts($minconf = 1)
    {
        return $this->dispatch('listaccounts', array($minconf));
    }

    /**
     * Returns an array of objects containing:
     *
     * "account" : the account of the receiving addresses
     * "amount" : total amount received by addresses with this account
     * "confirmations" : number of confirmations of the most recent transaction included
     *
     * @param int     $minconf
     * @param boolean $includeEmpty
     *
     * @return mixed
     */
    public function listReceivedByAccount($minconf = 1, $includeEmpty = false)
    {
        return $this->dispatch('listreceivedbyaccount', array($minconf, $includeEmpty));
    }

    /**
     * Returns an array of objects containing:
     *
     * "address" : receiving address
     * "account" : the account of the receiving address
     * "amount" : total amount received by the address
     * "confirmations" : number of confirmations of the most recent transaction included
     *
     * To get a list of accounts on the system, execute bitcoind listreceivedbyaddress 0 true
     *
     * @param integer $minconf
     * @param boolean $includeEmpty
     *
     * @return mixed
     */
    public function listReceivedByAddress($minconf = 1, $includeEmpty = false)
    {
        return $this->dispatch('listreceivedbyaddress', array($minconf, $includeEmpty));
    }

    /**
     * Get all transactions in blocks since block [blockhash], or all transactions if omitted.
     *
     * @param null $blockhash
     * @param null $targetConfirmatons
     *
     * @return mixed
     */
    public function listSinceBlock($blockhash = null, $targetConfirmatons = null)
    {
        $args = array();
        if (null !== $blockhash) {
            $args[] = $blockhash;
        }

        if (null !== $targetConfirmatons) {
            $args[] = $targetConfirmatons;
        }

        return $this->dispatch('listsinceblock', $args);
    }

    /**
     * Returns up to [count] most recent transactions skipping the
     * first [from] transactions for account [account]. If [account]
     * not provided will return recent transaction from all accounts.
     *
     * @param string|null $account
     * @param null $count
     * @param null $from
     *
     * @return mixed
     */
    public function listTransactions($account = null, $count = null, $from = null)
    {
        $args = array();
        if (null !== $account) {
            $args[] = $account;
        }

        if (null !== $count) {
            $args[] = $count;
        }

        if (null !== $from) {
            $args[] = $from;
        }

        return $this->dispatch('listtransactions', $args);
    }

    /**
     * Returns array of unspent transaction inputs in the wallet.
     *
     * @param int $minconf
     * @param int $maxconf
     *
     * @return mixed
     */
    public function listUnspent($minconf = 1, $maxconf = 999999)
    {
        return $this->dispatch('listunspent', array($minconf, $maxconf));
    }

    /**
     * Returns list of temporarily unspendable outputs
     *
     * @return mixed
     */
    public function listLockUnspent()
    {
        return $this->dispatch('listlockunspent');
    }

    /**
     * Updates list of temporarily unspendable outputs
     *
     * @param      $unlock
     * @param null $array
     *
     * @return mixed
     */
    public function lockUnspent($unlock, $array = null)
    {
        $args = array($unlock);
        if (null !== $array) {
            $args[] = $array;
        }

        return $this->dispatch('lockunspent', $args);
    }

    /**
     * Move coins from one account to another
     *
     * @param string       $fromAccount
     * @param string       $toAccount
     * @param float        $amount
     * @param integer|null $minconf
     * @param string|null  $comment
     *
     * @return mixed
     */
    public function move($fromAccount, $toAccount, $amount, $minconf = null, $comment = null)
    {
        $args = array($fromAccount, $toAccount, $amount);
        if (null !== $minconf) {
            $args[] = $minconf;
        }

        if (null !== $comment) {
            $args[] = $comment;
        }

        return $this->dispatch('move', $args);
    }

    public function searchrawtransactions($address, $verbose = 0, $count = 100)
    {

        $args = [$address];//, $verbose, $count]; // todo ** verbose and count dont work

        return $this->dispatch('searchrawtransactions', $args);
    }

    /**
     * Send from a specific account
     *
     * Will send the given amount to the given address,
     * ensuring the account has a valid balance using
     * [minconf] confirmations. Returns the transaction ID
     * if successful (not in JSON object).
     *
     * Wallet must be unlocked before this API is called.
     *
     * @param string       $account
     * @param string       $address
     * @param float        $amount    is a real and is rounded to 8 decimal places.
     * @param integer|null $minconf
     * @param string|null  $comment
     * @param string|null  $commentTo
     *
     * @return string
     */
    public function sendFrom($account, $address, $amount, $minconf = null, $comment = null, $commentTo = null)
    {
        $args = array($account, $address, $amount);
        if (null !== $minconf) {
            $args[] = $minconf;
        }
        if (null !== $comment) {
            $args[] = $comment;
        }
        if (null !== $commentTo) {
            $args[] = $commentTo;
        }

        return $this->dispatch('sendfrom', $args);
    }

    /**
     * Send to many addresses.
     *
     * Amounts are double-precision floating point numbers
     *
     * Wallet must be unlocked before this API is called.
     *
     * @param string       $fromAccount
     * @param string       $addressAmount {address:amount,...}
     * @param integer|null $minconf
     * @param string|null  $comment
     *
     * @return mixed
     */
    public function sendMany($fromAccount, $addressAmount, $minconf = null, $comment = null)
    {
        $args = array($fromAccount, $addressAmount);
        if (null !== $minconf) {
            $args[] = $minconf;
        }
        if (null !== $comment) {
            $args[] = $comment;
        }

        return $this->dispatch('sendmany', $args);
    }

    /**
     * Submits raw transaction (serialized, hex-encoded) to local node and network.
     *
     * @param string      $hex
     * @param boolean     $allowHighFees
     *
     * @return mixed
     */
    public function sendRawTransaction($hex, $allowHighFees = null)
    {
        $args = array($hex);
        if (null !== $allowHighFees) {
            $args[] = $allowHighFees;
        }

        return $this->dispatch('sendrawtransaction', $args);
    }

    /**
     * Send Bitcoin from wallet to address.
     *
     * Requires wallet to be unlocked beforehand.
     *
     * @param string $address
     * @param float  $amount
     *
     * @return mixed
     */
    public function sendToAddress($address, $amount)
    {
        return $this->dispatch('sendtoaddress', array($address, $amount));
    }

    /**
     * Sets the account associated with the given address.
     *
     * Assigning address that is already assigned to the same
     * account will create a new address associated with that account.
     *
     * @param string $address
     * @param string $account
     *
     * @return mixed
     */
    public function setAccount($address, $account)
    {
        return $this->dispatch('setaccount', array($address, $account));
    }

    /**
     * Turn generation on or off.
     *
     * @param boolean $generate     true/false (boolean or string?)
     * @param integer $genproclimit Generation is limited to [genproclimit] processors, -1 is unlimited.
     *
     * @return null
     */
    public function setGenerate($generate, $genproclimit = null)
    {
        $args = array($generate);
        if (null !== $genproclimit) {
            $args[] = $genproclimit;
        }

        return $this->dispatch('setgenerate', $args);
    }

    /**
     * Sets transaction fee.
     *
     * @param float $amount real and is rounded to the nearest 0.00000001
     *
     * @return boolean
     * @throws \InvalidArgumentException
     */
    public function setTxFee($amount)
    {
        return $this->dispatch('settxfee', array($amount));
    }

    /**
     * Sign a message with the private key of an address.
     *
     * Requires wallet to be unlocked.
     *
     * @param string $address
     * @param string $message
     *
     * @return mixed
     */
    public function signMessage($address, $message)
    {
        return $this->dispatch('signmessage', array($address, $message));
    }

    /**
     * Adds signatures to a raw transaction and
     * returns the resulting raw transaction.
     *
     * @param string      $hex
     * @param string|null $txString {"txid":txid,"vout":n,"scriptPubKey":hex},...
     * @param string|null $keys     <privatekey1>,...
     *
     * @see https://en.bitcoin.it/wiki/Raw_Transactions
     *
     * @return string
     */
    public function signRawTransaction($hex, $txString = null, $keys = null)
    {
        $args = array($hex);
        if (null !== $txString) {
            $args[] = $txString;
        }
        if (null !== $keys) {
            $args[] = $keys;
        }

        return $this->dispatch('signrawtransaction', $args);
    }

    /**
     * Stop bitcoin server.
     *
     * @return string
     */
    public function stop()
    {
        return $this->dispatch('stop');
    }

    /**
     * Attempts to submit new block to network
     *
     * @param  string $hex
     * @param null    $optionalParamsObj
     *
     * @return mixed
     */
    public function submitBlock($hex, $optionalParamsObj = null)
    {
        $args = array($hex);
        if (null !== $optionalParamsObj) {
            $args[] = $optionalParamsObj;
        }

        return $this->dispatch('submitblock', $args);
    }

    /**
     * Return information about a Bitcoin address.
     *
     * @param string $address
     *
     * @return array
     */
    public function validateAddress($address)
    {
        return $this->dispatch('validateaddress', array($address));
    }

    /**
     * Verify a signed message.
     *
     * @param string $address
     * @param string $signature
     * @param string $message
     *
     * @return mixed
     */
    public function verifyMessage($address, $signature, $message)
    {
        return $this->dispatch('verifymessage', array($address, $signature, $message));
    }

    /**
     * Removes the wallet encryption key from memory, locking the wallet.
     *
     * After calling this method, you will need to call walletpassphrase
     * again before being able to call any methods which require the wallet
     * to be unlocked.
     *
     * @return null
     */
    public function walletLock()
    {
        return $this->dispatch('walletlock');
    }

    /**
     * Stores the wallet decryption key in memory for <timeout> seconds.
     *
     * @param string $passphrase
     * @param integer $timeout
     *
     * @return mixed
     * @return null
     */
    public function walletPassphrase($passphrase, $timeout)
    {
        return $this->dispatch('walletpassphrase', array($passphrase, (int) $timeout));
    }

    /**
     * Changes the wallet passphrase
     *
     * @param string $oldPassphrase
     * @param string $newPassphrase
     *
     * @return null
     */
    public function walletPassphraseChange($oldPassphrase, $newPassphrase)
    {
        return $this->dispatch('walletpassphrasechange', array($oldPassphrase, $newPassphrase));
    }
}
