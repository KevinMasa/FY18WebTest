<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UFT-8">
<title>ログイン後</title>
</head>

<body>
<h1>ユーザーIDとパスワードの送信</h1>
<h2>ログイン後ページ</h2>
<p>
<?php 
$host = 'fy18myserver.mysql.database.azure.com';
$username = 'fy18admin@fy18myserver';
$password = 'Fy18_admin';
$db_name = 'maindb';


$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT id,password FROM maintable WHERE id=admin');
while ($row = mysqli_fetch_assoc($res)) {
  echo "id:", $row['id'];
  echo "\t";
  echo "password:",$row['password'];
}

mysqli_close($conn);
?>

<?php 
echo "aaaaaa";
?>

</p>
</body>
</html>