<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UFT-8">
<title>XSS(ê∆é„)</title>
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