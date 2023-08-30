<?php 
# HelloClient.php

   $client = new SoapClient(null, array(
      'location' => "http://localhost/....Your Folder Path Here...../Creating_server.php?wsdl",
      'uri'      => "http://localhost/....Your Folder Path Here...../",
      
      'trace'    => 1 ));
   $r= $client->__soapCall("hello",array("username"=>"Sumit"));
   echo $r . "<br>";    

   $r= $client->__soapCall("addTwoNumbers",array("aValue"=>10, "bValue"=>20));
   echo "The ans is " . $r;    
   // var_dump($r);
?>