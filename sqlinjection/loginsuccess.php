
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
$link = mysql_connect('fy18myserver.mysql.database.azure.com', 'fy18admin', 'Fy18_admin');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$db_selected = mysql_select_db('maindb', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

$result = mysql_query('SELECT * from maintable');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}

mysql_close($link); ?>

<?php exho $result ?>

<?php
 echo htmlspecialchars($_POST["comment"], ENT_QUOTES, "UTF-8"); ?>
</p>様ようこそ<br>
</body>
</html>