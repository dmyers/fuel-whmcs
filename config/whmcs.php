<?php

return array(
	/**
	 * url - The url to your WHMCS install.
	 */
	'url' => 'http://someurl.com/clients/',
	
	/**
	 * api_url - The api url to the api.php file.
	 *
	 * You will find this in your whmcs install directory
	 */
	'api_url' => 'includes/api.php',
	
	/**
	 * api_password - The username to use for api requests.
	 *
	 * You must setup a valid api user in your whmcs install
	 */
	'api_username' => 'your_username',
	
	/**
	 * api_password - The password to use for api requests.
	 *
	 * The password must be a valid md5 hash to work
	 */
	'api_password' => md5('your_pass'),
	
	/**
	 * auto_auth - The auto auth key to use for authenticating to whmcs.
	 *
	 * Leave this empty to disable auto auth
	 */
	'auto_auth' => '',
);
