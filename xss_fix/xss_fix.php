<?php
header("Content-Type: text/html; charset=UTF-8");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UTF-8">
<title>XSS(対策)</title>
</head>

<body>
<h2>XSS対策後ページ</h2>
<p>
HTMLにおいて特別な意味をもつ&lt;&gt;などをエスケープする処理にしています。
下に入力した文字が表示されます。<br>
<?php 
 print htmlspecialchars($_POST["value"],ENT_QUOTES);
?>
<!--
<?php 
 print htmlspecialchars($_POST["value"],ENT_QUOTES);
?>
-->

</p>

</body>
</html>