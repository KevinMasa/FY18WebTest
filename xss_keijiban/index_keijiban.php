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

<section class="toukou">
    <h2 >投稿一覧</h2>
<?php

    $serverName1 = "fy18test.database.windows.net";
$connectionOptions1 = array(
    "Database" => "fy18test",
    "Uid" => "fy18test",
    "PWD" => "Fy18_test"
);

$conn1 = sqlsrv_connect($serverName1, $connectionOptions1);
$tsql1 = "select * from keijiban";

$getResults1= sqlsrv_query($conn1, $tsql1);
if ($getResults1 == FALSE)
    echo (sqlsrv_errors());

while (sqlsrv_fetch($getResults1) === true) {
echo "<p>".sqlsrv_get_field($getResults1, 2)."</p>";
echo "<p>投稿者:".sqlsrv_get_field($getResults1, 0)."</p>";
echo "<p>内容:</p>";
echo "<p>".sqlsrv_get_field($getResults1, 1)."</p>";
echo "<hr>";
}
sqlsrv_free_stmt($getResults1); 
sqlsrv_close( $conn1);
echo "<hr>";
?>
</section>
</body>
</html>

