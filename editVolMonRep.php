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
                	<a href="volunteerReport.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDivS">
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
					
					$getAllStuff = mysql_query("SELECT * FROM `$database`.`schedule`
						LEFT JOIN stuff ON schedule.stuff_id = stuff.stuff_id
						LEFT JOIN `$database`.`group` ON schedule.group_id = group.group_id
						ORDER BY dayOrder ASC", $conn);
						
					echo "<table class='table table-hover table-condensed' ";
					echo "tr>";
					echo "<th>حضور</th> <th>عدد الحضور</th> <th>المعاد</th> <th>اليوم</th> <th>المادة</th>
										 <th>الصف</th> <th>المتطوع</th>";
					echo "</tr>";
					while($row = mysql_fetch_array($getAllStuff) ){
						
						echo "<tr>";
						
						echo "<td>";
						echo "<form action='attendVol.php' method='post' name='submitVolAttend'> ";
						echo "<input type='hidden' name ='stuffID' value='".$row['stuff_id']."' />
							<input type='hidden' name ='scheduleID' value='".$row['schedule_id']."' />
							<input type='hidden' name ='groupID' value='".$row['group_id']."' />
							<button type='submit' class='btn' >حضور</button>
							</form>";
						echo "</td>";
						
						echo "<td>";
						$getAttend = mysql_query("SELECT count(stuff_id) FROM stuffReport
							WHERE stuff_id = '".$row['stuff_id']."'
							AND schedule_id = '".$row['schedule_id']."'
							AND group_id = '".$row['group_id']."' ", $conn);
						while($row2 = mysql_fetch_array($getAttend) ){
							echo $row2[0];
						}
						echo "</td>";
						
						echo "<td>";
						echo $row['date'];
						echo "</td>";
						
						echo "<td>";
						echo $row['day'];
						echo "</td>";
						
						echo "<td>";
						echo $row['subject'];
						echo "</td>";
						
						echo "<td>";
						echo $row['name'];
						echo "</td>";
						
						echo "<td>";
						echo $row['f_name']." ".$row['m_name']." ".$row['l_name'];
						echo "</td>";
						
						
						echo "</tr>";
						
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
