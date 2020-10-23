<?php
/* written by saurav kumar */


$data = array(
  'DATA_NAME'      => 'DATA_VALUE'

);

$url = "YOUR_API_URL"; 






$content = json_encode($data);


$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
        array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

$json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ( $status != 201 ) {
    die( $json_response);
}


curl_close($curl);

$response = json_decode($json_response, true);


?>
