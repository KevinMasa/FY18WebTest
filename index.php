<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>


<!DOCTYPE html>
<html lang = "ja">

<head>
<title>HTTP��HTTPS�ʐM���e�̈Ⴂ</title>
<style type="text/css">

dl.profile dt{
	clear:left;
	position: relative;
	float: left;
	width: 10em;
	padding:10px 0px 0px 0px;
}
dl.profile dd{
	margin-left: 10em;
	width: 300px;
	padding: 10px 10px 10px 0px;
}

</style>
</head>

<body>
<h3>HTTP��HTTPS�ʐM���e�̈Ⴂ</h3>
<h3>���̃T�C�g��http://��https://�̂��ꂼ��ŃA�N�Z�X��</h3></br>
<h3>���O�C�������āAWireShark�ŒʐM���e���m�F���Ă݂܂��傤�B</h3></br>
<h4>���[�U���ƃp�X���[�h����͂��Ă�������</h4>
<form action = "loginsuccess.php" method = "post">
<dl class="profile">
<dt>���[�U���F</dt>
<dd><input type = �gtext�h name =�guserid/�g></dd>

<script>
function checkPassword(e) {
    pass = document.getElementById("password");
    if (e.checked) {
        pass.setAttribute("type", "text");
    } else {
        pass.setAttribute("type", "password");
    }
}
</script>

<dt>�p�X���[�h�F</dt>
<dd><input type="password" id="password" name ="pass/" /> <input type="checkbox" onclick="checkPassword(this)" /></dd>
</dl>
<button type="submit" name="action" value="send">���O�C��</button>
</form>

</body>
</html>