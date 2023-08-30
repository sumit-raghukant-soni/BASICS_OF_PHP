<?php

require_once('./nusoap-0.9.5/lib/nusoap.php');

$client = new nusoap_client("http://localhost/....Your Folder Path Here...../Creating_server.php?wsdl");

echo $client->call("hello", array("sumit"));
echo "<br>";
echo "The addition of 2 numbers using soap function is " . $client->call("addTwoNumbers", array(50,50));

?>
