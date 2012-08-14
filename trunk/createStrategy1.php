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
            	<img src="assets/images/banner" class="bannerImage" alt="دروس تقويه ادي" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="nav">الدخول</a>
        	<a href="other.php" class="nav">أنشطة أخرى</a>
        	<a href="volunteer.php" class="nav">متطوعين</a>
        	<a href="report.php" class="nav">ملاحظات شهرية</a>
        	<a href="strategy.php" class="nav">خطط شهرية</a>
        	<a href="getDay.php" class="nav">الغياب</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
        		<?php
                include 'assets/modules/unauthorized.php';
                ?>
				
				<?php
					$month = mysql_real_escape_string( $_POST['month'] );
					$year = date('Y');
				
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resalastrategy";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$createQuery = mysql_query("CREATE TABLE `$database`.`$month$year` (
						`status` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
						`date` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
						`day` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
						`body` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
						`strategy_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY
						) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;",$conn);
					
					if($createQuery){
						?>
						<script>
							alert("تم أنشاء خطة شهرية جديدة فارغة بنجاح لشهر <?php echo $month. " ".$year ?>");
							location.href = "otherOption.php";
						</script>
						<?php
					}
					else{
						?>
						<script>
							alert("لقد أنشاءت الخطة الشهرية لشهر <?php echo $month." ".$year ?> مسبقاً");
							location.href = "otherOption.php";
						</script>
						<?php
					
					}
					
					mysql_close();
				?>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
