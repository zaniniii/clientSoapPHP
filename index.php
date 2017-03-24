<?php
include_once('vendor/autoload.php');

$wsdl = "<URL_WSDL>";

$local_cert = "<CERTIFICADO>.pem";

$client =  new nusoap_client($wsdl, true);
$client->soap_defencoding = 'UTF-8';
$client->decode_utf8 = FALSE;

$client->setCredentials("","","certificate", array(
      "sslcertfile" => $local_cert,
      "sslkeyfile" =>  $local_cert,
      "verifypeer" => 0,
      "verifyhost" => 0
       )
   );

//SHOW METHOD
 print("<pre>".print_r($client->getProxyClassCode(), true)."</pre>");

//DEBUG
// echo '<h2>Request</h2><pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
// echo '<h2>Response</h2><pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
// echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';

?>
