<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UFT-8">
<title>SQL Injection</title>
</head>

<body>
<h2>アカウント情報の取得</h2>
<p>
<?php 
$inputid = $_POST["id"];

echo $_POST["id"]; 
$serverName = "fy18test.database.windows.net";
$connectionOptions = array(
    "Database" => "fy18test",
    "Uid" => "fy18test",
    "PWD" => "Fy18_test"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT *FROM maintb WHERE name='%' OR 1 = 1; -- %'";
echo $tsql;

$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ("id:".$row['name'] . " " . "password:".$row['password'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);

?>


</p>
</body>
</html>