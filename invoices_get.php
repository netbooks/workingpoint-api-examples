<?php
$endpoint = 'https://[subdomain].workingpoint.com/api/invoices'; // your subdomain
$api_token = 'XXXXXX'; // your api_token
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization: '.$api_token));
$result = curl_exec($ch);
print_r($result);
?>
