<?php
header("Content-Type: text/html; charset=UTF-8");
?>


<!DOCTYPE html>
<html lang = "ja">

<head>
<title>HTTPとHTTPS通信内容の違い</title>
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
<h3>HTTPとHTTPS通信内容の違い</h3>
<h3>このページにhttp://とhttps://のそれぞれでアクセスし</h3></br>
<h3>ログインをボタンを押して、WireSharkで通信内容を確認してみましょう。</h3></br>

<h4>
①Wiresharkを起動</br>
② キャプチャ->WiFiをダブルクリック</br>
③ 上部の表示フィルタに「http」を設定</br>
④ http://fy18test.azurewebsites.net/ssl/index.php 　へアクセス</br>
⑤ 「ユーザー名」と「パスワード」を入力してログイン（テキトウでok）</br>
⑥ WiresharkでPOSTしている通信を確認</br></br>
⑦ https://fy18test.azurewebsites.net/ssl/index.php 　へアクセス</br>
⑧ 「ユーザー名」と「パスワード」を入力してログイン（テキトウでok）</br>
⑨ WiresharkでInfoの部分にApplication Dataと書かれた通信を確認</br>

</h4></br>

</hr></br>
<h4>ユーザ名とパスワードを入力してください</h4>
<form action = "loginsuccess.php" method = "post">
<dl class="profile">
<dt>ユーザ名：</dt>
<dd><input type = "text" name ="userid"></dd>

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
<dd><input type="password" id="password" name ="pass" /> <input type="checkbox" onclick="checkPassword(this)" />パスワードを表示</dd>
</dl>
<button type="submit" name="action" value="send">ログイン</button>
</form>
<br>
<button type="button" onclick="history.back()">戻る</button>
</body>
</html>