<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UTF-8">
<title>XSS(‘Îô)</title>
</head>

<body>
<h2></h2>
<p>
<?php 
 print htmlspecialchars($_POST["value"],ENT_QUOTES);

?>

</p>

</body>
</html>