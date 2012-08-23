<?php
session_start();
if(isset($_SESSION['username']))
  unset($_SESSION['username']);
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
        		<div class="VoloptionsDivS">
                
                <h3>الخطة الشهرية لهذه الشهر</h3>
                <?php
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resalastrategy";
			
					$currentMonth = date('M');
					$currentYear = date('Y');
					$TableName = date('M');
					
					switch ($currentMonth)
					{
						case "Jan":
							$TableName = "يناير";
							echo "يناير"." ".$currentYear;
							break;
						case "Feb":
							$TableName = "فبراير";
							echo "فبراير"." ".$currentYear;
							break;
						case "Mar":
							$TableName = "مارس";
							echo "مارس"." ".$currentYear;
							break;
						case "Apr":
							$TableName = "أبريل";
							echo "أبريل"." ".$currentYear;
							break;
						case "May":
							$TableName = "مايو";
							echo "مايو"." ".$currentYear;
							break;
						case "Jun":
							$TableName = "يونيو";
							echo "يونيو"." ".$currentYear;
							break;
						case "Jul":
							$TableName = "يوليو";
							echo "يوليو"." ".$currentYear;
							break;
						case "Aug":
							$TableName = "أغسطس";
							echo "أغسطس"." ".$currentYear;
							break;
						case "Sep":
							$TableName = "سبتمبر";
							echo "سبتمبر"." ".$currentYear;
							break;
						case "Oct":
							$TableName = "أكتوبر";
							echo "أكتوبر"." ".$currentYear;
							break;
						case "Nov":
							$TableName = "نوفمبر";
							echo "نوفمبر"." ".$currentYear;
							break;
						case "Dec":
							$TableName = "ديسمبر";
							echo "ديسمبر"." ".$currentYear;
							break;
						default:
							echo "error";
					}
					
					$TableName = $TableName.$currentYear;
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getVolquery = mysql_query("SELECT * FROM `$database`.`$TableName`",$conn);
					if(!$getVolquery){echo mysql_error();}
					echo "<table class='table table-hover table-condensed' >";
					echo "<tr>";
					echo "<th>الحالة</th> <th>التاريخ</th> <th>اليوم</th> <th>النشاط</th>";
					echo "</tr>";
					
					while($row = mysql_fetch_array($getVolquery)  ){
						
						echo "<tr>";
						
						echo "<td class='repStatus'>";
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
						
					}
					echo "</table>";
					mysql_close();
				
				?>
                </div>
                
                <script>
				  $('table tr').each(function() {
					var customerId = $(this).find(".repStatus").html();
					if(customerId == "تم")
						{
							$(this).addClass("success");
						}
						else{
							if(customerId == "لم يتم"){
								$(this).addClass("error");
							}
							else{
								$(this).addClass("info");
							}
						}
				 });
				</script>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
