<?php
header("Content-Type: text/html; charset=Shift_JIS");
?>

<!DOCTYPE html>
<html lang = "ja">

<head>
<meta charset = "UTF-8">
<title>�f����</title>
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

<h3>�N���X�T�C�g�X�N���v�e�B���O�̃T���v���y�[�W�ł��B</h3>

<h1>�f����</h1>
<section>
    <h2>�V�K���e</h2>
        <form action="" method="post">
               <div class="name"><span class="label">�����O(32�����ȓ�):</span><input type="text" name="name" value=""></div></br>
        <div class="honbun"><span class="label">�{��(200�����ȓ�):</span><textarea name="comment" cols="30" rows="3" maxlength="80" wrap="hard" placeholder="200���ȓ��œ��͂��Ă��������B"></textarea></div>
        <input type="submit" value="���e">
    </form>
</section>
<section class="toukou">
    <h2 >���e�ꗗ</h2>
<!--
<?php
     if(isset($_POST['comment'])){
         echo "<p>���e�͂܂�����܂���</p>";
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
$data = $data."<p>���e��:".$personal_name."</p>\r\n";
$data = $data."<p>���e:</p>\r\n";
$data = $data."<p>".$contents."</p>\r\n";

print('<p>���e��:'.$personal_name.'</p>');
print('<p>���e:</p>');
print('<p>'.$contents.'</p>');
?>
-->
</section>
</body>
</html>

