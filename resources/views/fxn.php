<?php
// function to generate the access token

function generateToken()
{

  $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
  
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  $credentials = base64_encode('tGnh5pZ7kH2ena1h0OLGeGJwXnUytaiF:SOsGXGnLANrMr7aP');
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  
  $curl_response = curl_exec($curl);
  
  $json_decode=json_decode($curl_response);

  $access_token =$json_decode->access_token;

  return $access_token;

  

  

}




?>