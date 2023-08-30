<?php
require_once('./nusoap-0.9.5/lib/nusoap.php');

$s = new soap_server();
$s -> configureWSDL("Server", "urn:server");

$s -> register("addTwoNumbers", 
                array('aValue' => 'xsd:int', 'bValue'=>'xsd:int'), 
                array('return' => 'xsd:int'),
                'urn:server',            // namespace
                'urn:server#add2nos',            // soapaction
                'rpc',                               // style
                'encoded',                           // use
                'Just return the sum of 2 numbers');
                

$s->register('hello',
array('username' => 'xsd:string'),   // parameter
array('return' => 'xsd:string'),     // output
'urn:server',                        // namespace
'urn:server#helloServer',            // soapaction
'rpc',                               // style
'encoded',                           // use
'Just say hello');                   // description

function hello($username) {
    return 'Hello, '.$username.'!';
 }
function addTwoNumbers($aValue, $bValue){
    return $aValue + $bValue;
}
@$s -> service(file_get_contents("php://input"));
?>