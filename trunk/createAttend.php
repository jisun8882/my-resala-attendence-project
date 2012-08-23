<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<!-- InstanceBeginEditable name="doctitle" -->
<title>دروس تقويه جمعية رسالة</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="assets/stylesheet/navButton.css" />
<link rel="stylesheet" type="text/css" href="assets/stylesheet/main.css" />
<link href="assets/stylesheet/bootstrap.css" rel="stylesheet">

<script language="javascript" src="assets/javascript/jquery.js" ></script>
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
        	<a href="admin.php" class="navButton">الدخول</a>
        	<a href="other.php" class="navButton">أنشطة أخرى</a>
        	<a href="volunteer.php" class="navButton">متطوعين</a>
        	<a href="report.php" class="navButton">ملاحظات شهرية</a>
        	<a href="strategy.php" class="navButton">خطط شهرية</a>
            <a href="schedule.php" class="navButton">الجداول</a>
        	<a href="getDay.php" class="navButton">الغياب</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
        		<?php
                include 'assets/modules/unauthorized.php';
                ?>
                
                <?php
					$stuffID = $_POST['stuffID'];
					$scheduleID = $_POST['scheduleID'];
					$groupID = $_POST['groupID'];
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$updateTable = mysql_query("UPDATE schedule
					SET hasAttend = '1' 
					WHERE schedule_id = '$scheduleID'", $conn);
					
					$getStudent = mysql_query("SELECT student_id FROM resala.groupStudent
					WHERE group_id = '$groupID' ",$conn);
					
					while($row=mysql_fetch_array($getStudent) ){
						
						$myQuery = "INSERT INTO attend
					(attend_id, schedule_id, group_id, stuff_id, student_id, percentage,currentClass)
					VALUES
					(NULL, '$scheduleID', '$groupID', '$stuffID', '".$row['student_id']."', '0', '0') ";
						
						mysql_query($myQuery, $conn);
					 
					}
					
					if($getStudent){
						?>
                        <script>
							alert("تم أنشاء ورقة الغياب بنجاح");
							window.location = "adminOptions.php";
						</script>
                        <?php	
					}
					
					else{
						?>
                        <script>
							alert("خطاً أعد المحاولة مره أخرى");
							window.location = "adminOptions.php";
						</script>
                        <?php
					}
					mysql_error();
					mysql_close();
				?>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
