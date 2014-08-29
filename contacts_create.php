<?php
$data = array("contact"=>array(
  "notes" => array(array("note"=>"Note1", "description"=>"Note1 description"),array("note"=>"Note2", "description"=>"Note2 description")),
  "addresses" => array(array("country"=>"US","zip"=>"90210","city"=>"San Francisco","street"=>"123 Four St","description"=>"Address1","state"=>"CA")),
  "company" => "ACME Co",
  "title" => "CEO",
  "first_name" => "First",
  "last_name" => "Last",
  "url" => "https://example.com",
  "phones" => array(array("number"=>"415-555-5555", "description"=>"Primary"),array("number"=>"415-555-5555", "description"=>"Secondary")),
  "faxes" => array(array("number"=>"415-555-5555", "description"=>"Primary"),array("number"=>"415-555-5555", "description"=>"Secondary")),
  "emails" => array(array("email"=>"mail@example.com", "description"=>""),array("email"=>"mail@example.com", "description"=>"Secondary"))
));
$data = json_encode($data);

$endpoint = 'https://[subdomain].workingpoint.com/api/contacts'; // your subdomain
$api_token = 'XXXXXX'; // your api_token
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization: '.$api_token));
$result = curl_exec($ch);
print_r($result);
?>
