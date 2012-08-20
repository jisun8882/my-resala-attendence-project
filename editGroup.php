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
                <div class="back">
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>
                	<a href="groupOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                <?php
                	echo "<h2><u>"; 
					echo $_SESSION['Gname'];
					echo "</u></h2> <br />";
				?>
                
                 <div class="addStudentDataDiv">
                	<h4>حذف طالب</h4>
                    
                <?php
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$groupID = $_SESSION['groupID'];
						
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getStudentGroupquery = mysql_query("SELECT student_id FROM groupStudent 
					WHERE 
					group_id = $groupID ",$conn);
					
					echo mysql_error();
					
					echo "<table border='1' class='volunteerTable'>";
					echo "<tr>";
					echo "<th>حذف</th><th>الموبيل</th> <th>الاسم</th>";
					echo "</tr>";
					
					while($row = mysql_fetch_array($getStudentGroupquery)  ){
						
						$getStudentInfoquery = mysql_query("SELECT * FROM student 
						WHERE 
						student_id = ".$row['student_id']." ",$conn);
						
						while($row = mysql_fetch_array($getStudentInfoquery)  ){
						
						echo "<tr>";
						
						echo "<td>";
						echo "<form action='editGroup2.php' method='post' name='submitStu2Grp'> ";
						echo "<input name='studID' type='hidden' value='".$row['student_id']."' />
						<input name='sizes[]' type='checkbox' value='".$row['student_id']."'>";
						echo "</td>";
						
						echo "<td>";
						echo $row['mobile'];
						echo "</td>";
						
						echo "<td>";
						echo $row['f_name'] . " " . $row['m_name'] . " " .$row['l_name'];
						echo "</td>";
						
						echo "</tr>";
						}
					}
					
					echo"<tr>";
					echo"<td>";
					echo "<input type='submit' value='حذف'";
					echo "</tr>";
					echo "</tr>";
					
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
