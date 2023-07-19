<?php
session_start();
require_once('Facebook/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => '652025893649592',
	'app_secret' => '72072ab45a91c1fa65bbf04ba8a7a06f',
	'default_graph_version' => 'v2.10'
]);

$handler = $FBObject -> getRedirectLoginHelper();
?>