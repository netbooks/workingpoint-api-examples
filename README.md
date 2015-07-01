workingpoint-api-examples
=========================

Examples of how to use WorkingPoint's API

Implemented in PHP using CURL

Remember to replace `[subdomain]` and `[api_token]` with your own subdomain and api_token.

PLAIN CURL EXAMPLES
===================

### Invoice Create [POST]
```
curl -i -H "Accept: application/json" -H "Content-Type: application/json" -H "Authorization: [api_token]" -X POST -d '{"invoice":{"number":"1058","invoice_date":"07/01/2015","contact_id":"64258","invoice_entries":{"0":{"price":"1.00","qty":"1","item_id":"93656"}}}}' 'https://[subdomain].workingpoint.com/api/invoices'
```
