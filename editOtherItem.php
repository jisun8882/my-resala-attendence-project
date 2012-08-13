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
        	<a href="#" class="nav">ملاحظات شهرية</a>
        	<a href="#" class="nav">خطط شهرية</a>
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
                
                <div class="VoloptionsDiv">
                	<?php
						$otherID = $_POST['otherID'];
						$_SESSION['otherId'] = $otherID;
						$tableName = $_SESSION['tableName'];
						
						$server = "localhost";
						$username = "root";
						$password = "";
						$database = "resalaother";
						
						$conn = mysql_connect($server, $username, $password);
						if (!$conn) {die('Could not connect due to: ' . mysql_error());}
						
						mysql_query("SET NAMES cp1256");
						mysql_query("set characer set cp1256");
						
						mysql_select_db($database, $conn);
						
						$getOtherQuery = mysql_query("SELECT * FROM $tableName WHERE other_id = '$otherID'",$conn);
						
						echo "<form name='otherData' action='editOtherItem2.php' method='POST'>";
						echo "<table width='700px' border='0'>";
						
						while($row = mysql_fetch_array($getOtherQuery)  ){
								echo "<tr>";
								echo "<td colspan='2'>";
								echo "<input name='body' type='text' size='80' style='text-align:right' autocomplete='off' value='".$row['body']."' />";
								echo ": النشاط </td>";
								echo "</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<td>";
								echo "<input name='date' type='text' size='15' style='text-align:right' autocomplete='off' value='".$row['date']."' />";
								echo ": التاريخ</td>";
								echo "</td>";
								
								echo "<td>";
								echo "<input name='day' type='text' size='15' style='text-align:right' autocomplete='off' value='".$row['day']."' />";
								echo ": اليوم</td>";
								echo "</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<td>";
								echo "  مثال: س س - ش ش - ي ي";
								echo "</td>";
								echo "<td>";
								echo "</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<td>";
								echo "<input type='submit' name='submit' value='تعديل' />";
								echo "</td>";
								
								echo "<td>";
								echo "</td>";
								echo "</tr>";
							
						}
						echo "</table>";
						echo "</form";
						
						mysql_close($conn);
					
					?>
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
