
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
$link = mysql_connect('fy18myserver.mysql.database.azure.com', 'fy18admin', 'Fy18_admin');
if (!$link) {
    die('�ڑ����s�ł��B'.mysql_error());
}

$db_selected = mysql_select_db('maindb', $link);
if (!$db_selected){
    die('�f�[�^�x�[�X�I�����s�ł��B'.mysql_error());
}

$result = mysql_query('SELECT * from maintable');
if (!$result) {
    die('�N�G���[�����s���܂����B'.mysql_error());
}

mysql_close($link); ?>

<?php exho $result ?>

<?php
 echo htmlspecialchars($_POST["comment"], ENT_QUOTES, "UTF-8"); ?>
</p>�l�悤����<br>
</body>
</html>