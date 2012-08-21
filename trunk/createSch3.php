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
                
                <?php
					$groupID = $_SESSION['groupID'];
					$groupName = $_SESSION['Gname'];
					$_SESSION['subjectName'];
					echo $date = $_POST['dateID'];
					echo $day = $_POST['dayID'];
					echo "<br />";
					$stuffID = $_POST['stuffID'];
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
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
						
					$insertQuery = mysql_query("INSERT INTO `$database`.`schedule`
					(schedule_id, stuff_id, group_id, day,dayOrder, date)
					VALUES
					(NULL, '$stuffID', '$groupID', '$day','$dayOrder' , '$date')",$conn);
					
					$getTimes = mysql_query("SELECT * FROM stuff
										WHERE stuff_id = '$stuffID'",$conn);
					
					while($row=mysql_fetch_array($getTimes) ){
							$currentDay2 = $row['day2'];
							$currentDate2 = $row['date2'];
							
							$currentDay1 = $row['day1'];
							$currentDate1 = $row['date1'];
					}
					echo $currentDay2;
					echo $currentDate2;
					echo "<br />";
					echo $x = strcmp($currentDay2 ,$day);
					echo "<br />";
					echo $y = strcmp($currentDate2 ,$date);
					echo "<br />";
					if($x == '0' and $y == '0' ){
						$updateStuffSlot2 = mysql_query("UPDATE `$database`.stuff
							SET slot2 = 'نعم'
							WHERE stuff_id = '$stuffID' ", $conn);
							if(!$updateStuffSlot2){echo mysql_error();}
							echo "slot 2";
					}
					else{
							$updateStuffSlot1 = mysql_query("UPDATE `$database`.stuff
							SET slot1 = 'نعم'
							WHERE stuff_id = '$stuffID' ", $conn);
							if(!$updateStuffSlot1){echo mysql_error();}
							echo "slot 1";
						}
						
						if($insertQuery){
						?>
						<script>
							
							alert("تم أنشاء الجدول بنجاح <?php echo $groupName ?>");
							location.href = "scheduleOption.php";
						</script>
						<?php
					}
					else{
						echo mysql_error();
						?>
						<script>
							alert("حصل خطأ الرجاء أعد العملية");
							location.href = "scheduleOption.php";
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
