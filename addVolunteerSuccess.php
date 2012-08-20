<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Welcome to Resala</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="assets/stylesheet/navButton.css" />
<link rel="stylesheet" type="text/css" href="assets/stylesheet/main.css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

  <div class="mainWrapper">
		
        <div class="bannerDiv">
        	<a href="index.php">
            	<img src="assets/images/banner.png" class="bannerImage" alt="دروس تقويه ادي" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="nav">الدخول</a>
        	<a href="other.php" class="nav">أنشطة أخرى</a>
        	<a href="volunteer.php" class="nav">متطوعين</a>
        	<a href="report.php" class="nav">ملاحظات شهرية</a>
        	<a href="strategy.php" class="nav">خطط شهرية</a>
            <a href="schedule.php" class="nav">الجداول</a>
        	<a href="getDay.php" class="nav">الغياب</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
            <?php
                include 'assets/modules/unauthorized.php';
			?>
                
<?php

$f_name = mysql_real_escape_string( $_POST['f_name'] );
$m_name = mysql_real_escape_string( $_POST['m_name'] );
$l_name = mysql_real_escape_string( $_POST['l_name'] );

$mobile = mysql_real_escape_string( $_POST['mobile'] );
$subject = mysql_real_escape_string( $_POST['subject'] );

$date1 = mysql_real_escape_string( $_POST['date1'] );
$day1 =  $_POST['day1'];

$date2 = mysql_real_escape_string( $_POST['date2'] );
$day2 = $_POST['day2'];

$server = "localhost";
$username = "root";
$password = "";
$database = "resala";

$conn = mysql_connect($server, $username, $password);
if (!$conn) {die('Could not connect due to: ' . mysql_error());}

mysql_query("SET NAMES cp1256");
mysql_query("set characer set cp1256");

mysql_select_db($database, $conn);

$addQuery = mysql_query("INSERT INTO `$database`.`stuff` 
(slot2, date2, day2, slot1, date1, day1, mobile, l_name, m_name, f_name, subject, stuff_id) 
VALUES 
('لا' , '$date2', '$day2', 'لا', '$date1', '$day1', '$mobile','$l_name','$m_name','$f_name', '$subject', NULL)",$conn);

if($addQuery){
	?>
    <script>
		alert("تم إضافة المتطوع بنجاح");
		location.href = "volunteerOption.php";
	</script>
    <?php
}
else{
	?>
    <script>
		alert("حصل خطأ الرجاء أعد العملية");
		location.href = "volunteerOption.php";
	</script>
    <?php

}

mysql_close();

?>

        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
