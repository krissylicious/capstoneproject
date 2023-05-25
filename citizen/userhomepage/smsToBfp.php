<?php
include 'conn.php';

$lat =$_GET['lat'];
$long =$_GET['long'];
$name = $_GET['name'];

$service_plan_id = "f94e2c25cf884554ad56ada4a9336f15";
$bearer_token = "966fe79982d64e309cea721e14bcdda8";

//Any phone number assigned to your API
$send_from = "+639917288942";
//May be several, separate with a comma ,
$recipient_phone_numbers = "+639917288942"; 
$message = "Hi, Ako po si {$name} humihingi ng tulong dahil merong Sunog malapit sa aming area, ito po ang exact location Latitude: {$lat} Longitude: {$long}";

// Check recipient_phone_numbers for multiple numbers and make it an array.
if(stristr($recipient_phone_numbers, ',')){
  $recipient_phone_numbers = explode(',', $recipient_phone_numbers);
}else{
  $recipient_phone_numbers = [$recipient_phone_numbers];
}

// Set necessary fields to be JSON encoded
$content = [
  'to' => array_values($recipient_phone_numbers),
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
  ?>
  <script >
    alert("Message not Sent!");
    window.location.href="emergencybutton.php";
  </script>
  <?php
} else {
  date_default_timezone_set("Asia/Manila");
  $date = date('Y-m-d');
  $time = date('h:i:s');
  
  $insertemergency=mysqli_query($conn, "INSERT INTO emergency VALUES('0', '$name', 'BFP', '$message', '$lat', '$long', '$date', '$time')");
  ?> 
  <script >
    alert("Message Sent!");
    window.location.href="emergencybutton.php";
  </script>
  <?php
}
curl_close($ch);
?>