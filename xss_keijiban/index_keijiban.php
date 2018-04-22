<?php
header("Content-Type: text/html; charset=UTF-8");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UTF-8">
<title>掲示板</title>
<style type="text/css">
body{
    text-align:center;
}
.label{
    vertical-align: top;
    margin-right: 5px;
}
.toukou{
    border-top: 1px solid;
    margin: 40px auto;
    max-width: 975px;
}

</style>
</head>

<body>

<h3>クロスサイトスクリプティングのサンプルページです。</h3>

<h1>掲示板</h1>
<section>
    <h2>新規投稿</h2>
        <form action="" method="post">
               <div class="name"><span class="label">お名前(32文字以内):</span><input type="text" name="name" value=""></div></br>
        <div class="honbun"><span class="label">本文(200文字以内):</span><textarea name="comment" cols="30" rows="3" maxlength="80" wrap="hard" placeholder="200字以内で入力してください。"></textarea></div>
        <input type="submit" value="投稿">
    </form>
</section>
<section class="toukou">
    <h2 >投稿一覧</h2>
<!--
<?php
     if(isset($_POST['comment'])){
         echo "<p>投稿はまだありません</p>";
     }else{
$personal_name = "'".$_POST['name']."'";
$personal_comment = "'".$_POST['comment']."'";
$nowdate = date(Y-m-d);
$nowtime = date(H:i:s);
$now = "'".$nowdate." ".$nowtime."'";

$serverName = "fy18test.database.windows.net";
$connectionOptions = array(
    "Database" => "fy18test",
    "Uid" => "fy18test",
    "PWD" => "Fy18_test"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "INSERT INTO keijiban(name,contents,time) VALUES($personal_name,$personal_comment,$now)";

$getResults= sqlsrv_query($conn, $tsql);

if ($getResults == FALSE)
    echo (sqlsrv_errors());


$data = "<hr>\r\n";
$data = $data."<p>投稿者:".$personal_name."</p>\r\n";
$data = $data."<p>内容:</p>\r\n";
$data = $data."<p>".$contents."</p>\r\n";

print('<p>投稿者:'.$personal_name.'</p>');
print('<p>内容:</p>');
print('<p>'.$contents.'</p>');
?>
-->
</section>
</body>
</html>

