<?php
$data = '{
          "invoice": {
            "number": "1059",
            "invoice_date": "07/01/2015",
            "contact_id": "64258",
            "invoice_entries": {
              "0": {
                "price": "1.00",
                "qty": "1",
                "item_id": "93656"
              }
            }
          }
        }';

$endpoint = 'https://[subdomain].workingpoint.com/api/invoices'; // your subdomain
$api_token = '[api_token]'; // your api_token
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization: '.$api_token));
$result = curl_exec($ch);
print_r($result);
?>
