<?php
function sendSMS($number,$message) {

  $service_plan_id = "ea57581088bf45a6bc56312691943b94"; 
  $bearer_token = "67f64a5774414144b550de3ec7460006";
  $send_from = "+447520651199";

  if(stristr($number, ',')){
    $number = explode(',', $number);
  
  }else{
    $number = [$number];
  
  }

  $content = [
    'to' => array_values($number),
    'from' => $send_from,
    'body' => $message
  ];

  $data = json_encode($content);

  $ch = curl_init("https://us.sms.api.sinch.com/xms/v1/{$service_plan_id}/batches");

  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
  curl_setopt($ch, CURLOPT_XOAUTH2_BEARER, $bearer_token);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

  $result = curl_exec($ch);

  if(curl_errno($ch)) {
    echo 'Message Not Sent';

  } else {
    echo 'Message Sent';

  }
  curl_close($ch);

}

//sendSMS('+639168733698','Araw-araw Sipag lang..!');