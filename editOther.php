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
                	<a href="otherOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="optionsDiv">
                	<h4>أختار قائمة أنشطة شهرية</h4>
                    <h4>: أخطار الشهر</h4>
                    <?php
						$server = "localhost";
						$username = "root";
						$password = "";
						$database = "information_schema";
						$myDatabase = "resalaother";
						
						$conn = mysql_connect($server, $username, $password);
						if (!$conn) {die('Could not connect due to: ' . mysql_error());}
						
						mysql_query("SET NAMES cp1256");
						mysql_query("set characer set cp1256");
						
						mysql_select_db($database, $conn);
						
						$getTablesquery = mysql_query("SELECT TABLE_NAME FROM TABLES WHERE TABLE_SCHEMA LIKE '$myDatabase' ORDER BY CREATE_TIME ASC",$conn);
						
						echo "<form action='editOther1.php' method='post' name='editTables'> ";
						echo "<select name='getTableName'>";
						echo "<option>- أختار قائمة الأنشطة من هنا -</option>";
						while($row = mysql_fetch_array($getTablesquery)  ){
							echo "<option value='".$row['TABLE_NAME']."'>";
							echo $row['TABLE_NAME'];
							echo "</option>";
						}
						
						echo "</select><br />";
						echo "<input type='submit' name='submit' value='أختار' />";
						echo "</form>";
						
						mysql_close();
					?>
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
