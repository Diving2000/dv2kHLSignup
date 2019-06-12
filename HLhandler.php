<?php

//ini_set('display_errors', 1);
//error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);

require('heyloyalty/HL-phpclient/src/HL-phpclient/HLCurlHandler.php');
require('heyloyalty/HL-phpclient/src/HL-phpclient/HLBase.php');
require('heyloyalty/HL-phpclient/src/HL-phpclient/HLClient.php');
require('heyloyalty/HL-phpclient/src/HL-phpclient/HLMembers.php');
require('heyloyalty/HL-phpclient/src/HL-phpclient/HLLists.php');

use Phpclient\HLClient;
use Phpclient\HLMembers;
use Phpclient\HLLists;

$apiKey = ' ';
$apiSecret = ' ';

//$listId = ' ';
$listId = ' ';

$email = $_POST['email_address'];
$firstname = $_POST['data_Fornavn'];
$lastname = $_POST['data_Efternavn'];

	$fields = [
    'email' => $email,
		'firstname' => $firstname,
		'lastname' => $lastname
	];

	$client = new HLClient($apiKey,$apiSecret);
	$memberService = new HLMembers($client);

	$result = $memberService->create($listId,$fields);


	header("Location: http://nyhedsbrev.diving2000.dk?signedup");
