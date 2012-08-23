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
                	<a href="editStuMonRep.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDiv">
                	<h3>الملحوظة</h3>
                <?php
					$getSub = $_POST['getSubject'];
					$stuffScheduleID =  (explode(" ",$getSub));
					
					$scheduleID = $stuffScheduleID[1];
					$groupID = $stuffScheduleID[2];
					$stuffID = $stuffScheduleID[0];
					$studID = $_SESSION['studID'];
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getInfo = mysql_query("SELECT * FROM attend
						WHERE student_id = '$studID'
						AND schedule_id = '$scheduleID'
						AND stuff_id = '$stuffID'
						AND group_id = '$groupID' ", $conn);
						
					echo "<form name='commentData' method='post' action='addComment2.php' >";
					while($row = mysql_fetch_array($getInfo) ){
						
						$getStudentName = mysql_query("SELECT * FROM student
							WHERE student_id = '".$row['student_id']."' ", $conn);
						while($row2 = mysql_fetch_array($getStudentName) ){
							echo "<input type='hidden' name='finalStudID'
							value='".$row['student_id']."' />";
							echo "<input type='text' name='studentID' 
							value='".$row2['f_name']." ".$row2['m_name']." ".$row2['l_name']."'
							disabled style='text-align:right' /> ";
							echo ": الاسم";
							echo "<br />";
						}
						
						$getStudentGroup = mysql_query("SELECT * FROM `$database`.group
							WHERE group_id = '".$row['group_id']."' ", $conn);
						while($row3 = mysql_fetch_array($getStudentGroup) ){
							echo "<input type='hidden' name='finalGroupID'
							value='".$row['group_id']."' />";
							echo "<input type='text' name='groupID' 
							value='".$row3['name']."' disabled style='text-align:right' /> ";
							echo ": الصف";
							echo "<br />";
						}
						
						$getStudentStuff = mysql_query("SELECT * FROM `$database`.stuff
							WHERE stuff_id = '".$row['stuff_id']."' ", $conn);
						while($row4 = mysql_fetch_array($getStudentStuff) ){
							echo "<input type='hidden' name='finalStuffID'
							value='".$row['stuff_id']."' />";
							echo "<input type='hidden' name='finalScheduleID'
							value='$scheduleID' />";
							
							echo "<input type='text' name='stuffID' 
							value='".$row4['f_name']." ".$row4['m_name']." ".$row4['l_name']."'
							disabled style='text-align:right' /> ";
							echo ": المتطوع";
							echo "<br />";
							
							echo "<input type='text' value='".$row4['subject']."'
							disabled style='text-align:right' /> ";
							echo ": الماده";
							echo "<br />";
						}
						
					}
					echo ": أكتب الملحوظة";
					echo "<br />";
					echo "<textarea name='comment' cols='30' rows='10' style='resize: none'></textarea>";
					echo "<br />";
					echo "<input type='submit' class='btn btn-primary span3' value='أضف' />";
					
					echo "</form>";
					
					mysql_close();
				?>
                
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
