<!DOCTYPE html>
<html lang = �gja�h>

<head>
<meta charset = �gUFT-8�h>
<title>���O�C��������</title>
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
<h1>���[�U�[ID�ƃp�X���[�h�̑��M</h1>
<form action = �gindex.php�h method = �gget�h>
<dl class="profile">
<dt>ID�F</dt>
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
<button type='submit' name='action' value='send'>���O�C��</button>
</form>
</body>
</html>
