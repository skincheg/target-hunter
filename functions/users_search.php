<?php

define('FILE', dirname(__FILE__));
define('ROOT', dirname(FILE));
require_once ROOT.'/vendor/autoload.php';

use \VK\Client\VKApiClient;
use \VK\OAuth\Scopes\VKOAuthUserScope;
$access_token = '2d214538bee9280f20e0646e6764c902e831c5c674b852bde0002cd075ccf148d110be75bae78e548bf49';


$vk = new VKApiClient();
$response = $vk->users()->search($access_token, array(
    'q' => $_GET['q'],
    'sort' => $_GET['sort'],
    'fields' => array('photo_50'),
));

echo json_encode($response);
