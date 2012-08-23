<?php
session_start();
if(isset($_SESSION['username']))
  unset($_SESSION['username']); 
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
        		<div class="VoloptionsDiv">
				
				<?php
					$stuffID = $_POST['stuffID']."<br />";
					$groupID = $_POST['groupID']."<br />";
					$scheduleID = $_POST['scheduleID']."<br />";
					
					$_SESSION['currentSchedule'] = $scheduleID;
					
					$_SESSION['groupID'] = $groupID;
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getAllStudentsID = mysql_query("SELECT * FROM attend
					WHERE schedule_id = '".$scheduleID."'",$conn);
					
					echo "<table class='table table-hover table-condensed' >";
					echo "<tr>";
					echo "<th>حضور</th> <th>نسبة الحضور</th> <th>الموبيل</th> <th>الاسم</th>";
					echo "</tr>";
					
					while($row = mysql_fetch_array($getAllStudentsID) ){
						
						$getNames = mysql_query("SELECT * FROM student
									WHERE student_id = '".$row['student_id']."' ",$conn);
						while($row2 = mysql_fetch_array($getNames) ){
							
						echo "<tr>";
						
						echo "<td>";
						echo "<form action='addAttend.php' method='post' name='submitAttend'> ";
						echo "<input name='studID' type='hidden' value='".$row2['student_id']."' />
							<input name='percent' type='hidden' value='".$row['percentage']."' />
							<input name='current' type='hidden' value='".$row['currentClass']."' />
						<input name='sizes[]' type='checkbox' value='".$row2['student_id']."'>";
						echo "</td>";
						
						echo "<td>";
						echo $row['percentage'] . "/" . $row['currentClass'];
						echo "</td>";
						
						echo "<td>";
						echo $row2['mobile'];
						echo "</td>";
						
						echo "<td>";
						echo $row2['f_name'] . " " . $row2['m_name'] . " " . $row2['l_name'];
						echo "</td>";
						
						echo "</tr>";
					}
					
					}

					echo"<tr>";
					echo"<td>";
					echo "<input type='submit' class='btn btn-inverse' value='أضف'";
					echo "</tr>";				
					
					?>
                    
                    </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
