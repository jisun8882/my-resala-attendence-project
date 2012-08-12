<?php
session_start(); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if( strcmp ($_SESSION['username'] , "resala" ) == 0 && strcmp ($_SESSION['password'] , "resala" ) == 0 )
{ 
	?>
    <script>
	window.location = "adminOptions.php";
	</script>
    <?php
}
else{
	?>
    <script>
	alert("تأكد من الاسم و كلمة السر");
	window.location = "admin.php";
	</script>
    <?php
}
?>
</body>
</html>