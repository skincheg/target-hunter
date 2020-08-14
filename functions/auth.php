<?php

define('FILE', dirname(__FILE__));
define('ROOT', dirname(FILE));
require_once ROOT.'/vendor/autoload.php';

use \VK\Client\VKApiClient;
use \VK\OAuth\VKOAuth;
use \VK\OAuth\VKOAuthDisplay;
use \VK\OAuth\Scopes\VKOAuthUserScope;
use \VK\OAuth\VKOAuthResponseType;

$vk = new VKApiClient('5.95');

$oauth = new VKOAuth();
$client_id = 7566675;
$redirect_uri = 'target-hunter';
$display = VKOAuthDisplay::PAGE;
$scope = array(VKOAuthUserScope::WALL, VKOAuthUserScope::GROUPS);
$state = 'secret_state_code';

$browser_url = $oauth->getAuthorizeUrl(VKOAuthResponseType::CODE, $client_id, $redirect_uri, $display, $scope, $state);
