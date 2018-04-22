<?php
header("Content-Type: text/html; charset=UTF-8");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UTF-8">
<title>XSS(脆弱)</title>
</head>

<body>
<h2>XSS対策前ページ</h2>
<p>
下に入力した文字が表示されます。<br>
<?php 
 print $_POST["value"];
?>

<!--
<?php 
 print $_POST["value"];
?>

-->

</p>
<br>
<button type="button" onclick="history.back()">戻る</button>

</body>
</html>