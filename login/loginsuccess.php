
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
 echo htmlspecialchars($_POST["comment"], ENT_QUOTES, "UTF-8"); ?>
</p>様ようこそ<br>
</body>
</html>