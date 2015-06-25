Coin RPC Client
===============

Coin RPC Client is a library to allow PHP to communicate with a live
bitcoind/litecoind/dogecoind etc RPC servers.

Getting started
---------------

### Installing via Composer

The recommended way to install CoinRpc is through [Composer](http://getcomposer.org).
Composer is the defacto new way to manage PHP dependencies and autoloading.

1. Add ``coinrpc/coinrpc`` as a dependency in your project's ``composer.json`` file:

        {
            "require": {
                "coinrpc/coinrpc": "@dev"
            }
        }

2. Get [Composer](http://getcomposer.org) and install:

        curl -s http://getcomposer.org/installer | php
        php composer.phar install

3. Require Composer's autoloader

        require 'vendor/autoload.php';

Bitcoin Basic usage
-------------------

```php
    <?php
    use CoinRpc\BitcoinClient;

    $client = new BitcoinClient('http://rpc_user:rpc_password@localhost:8332');

    // optional SSL verification if required (off by default)
    // $client->setSslVerification();

    $info = $client->getInfo();
    $balance = $client->getBalance();
    $txid = $client->sendToAddress('1MYQ7WEyJTPaDWd6wWMYgFCXdxuc2uCvmG', (float) 0.1);
```

Litecoin or Dogecoin Basic usage
--------------------

As above but use the `LitecoinClient` or `DogecoinClient` in the place of `BitcoinClient`

Contributions
-------------

Contribution welcome. Please open a PR or issue at https://github.com/coinrpc/coinrpc
