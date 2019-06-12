<?php

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);

require('HL-phpclient/src/HL-phpclient/HLCurlHandler.php');
require('HL-phpclient/src/HL-phpclient/HLBase.php');
require('HL-phpclient/src/HL-phpclient/HLClient.php');
require('HL-phpclient/src/HL-phpclient/HLMembers.php');
require('HL-phpclient/src/HL-phpclient/HLLists.php');

use Phpclient\HLClient;
use Phpclient\HLMembers;
use Phpclient\HLLists;

// function autoLoader($class){
// 	require_once("HL-phpclient/src/HL-phpclient/" . $class . ".php");
// }
// spl_autoload_register('autoLoader');

//echo 'test <br />';

$apiKey = ' ';
$apiSecret = ' ';


// Get all lists for an account
$client1 = new HLClient($apiKey,$apiSecret);
$listsService = new HLLists($client1);

echo '<strong>Get all lists for account:</strong> <br>';
var_dump($listsService->getLists());

echo '<br><br><hr><br>';


// Get all members from a list
//$listId = ' ';
$listId = ' ';

$client2 = new HLClient($apiKey,$apiSecret);
$memberService = new HLMembers($client2);

$result = $memberService->getMembers($listId);
echo '<strong>Get all members from a list:</strong> <br>';
var_dump($result);

echo '<br><br><hr><br>';

// var_dump($listsService->getList($listId));

// echo '<br><br><hr><br>';

?>
