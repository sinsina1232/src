<?php
$code = $_GET['code'];
if($code ==""){
  header('Location = http://localhost/src/public/test.php');
  exit;
}
  $client_id = 'b81619c243a17faf41dc';
  $client_secret = 'bb364c3648ede053a89abf2e72b3beb2dc87e48c';
  $url = 'https://github.com/login/oauth/access_token';

  $post_params=[
    'client_id'=> $client_id,
    'client_secret'=>$client_secret,
    'code'=>$code
  ];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$post_params);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
  $response = curl_exec($ch);
  curl_close ($ch);
  $data =json_decode($response);
  if($data->access_token != ""){
    session_start();
    $_SESSION['my_access_token_access_token']= $data->access_token;
    header('Location = http://localhost/src/public/test.php');
    exit;
  }

?>
