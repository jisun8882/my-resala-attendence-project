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
        		
                <div class="back">
                	<a href="index.php"><img src="assets/images/home.png" /></a>
                	<a href="report.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDiv">
                	<?php
                    $groupID = $_POST['group'];
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
					
					$getGroupName = mysql_query("SELECT name FROM `$database`.`group` 
					WHERE group_id = '$groupID' ",$conn);
					
					while($row = mysql_fetch_array($getGroupName)  ){
						echo "<h2><u>"; 
						echo $row['name'];
						echo "</u></h2> <br />";
						$_SESSION['groupName'] = $row['name'];
					}
					
					$getStudentGroupquery = mysql_query("SELECT * FROM groupStudent 
					WHERE group_id = $groupID ",$conn);
					
					echo "<table border='1' class='volunteerTable'>";
					
					while($row = mysql_fetch_array($getStudentGroupquery)  ){
						
						$getSchedule = mysql_query("SELECT ", $conn);
						
						$getStudentInfoQuery = mysql_query("SELECT * FROM student 
						WHERE 
						student_id = ".$row['student_id']." ",$conn);
						
						while($row = mysql_fetch_array($getStudentInfoQuery)  ){
							
						echo "<tr>";
						echo "<th><font style= 'font-size:20pt'>الموبيل</font></th> <th><font style= 'font-size:20pt'>الاسم</font></th>";
						echo "</tr>";
						
						echo "<tr>";
						
						/*
						echo "<td>";
						echo "<form action='editGroup2.php' method='post' name='submitStu2Grp'> ";
						echo "<input name='studID' type='hidden' value='".$row['student_id']."' />
						<input name='sizes[]' type='checkbox' value='".$row['student_id']."'>";
						echo "</td>";
						*/
						
						echo "<td><font style= 'font-size:20pt'>";
						echo $row['mobile'];
						echo "</font></td>";
						
						echo "<td><font style= 'font-size:20pt'>";
						echo $row['f_name'] . " " . $row['m_name'] . " " .$row['l_name'];
						echo "</font></td>";
						
						echo "</tr>";
						
						$getAttend = mysql_query("SELECT * FROM attend
							LEFT JOIN stuff ON attend.stuff_id = stuff.stuff_id
							WHERE student_id = '".$row['student_id']."' ", $conn);
						
						echo "<th>نسبه الحضور</th> <th>الماده</th>";
						echo "</tr>";
						
						while($row2 = mysql_fetch_array($getAttend) ){
					
							echo "<tr>";
							
							echo "<td>";
							echo $row2['percentage']."/".$row2['currentClass'];
							echo "</td>";
							
							echo "<td>";
							echo $row2['subject'];
							echo "</td>";
							
							echo "</tr>";
						}
						
						echo "<tr><td colspan='2'> <hr /> </td></tr>";
						
						}
					}
					
					echo "</form>";
						
					echo "</table>";
					
					mysql_close();
					
					?>
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
