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
<h2>�A�J�E���g���̎擾</h2>

<?php 
$inputid = $_POST["id"];
$tsql= "SELECT *FROM maintb WHERE name='".pg_escape_string($inputid)."'";
echo "�n���ꂽSQL���@".$tsql;
?>
<br>
<p>���͂��ꂽ�u'�v�V���O���N�H�[�e�[�V�������J��Ԃ����Ƃɂ����</p>
<p>SQL���œ��ʂȈӖ������L�������ʂ̕����Ƃ��ĉ��߂����悤�ɏ������Ă��܂��B</p>
<br>


<table border="1">
<tr>
<th>id</th>
<th>name</th>
<th>password</th>
</tr>
<?php 
$inputid = $_POST["id"];

$serverName = "fy18test.database.windows.net";
$connectionOptions = array(
    "Database" => "fy18test",
    "Uid" => "fy18test",
    "PWD" => "Fy18_test"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT *FROM maintb WHERE name='".pg_escape_string($inputid)."'";


$getResults= sqlsrv_query($conn, $tsql);



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

<!-- php�R�[�h��

$inputid = $_POST["id"];

$serverName = "fy18test.database.windows.net";
$connectionOptions = array(
    "Database" => "fy18test",
    "Uid" => "fy18test",
    "PWD" => "Fy18_test"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT *FROM maintb WHERE name='".pg_escape_string($inputid)."'";


$getResults= sqlsrv_query($conn, $tsql);



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

-->

</body>
</html>