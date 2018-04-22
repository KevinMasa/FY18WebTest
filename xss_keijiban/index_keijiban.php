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
               <div class="name">
                <span class="label">お名前(32文字以内):</span>
               	<input type="text" name="name" value="">
               </div></br>
        <div class="honbun">
          <span class="label">本文(200文字以内):</span>
          <textarea name="comment" cols="30" rows="3" maxlength="80" wrap="hard" placeholder="200字以内で入力してください。"></textarea>
        </div>
        <input type="submit" value="投稿">
    </form>
</section>


<?php
     if(!isset($_POST['comment'])){
     }else{
     
$personal_name = "'".$_POST['name']."'";
$personal_comment = "'".$_POST['comment']."'";
$nowdate = date("Y-m-d");
$nowtime = date("G:i:s");
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
sqlsrv_free_stmt($getResults);
header('Location: index_keijiban.php');
exit();

}
?>

<section class="toukou">
    <h2 >投稿一覧</h2>
           <form action="index_keijiban.php" method="">
          	  <input type="submit" value="更新">
 		   </form>
<?php
    $serverName1 = "fy18test.database.windows.net";
$connectionOptions1 = array(
    "Database" => "fy18test",
    "Uid" => "fy18test",
    "PWD" => "Fy18_test"
);

$conn1 = sqlsrv_connect($serverName1, $connectionOptions1);
$tsql1 = "SELECT * FROM keijiban";

$getResults1= sqlsrv_query($conn1, $tsql1);
echo $getResults1;
if ($getResults1 == FALSE)
    echo (sqlsrv_errors());
    $row1 = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC);
echo $row1;    
echo "<p>".$row1['time']."</p>";
echo "<p>投稿者:".$row1['name']."</p>";
echo "<p>内容:</p>";
echo "<p>".$row1['contents']."</p>";
echo "<hr>";

while ($row1 = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
echo "<p>".$row1['time']."</p>";
echo "<p>投稿者:".$row1['name']."</p>";
echo "<p>内容:</p>";
echo "<p>".$row1['contents']."</p>";
echo "<hr>";
}
sqlsrv_free_stmt($getResults1);

?>
</section>
</body>
</html>

