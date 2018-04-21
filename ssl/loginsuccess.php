<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<title>ログイン後ページ</title>
</head>

<body>
<h1>ユーザーIDとパスワードの送信</h1>
<h2>ログイン後ペーｆｆｆｆｆｆｆｆｆｆｆｆジ</h2>
<p>ユーザIDは：
<?php
 echo htmlspecialchars($_POST["userid"], ENT_QUOTES, "UTF-8"); ?>
</p><br>
<p>パスワードは：
<?php
 echo htmlspecialchars($_POST["pass"], ENT_QUOTES, "UTF-8"); ?>
</p><br>

<input value="もどる" onclick="history.back();" type="button">

</body>
</html>