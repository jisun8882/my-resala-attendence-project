<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>Untitled Document</title>
</head>

<body>

<?php
include 'assets/modules/unauthorized.php';
?>

<?php

$f_name = mysql_real_escape_string( $_POST['f_name'] );
$m_name = mysql_real_escape_string( $_POST['m_name'] );
$l_name = mysql_real_escape_string( $_POST['l_name'] );

$mobile = mysql_real_escape_string( $_POST['mobile'] );
$gender = mysql_real_escape_string( $_POST['gender'] );

$server = "localhost";
$username = "root";
$password = "";
$database = "resala";

$conn = mysql_connect($server, $username, $password);
if (!$conn) {die('Could not connect due to: ' . mysql_error());}

mysql_query("SET NAMES cp1256");
mysql_query("set characer set cp1256");

mysql_select_db($database, $conn);

$addQuery = mysql_query("INSERT INTO `$database`.`student` (gender, mobile, l_name, m_name, f_name, student_id) VALUES ('$gender', '$mobile','$l_name','$m_name','$f_name',NULL)",$conn);

if($addQuery){
	?>
    <script>
		alert("تم إضافة الطالب بنجاح");
		location.href = "studentOption.php";
	</script>
    <?php
}
else{
	?>
    <script>
		alert("حصل خطأ الرجاء أعد العملية");
		location.href = "studentOption.php";
	</script>
    <?php

}

mysql_close();

?>

</body>
</html>