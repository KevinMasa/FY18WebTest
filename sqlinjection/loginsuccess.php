<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UFT-8">
<title>ログイン後</title>
</head>

<body>
<h1>ユーザーIDとパスワードの送信</h1>
<h2>ログイン後ページ</h2>
<p>
<?php 

$serverName = "fy18test.database.windows.net";
$connectionOptions = array(
    "Database" => "fy18test",
    "Uid" => "fy18test",
    "PWD" => "Fy18_test"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT *FROM maintb";
$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);

?>


</p>
</body>
</html>