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
					
					$selectAllStuff = mysql_query("SELECT stuff_id FROM stuff",$conn);
					while($row = mysql_fetch_array($selectAllStuff) ){
							
							$resetAllStuff = mysql_query("UPDATE `stuff`
							SET slot1 = 'لا', slot2 = 'لا'
							WHERE stuff_id = '".$row['stuff_id']."' ",$conn);
					}
                    
                    $deleteQuery = mysql_query("DROP TABLE `schedule`",$conn);
					
					$createQuery = mysql_query("CREATE TABLE  `resala`.`schedule` (
								`schedule_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
								`stuff_id` INT( 5 ) NOT NULL ,
								`group_id` INT( 5 ) NOT NULL , 
								`day` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
								`dayOrder` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
								`date` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL ,
								`hasAttend` INT( 5 ) NOT NULL ,
								UNIQUE (`schedule_id`,`stuff_id`,`group_id`)
								) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
								,$conn);
                    
                    if($deleteQuery){
                        ?>
                        <script>
                            alert("تم حذف جميع الجداول");
                            location.href = "scheduleOption.php";
                        </script>
                        <?php
                    }
                    else{
                        ?>
                        <script>
                            alert("حصل خطأ الرجاء أعد العملية");
                            location.href = "scheduleOption.php";
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
