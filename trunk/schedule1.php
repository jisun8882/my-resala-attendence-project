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
<title>Welcome to Resala</title>
<script type="text/javascript" src="assets/javascript/jquery.js"></script>
<script type="text/javascript" src="assets/javascript/jquery.print.js"></script>
<script type="text/javascript" src="assets/javascript/printSnippt.js"></script>

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
                    <h2>عرض الجدول</h2>
                    <br />
                    
				<?php
					$groupID = $_POST['group'];
					
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
					
					while($row2 = mysql_fetch_array($getGroupName) ){
						echo $row2['name'];
						
					}
					
					$getScheduleQuery = mysql_query("SELECT * FROM schedule 
							WHERE group_id = '$groupID' 
							ORDER BY dayOrder,date ASC",$conn);
					
					echo "<p> </p>";
					echo "<table border='1' class='table table-condensed' >";
					echo "<tr>";
					echo " <th>المدرس مستر/مس</th> <th>المعاد</th> <th>اليوم</th> <th>المادة</th>";
					echo "</tr>";
							
					while($row = mysql_fetch_array($getScheduleQuery) ){
						$getStuffInfo = mysql_query("SELECT f_name, m_name, l_name, subject 
						FROM `$database`.`stuff`
						WHERE stuff_id = '".$row['stuff_id']."' ",$conn);
						
						while($row3 = mysql_fetch_array($getStuffInfo) ){
							echo "<tr>";
							
							echo "<td>";
							echo $row3['f_name'] . " " . $row3['m_name'] . " " . $row3['l_name'];
							echo "</td>";
							
							echo "<td>";
							echo $row['date'];
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
					
					echo "</table>";
					mysql_close();
				?>
                
                </div>
                
                <p>
                	<input type="button" class="btn btn-inverse PrintSch" value="أطبع الجدول" />
                </p>
                
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
