<?php 
session_start();
$otp = rand(100000,1000000);
echo($otp);

$_SESSION['otp'] = $otp;
$contact = $_POST['contact'];
$fields = array(
  "sender_id" => "FSTSMS",
  "message" => $otp,
  "language" => "english",
  "route" => "p",
  "numbers" =>$contact,
);

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_SSL_VERIFYHOST => 0,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => json_encode($fields),
CURLOPT_HTTPHEADER => array(
  "authorization: 7shoEMIw1FSQfduDzAxHti96yU3c4V8qBNavZlGpLY2OrCmnT0YQoBeACZl6J0UE9aSkpMb5287csnuT",
  "accept: */*",
  "cache-control: no-cache",
  "content-type: application/json"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);


if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}



// if(isset($_GET['verify']))
// {
// $sotp = $_SESSION['otp'];
// if(isset($_GET['verify']))
// {
// if($sotp == $_GET["opt"])
// {
//     echo('<script>alert("otp verified")</script>');
// }
// else{
//     echo('<script>alert("otp verification failed")</script>');
// }
// }
// }
?>