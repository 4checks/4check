#4check cc checker API Usage:

Your Key: 0790bcdb-eea4-45b5-9f57-e0ac738692e5

Endpoint: https://4check.su/api/v2/check

Method: POST

gate: vip-authchecker1 | vip-authchecker2 | vip-3dchecker1 | vip-chargechecker1

# Request Example:

{
  "key": "0790bcdb-eea4-45b5-9f57-e0ac738692e5",
  "gate": "vip-authchecker1",
  "input": "5425395086852571|07/28|269|Bobby Underwood|65340"
}

# Response Example:

{
  "success": true,
  "message": "success",
  "input": "5425395086852571|07/28|269|Bobby Underwood|65340",
  "output": "5425395086852571|07|2028|269",
  "result": "Approved",
  "code": "00:Approved",
  "info": {
    "bin": "542539",
    "brand": "MASTERCARD",
    "type": "CREDIT",
    "level": "PLATINUM",
    "bank": "MERRICK BANK CORPORATION",
    "countryName": "UNITED STATES",
    "countryCodeA2": "US"
  }
}
