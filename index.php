<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>


<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UFT-8">
<title>�A�J�E���g�̏����擾����</title>
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
<h3>�A�J�E���g�̏����擾���܂��B</h3>
<h3>SQL�C���W�F�N�V�����̃T���v���ł��B</h3></br>
<h4>���[�U���ƃp�X���[�h����͂��Ă�������</h4>
<form action = "index.php" method = "post">
<dl class="profile">
<dt>���[�U���F</dt>
<dd><input type = �gtext�h name =�gcomment/�g></dd>

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
<dd><input type="password" id="password" /> <input type="checkbox" onclick="checkPassword(this)" /></dd>
</dl>
<button type="submit" name="action" value="send">���O�C��</button>
</form>

<?php
if(isset($_POST[�ecomment�f])){
$comment = $_POST[�ecomment�f];
echo $comment;
}
?>

</body>
</html>