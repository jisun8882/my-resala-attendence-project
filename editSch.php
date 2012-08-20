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
                	<a href="scheduleOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDivS">
                	<h4>كل الجداول</h4>
                    
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
					
					$getScheduleQuery = mysql_query("SELECT * FROM schedule ORDER BY day ASC",$conn);
		
					echo "<table border='1' class='volunteerTable'>";
					echo "<tr>";
					echo "<th>حذف</th> <th>تعديل</th> <th>المتطوع</th> 
							<th>المعاد</th> <th>الصف</th> <th>اليوم</th> <th>المادة</th>";
					echo "</tr>";
					
					while($row = mysql_fetch_array($getScheduleQuery)  ){
						
						$getGroup = mysql_query("SELECT * FROM `resala`.`group`
										WHERE group_id = '".$row['group_id']."' ",$conn);
										
						while($row2 = mysql_fetch_array($getGroup)){
							
							$getStuff = mysql_query("SELECT * FROM stuff
									WHERE stuff_id = '".$row['stuff_id']."' ",$conn);
									
							while($row3 = mysql_fetch_array($getStuff)){
								
								echo "<tr>";
								
echo "<td>";
echo "<form action='dropSch1.php' method='post' name='deleteSchedule'> ";
echo "<input name='stuffID' type='hidden' value='".$row3['stuff_id']."' />
		<input name='groupID' type='hidden' value='".$row2['group_id']."' />
		<input name='oldDate' type='hidden' value='".$row['date']."' />
		<input name='oldDay' type='hidden' value='".$row['day']."' />
		<input name='schedID' type='hidden' value='".$row['schedule_id']."' />
		<input type='submit' value='حذف' />";
echo "</form>";
echo "</td>";

echo "<td>";
echo "<form action='editSch1.php' method='post' name='deleteSchedule'> ";
echo "<input name='stuffID' type='hidden' value='".$row3['stuff_id']."' />
		<input name='groupID' type='hidden' value='".$row2['group_id']."' />
		<input name='oldDate' type='hidden' value='".$row['date']."' />
		<input name='oldDay' type='hidden' value='".$row['day']."' />
		<input name='schedID' type='hidden' value='".$row['schedule_id']."' />
		<input type='submit' value='تعديل' />";
echo "</form>";
echo "</td>";

echo "<td>";
echo $row3['f_name'] . " " . $row3['m_name'] . " " . $row3['l_name'];
echo "</td>";

echo "<td>";
echo $row['date'];
echo "</td>";

echo "<td>";
echo $row2['name'];
echo "</td>";

echo "<td>";
echo $row['day'];
echo "</td>";

echo "<td>";
echo $row3['subject'];
echo "</td>";

echo "</tr>";
								
							}
							
						}
						
					}
					echo "</table>";
					echo mysql_error();
					mysql_close();
				
				?>
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
