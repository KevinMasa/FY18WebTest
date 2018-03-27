<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>


<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UFT-8">
<title>アカウントの情報を取得する</title>
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
<h3>アカウントの情報を取得します。</h3>
<h3>SQLインジェクションのサンプルです。</h3></br>
<h4>ユーザ名とパスワードを入力してください</h4>
<form action = "index.php" method = "post">
<dl class="profile">
<dt>ユーザ名：</dt>
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
<button type="submit" name="action" value="send">ログイン</button>
</form>

<?php
if(isset($_POST[‘comment’])){
$comment = $_POST[‘comment’];
echo $comment;
}
?>

</body>
</html>