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
                
                <div class="back">
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>
                	<a href="adminOptions.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDiv">
                
                <?php
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getStudent = mysql_query("SELECT DISTINCT student_id
						FROM groupStudent
						WHERE (student_id) NOT IN
						(SELECT student_id FROM attend)", $conn);
						
						echo "<table class='table table-hover table-condensed' >";
					
					while($row = mysql_fetch_array($getStudent) ){
						$row['student_id'];
						
						$getStudentInfo = mysql_query("SELECT * FROM student
									WHERE student_id = '".$row['student_id']."' ", $conn);
						
						while($row2 = mysql_fetch_array($getStudentInfo) ){
							
							$getStudentGroup = mysql_query("SELECT * FROM groupStudent
									WHERE student_id = '".$row['student_id']."' ", $conn);
									
							while($row3 = mysql_fetch_array($getStudentGroup) ){
								
								$getGroupName = mysql_query("SELECT * FROM resala.group
									WHERE group_id = '".$row3['group_id']."' ",$conn);
									
								while($row4 = mysql_fetch_array($getGroupName) ){
								
							echo "<tr>";
							
							echo "<td>";
							echo "<form name='addStudents' method='post' action='subAttStu1.php'>";
							echo "<input type='hidden' name='studID' value='".$row['student_id']."' />
									<input type='hidden' name='groupID' value='".$row3['group_id']."' />
									<input type='submit' class='btn' value='أضف' >";
							echo "</form>";
							echo"</td>";
							
							
							echo "<td>";
							echo $row4['name'];
							echo "</td>";
							
							echo "<td>";
							echo $row2['f_name']." ".$row2['m_name']." ".$row2['l_name']; 
							echo "</td>";
							echo "</tr>";
						}
							
							}
								
								}
							
					}
						echo "</table>";
					
				
				?>
                
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
