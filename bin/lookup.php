<?php

require_once 'intro.php';
require_once 'GSB_Client.php';

$client  = new GSB_Client($storage, $network, $logger);

$matches = $client->doLookup($_GET['url']);
print "{$_GET['url']}: " . count($matches) . "\n";


//$client->doLookup('http://malware.testing.google.test/testing/malware/');
//$client->doLookup('http://www.iospace.com/');
//$client->doLookup('http://the-zen.co.kr/');
//$client->doLookup('http://adingurj.com/');
//$client->doLookup('http://matzines.com/');
// http://online-xp-antivir.com 
