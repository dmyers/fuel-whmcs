# Fuel WHMCS Package

A super simple WHMCS package for Fuel.

## About
* Version: 1.0.0
* Author: Derek Myers

## Installation

### Git Submodule

If you are installing this as a submodule (recommended) in your git repo root, run this command:

	$ git submodule add git://github.com/dmyers/fuel-whmcs.git fuel/packages/whmcs

Then you you need to initialize and update the submodule:

	$ git submodule update --init --recursive fuel/packages/whmcs/

### Download

Alternatively you can download it and extract it into `fuel/packages/whmcs/`.

## Usage

```php
$client = WHMCS_Client::get_client_details(array('clientid' => 1));
```

For more examples, check out the [WHMCS API Docs](http://docs.whmcs.com).

## Configuration

Configuration is easy. First thing you will need to do is to create a new user which has API permisions (if you haven't already). Next you will need to whitelist your IP address of the server that will be using this package in the WHMCS security settings under General.

Next, copy the `config/whmcs.php` from the package up into your `app/config/` directory. Open it up and enter your API url, username, and password.

## Updates

In order to keep the package up to date simply run:

	$ git submodule update --recursive fuel/packages/whmcs/
