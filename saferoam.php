<?php

include_once('./tripit_php_v1_33427/tripit.php');

$request = 'https://api.tripit.com/oauth/request_token';

$startOauth = curl_init($request); 

//Bad copy from Yahoo, should convert this to use the OAuth library


// The request URL prefix 
    $request =  'https://api.tripit.com/oauth/request_token';
    // The request parameters 
    $appid = 'YahooDemo'; 
    $context = 'Italian sculptors and painters of the renaissance favored the Virgin Mary for inspiration'; 
    $query = 'madonna'; 
    // urlencode and concatenate the POST arguments 
    $postargs = 'oauth_consumer_key='.$myPublicKey.'&oauth_nonce='.urlencode($context).'&query='.urlencode($query);
    
    
    
    $session = curl_init($request);
    
    // Tell curl to use HTTP POST
    curl_setopt ($session, CURLOPT_POST, true); 
    // Tell curl that this is the body of the POST
    curl_setopt ($session, CURLOPT_POSTFIELDS, $postargs); 
    // Tell curl not to return headers, but do return the response
    curl_setopt($session, CURLOPT_HEADER, false); 
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($session); 
  curl_close($session); 
