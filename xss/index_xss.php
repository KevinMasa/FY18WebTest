<!DOCTYPE html>
<html lang = “ja”>

<head>
<meta charset = “UFT-8”>
<title>ログインをする</title>
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
<h1>ユーザーIDとパスワードの送信</h1>
<form action = “index.php” method = “get”>
<dl class="profile">
<dt>ID：</dt>
<dd><input type = “text” name =“comment/“></dd>

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

<dt>パスワード：</dt>
<dd><input type="password" id="password" /> <input type="checkbox" onclick="checkPassword(this)" /></dd>
</dl>
<button type='submit' name='action' value='send'>ログイン</button>
</form>
</body>
</html>
