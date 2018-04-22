<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UTF-8">
<title>XSS(脆弱)</title>
</head>

<body>
<h2></h2>
<p>
<?php 
 print $_POST["value"];

?>

</p>

</body>
</html>