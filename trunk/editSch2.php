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
                	$date = $_POST['dateID'];
					$day = $_POST['dayID'];
					$stuffID = $_POST['stuffID'];
					
					$scheduleID = $_SESSION['scheduleID'];
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$oldDate = $_SESSION['oldDate'];
					$oldDay = $_SESSION['oldDay'];
					$oldStuffID = $_SESSION['oldStuffIID'];
					
					switch ($day)
						{
						case "السبت":
						  $dayOrder = "1";
						  break;
						case "الاحد":
						  $dayOrder = "2";
						  break;
						case "الاثنين":
						  $dayOrder = "3";
						  break;
						case "الثلاثاء":
						  $dayOrder = "4";
						  break;
						case "الاربعاء":
						  $dayOrder = "5";
						  break;
						case "الخميس":
						  $dayOrder = "6";
						  break;
						case "الجمعة":
						  $dayOrder = "7";
						  break;
						default:
						  echo "error";
						}
					
					$resetOldStuff1 = mysql_query("UPDATE `$database`.`stuff`
					SET slot1 = 'لا' 
					WHERE date1 = '$oldDate' AND day1 = '$oldDay'
					AND stuff_id = '$oldStuffID' ",$conn);
					
					$resetOldStuff2 = mysql_query("UPDATE `$database`.`stuff`
					SET slot2 = 'لا' 
					WHERE date2 = '$oldDate' AND day2 = '$oldDay'
					AND stuff_id = '$oldStuffID' ",$conn);
					
					$insertQuery = mysql_query("UPDATE `$database`.`schedule`
					SET stuff_id = '$stuffID', day = '$day', dayOrder='$dayOrder', date = '$date'
					WHERE schedule_id = '$scheduleID' ",$conn);
					
					$selectAttendStuff = mysql_query("SELECT * FROM attend
					WHERE stuff_id = '$oldStuffID' ", $conn);
					while($row = mysql_fetch_array($selectAttendStuff) ){
					$updateAttendQuery = mysql_query("UPDATE `$database`.`attend`
					SET stuff_id = '$stuffID'
					WHERE schedule_id = '$scheduleID' ",$conn);
					}
					
					$selectAttendStuff = mysql_query("SELECT * FROM studentComments
					WHERE stuff_id = '$oldStuffID' ", $conn);
					
					while($row = mysql_fetch_array($selectAttendStuff) ){
					$updateCommentQuery = mysql_query("UPDATE `$database`.`studentComments`
					SET stuff_id = '$stuffID'
					WHERE schedule_id = '$scheduleID' ",$conn);
					}
					
					$getFuck = mysql_query("SELECT * FROM stuff
										WHERE stuff_id = '$stuffID'",$conn);
					
					while($row=mysql_fetch_array($getFuck) ){
							$currentDay2 = $row['day2'];
							$currentDay1 = $row['day1'];
							$currentDate2 = $row['date2'];
							$currentDate1 = $row['date1'];
					}
					
					$x = strcmp($currentDay2 ,$day);
					$y = strcmp($currentDate2 ,$date);
					
					if($x == '0' and $y == '0' ){
						$updateStuffSlot2 = mysql_query("UPDATE `$database`.stuff
							SET slot2 = 'نعم'
							WHERE stuff_id = '$stuffID' ", $conn);
							if(!$updateStuffSlot2){echo mysql_error();}
					}
					else{
							$updateStuffSlot1 = mysql_query("UPDATE `$database`.stuff
							SET slot1 = 'نعم'
							WHERE stuff_id = '$stuffID' ", $conn);
							if(!$updateStuffSlot1){echo mysql_error();}
						}
						
					if($updateCommentQuery){
						?>
						<script>
							
							alert("تم تعديل الجدول بنجاح");
							location.href = "adminOptions.php";
						</script>
						<?php
					}
					else{
						echo mysql_error();
						?>
						<script>
							location.href = "adminOptions.php";
						</script>
						<?php
						
					}
						
					echo mysql_error();
					mysql_close();
				?>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
