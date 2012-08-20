<?php
require_once('assets/modules/calendar/classes/tc_calendar.php');
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Welcome to Resala</title>

<link href="assets/modules/calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="assets/modules/calendar/calendar.js"></script>
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
                
                <div class="VoloptionsDiv">
                	<?php
						$strategyID = $_POST['strategyID'];
						$_SESSION['strategyId'] = $strategyID;
						$tableName = $_SESSION['tableName'];
						
						$server = "localhost";
						$username = "root";
						$password = "";
						$database = "resalastrategy";
						
						$conn = mysql_connect($server, $username, $password);
						if (!$conn) {die('Could not connect due to: ' . mysql_error());}
						
						mysql_query("SET NAMES cp1256");
						mysql_query("set characer set cp1256");
						
						mysql_select_db($database, $conn);
						
						$getOtherQuery = mysql_query("SELECT * FROM $tableName WHERE strategy_id = '$strategyID'",$conn);
						
						echo "<form name='otherData' action='editStrategyItem2.php' method='POST'>";
						echo "<table width='600px' border='0'>";
						
						while($row = mysql_fetch_array($getOtherQuery)  ){
								echo "<tr>";
								echo "<td colspan='2'>";
								echo "<input name='body' type='text' size='80' style='text-align:right' autocomplete='off' value='".$row['body']."' />";
								echo ": النشاط </td>";
								echo "</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<td>";
								echo "<select name='status'>
										<option value='".$row['status']."'>".$row['status']."</option>
                                    	<option>- أختار الحالة -</option>
                                        <option value='تم'>تم</option>
                                        <option value='لم يتم'>لم يتم</option>
                                    </select>: الحالة";
								echo "</td>";
					
								echo "<td>";
								echo "<select name='day'>
										<option value='".$row['day']."'>".$row['day']."</option>
                                    	<option>- أختار اليوم -</option>
                                        <option value='السبت'>السبت</option>
                                        <option value='الاحد'>الاحد</option>
                                        <option value='الاثنين'>الاثنين</option>
                                        <option value='الثلاثاء'>الثلاثاء</option>
                                        <option value='الاربعاء'>الاربعاء</option>
                                        <option value='الخميس'>الخميس</option>
                                        <option value='الجمعة'>الجمعة</option>
                                    </select>";
								echo ": اليوم</td>";
								echo "</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<td>";
								
								echo "</td>";
								echo "<td>";
								
								echo "<input name='date' type='text' size='15' style='text-align:right' autocomplete='off' value='".$row['date']."' />";
								echo ": التاريخ </td>";
								
								echo "</tr>";
								
								echo "<tr>";
								echo "<td> ";
								
								echo "</td>";
								
								echo "<td> ";
								
								echo "</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<td>";
								
								echo "</td>";
								
								echo "<td>";
								echo "<input type='submit' name='submit' value='تعديل' />";
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
