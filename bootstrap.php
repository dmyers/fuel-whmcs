<?php

require_once __DIR__ . DS . 'vendor' . DS . 'whmcs-sdk' . DS . 'autoloader.php';

Config::load('whmcs', true);

$whmcs_url      = Config::get('whmcs.url');
$api_url        = $whmcs_url . Config::get('whmcs.api_url');
$api_username   = Config::get('whmcs.api_username');
$api_password   = Config::get('whmcs.api_password');
$api_access_key = Config::get('whmcs.api_access_key');

WHMCS_Api::init($api_url, $api_username, $api_password, $api_access_key);
