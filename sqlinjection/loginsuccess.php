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

<table border="1">
<tr>
<th>id</th>
<th>name</th>
<th>password</th>
</tr>
<?php 
$inputid = "'".$_POST["id"]."'";

$serverName = "fy18test.database.windows.net";
$connectionOptions = array(
    "Database" => "fy18test",
    "Uid" => "fy18test",
    "PWD" => "Fy18_test"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT *FROM maintb WHERE name=".$inputid;
echo "渡されたSQL文　".$tsql;

$getResults= sqlsrv_query($conn, $tsql);
echo "<br>";

if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo "<tr>";
 echo "<td>".$row['id']."</td>";
 echo "<td>".$row['name']."</td>";
 echo "<td>".$row['password']."</td>";
// echo ("id:".$row['name'] . " " . "password:".$row['password'] . PHP_EOL);
 echo "</tr>";
}
sqlsrv_free_stmt($getResults);

//%' OR 1 = 1; -- %

?>


</table>

</body>
</html>