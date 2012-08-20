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
                	<a href="strategyOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDivS">
                <h4>تعديل بيانات</h4>
                <hr />
                <h3><a href="addStrategyItem.php" class='adminsOptionA'>&laquo; إضافة صف جديد</a></h3>
				
				<?php
					$tableName = $_POST['getTableName'];
					$_SESSION['tableName'] = $tableName;
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resalastrategy";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getOtherQuery = mysql_query("SELECT * FROM $tableName ORDER BY date ASC",$conn);

					echo "<table width='auto' border='1'>";
					echo "<tr>";
					echo "<th>حذف</th> <th>تعديل</th> <th>الحالة</th> <th>تاريخ</th> <th>يوم</th> <th>الأنشطة</th>";
					echo "</tr>";
					
					while($row = mysql_fetch_array($getOtherQuery)  ){
						echo "<tr>";
						
						echo "<td>";
						echo "<form name='deleteForm' method='post' action='deleteStrategyItem.php' >";
						echo "<input name='submit' type='submit' value='حذف'> ";
						echo "<input name='strategyID' type='hidden' value='".$row['strategy_id']."' />";
						echo "</form>";
						echo "</td>";
						
						echo "<td>";
						echo "<form name='editForm' method='POST' action='editStrategyItem.php' >";
						echo "<input name='strategyID' type='hidden' value='".$row['strategy_id']."' />";
						echo "<input name='submit' type='submit' value='عدل'> ";
						echo "</form>";
						echo "</td>";
						
						echo "<td>";
						echo $row['status'];
						echo "</td>";
						
						echo "<td>";
						echo $row['date'];
						echo "</td>";
						
						echo "<td>";
						echo $row['day'];
						echo "</td>";
						
						echo "<td>";
						echo $row['body'];
						echo "</td>";

						echo "</tr>";
						
						$counter++;
					}
					echo "</table";
					mysql_close($conn);
				?>

                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
