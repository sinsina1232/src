
<?php
echo "hi";
function error($msg) {
  $response =[];
  $response['success'] = false;
  $response['message'] = $msg;
  return json_decode($response) ;
};

session_start();
$access_token = $_SESSION['my_access_token_access_token'];


if($access_token == ""){
  die(error('Error: nvalid access token'));
}

$url= "https://api.github.com/user";
$auth_header = "Authorization: token ".$access_token;
$user_agent_header = "User-Agent: Test";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', $auth_header,
$user_agent_header));
$response = curl_exec($ch);
curl_close ($ch);
var_dump($response);
?>
