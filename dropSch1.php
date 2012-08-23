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
                	<a href="scheduleOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
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
					
					echo $schedID = $_POST['schedID'];
					echo $stuffID = $_POST['stuffID'];
					echo $groupID = $_POST['groupID'];
					
					$getDateDay = mysql_query("SELECT date,day FROM `$database`.`schedule`
						WHERE schedule_id = '$schedID' ",$conn);
						
					while($row = mysql_fetch_array($getDateDay) ){
						$currentDate = $row['date'];
						$currentDay = $row['day'];
					}
					
					$deleteSchedule = mysql_query("DELETE FROM `$database`.`schedule`
								WHERE schedule_id = '$schedID' ",$conn);
					
					$deleteStuffSlot = mysql_query("SELECT * FROM `$database`.`stuff`
					WHERE stuff_id = '$stuffID' ",$conn);
					
					while($row = mysql_fetch_array($deleteStuffSlot) ){
						$resetSlot1 = mysql_query("UPDATE `$database`.`stuff`
								SET slot1 = 'لا'
								WHERE date1 = '$currentDate' AND day1 = '$currentDay' ",$conn);
								
						$resetSlot2 = mysql_query("UPDATE `$database`.`stuff`
								SET slot2 = 'لا'
								WHERE date2 = '$currentDate' AND day2 = '$currentDay' ",$conn);
					}
					
					echo mysql_error();
					mysql_close();
					
				?>
                
                <script>
				location.href = "adminOptions.php";
				</script>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
