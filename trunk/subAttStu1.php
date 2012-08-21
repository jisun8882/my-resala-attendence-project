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
                	<a href="adminOptions.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <?php
					echo $studentID = $_POST['studID'];
					echo $groupID = $_POST['groupID'];
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getAllSched = mysql_query("SELECT * FROM schedule
						WHERE group_id = '".$groupID."' ",$conn);
						
					while($row = mysql_fetch_array($getAllSched) ){
						echo $row['schedule_id'];
						echo $row['stuff_id'];
						
						$getCurrentClass = mysql_query("SELECT DISTINCT currentClass FROM attend
							WHERE schedule_id = '".$row['schedule_id']."'", $conn);
							
						while($row2 = mysql_fetch_array($getCurrentClass) ){
							mysql_query("INSERT INTO attend
						(attend_id, schedule_id, group_id, stuff_id, student_id, 
						percentage, currentClass)
						VALUES
						(NULL, '".$row['schedule_id']."', '".$groupID."', '".$row['stuff_id']."', 
						'$studentID', '0', '".$row2['currentClass']."')", $conn);
						}
						
					}
					
				?>
                
                <script>
					alert("تم أضافة الطالب إلى الغياب");
					window.location = "adminOptions.php";
				</script>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
