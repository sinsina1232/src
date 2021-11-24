<?php
session_start();
$access_token = isset($_SESSION['my_access_token_access_token']) ? ($_SESSION['my_access_token_access_token']):"";
?>
<html>
<head>
</head>
<body>
<?php
echo 'Access Token: <br />'. $access_token. "<br />";

if($access_token !=""){
  echo 'Logged In<br />';
}else{
  echo '<a href= "https://github.com/login/oauth/authorize?client_id=b81619c243a17faf41dc">login now </a><br />';
}
?>
</body>
</html>
