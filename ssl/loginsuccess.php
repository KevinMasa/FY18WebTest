<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<title>���O�C����y�[�W</title>
</head>

<body>
<h1>���[�U�[ID�ƃp�X���[�h�̑��M</h1>
<h2>���O�C����y�[�������������������������W</h2>
<p>���[�UID�́F
<?php
 echo htmlspecialchars($_POST["userid"], ENT_QUOTES, "UTF-8"); ?>
</p><br>
<p>�p�X���[�h�́F
<?php
 echo htmlspecialchars($_POST["pass"], ENT_QUOTES, "UTF-8"); ?>
</p><br>

<input value="���ǂ�" onclick="history.back();" type="button">

</body>
</html>