<?php

define('FILE', dirname(__FILE__));
define('ROOT', dirname(FILE));
require_once ROOT.'/vendor/autoload.php';

use \VK\Client\VKApiClient;
use \VK\OAuth\Scopes\VKOAuthUserScope;
$access_token = '';

$vk = new VKApiClient();
$response = $vk->ads()->importTargetContacts($access_token, array(
    'account_id' => '1604007620',
    'target_group_id' => '34692280',
    'contacts' => array($_GET['id']),
));
