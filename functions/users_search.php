<?php

define('FILE', dirname(__FILE__));
define('ROOT', dirname(FILE));
require_once ROOT.'/vendor/autoload.php';

use \VK\Client\VKApiClient;
use \VK\OAuth\Scopes\VKOAuthUserScope;
$access_token = '';


$vk = new VKApiClient();
$response = $vk->users()->search($access_token, array(
    'q' => $_GET['q'],
    'sort' => $_GET['sort'],
    'fields' => array('photo_50'),
));

echo json_encode($response);
