
<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>
<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UFT-8">
<title>���O�C����</title>
</head>

<body>
<h1>���[�U�[ID�ƃp�X���[�h�̑��M</h1>
<h2>���O�C����y�[�W</h2>
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
$res = mysqli_query($conn, 'SELECT * FROM maintable');
while ($row = mysqli_fetch_assoc($res)) {
}

mysqli_close($conn);

?>

<?php echo $row; ?>

<?php
 echo htmlspecialchars($_POST["comment"], ENT_QUOTES, "UTF-8"); 
 ?>
</p>�l�悤����<br>
</body>
</html>