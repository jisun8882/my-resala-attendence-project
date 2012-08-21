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
					
					$deleteQuery = mysql_query("DROP TABLE attend", $conn);
					$createQuery = mysql_query("CREATE TABLE IF NOT EXISTS `$database`.`attend` (
						`attend_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
						`schedule_id` INT( 5 ) NOT NULL ,
						`group_id` INT( 5 ) NOT NULL ,
						`stuff_id` INT( 5 ) NOT NULL ,
						`student_id` INT( 5 ) NOT NULL ,
						`percentage` INT( 5 ) NOT NULL ,
						`currentClass` INT( 5 ) NOT NULL ,
						UNIQUE (`schedule_id` , `group_id` , `stuff_id`, `student_id`)
						) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;", $conn);
						
					if($createQuery){
						?>
                        <script>
							alert("تم حذف الملاحظات الشهرية");
							window.location = "adminOptions.php";
						</script>
                        <?php
					}
					else{
						?>
                        <script>
							alert("عفواً، حدث خطأ أعد المحاولة مرة آخرى");
							window.location = "adminOptions.php";
						</script>
                        <?php
					}
				?>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
