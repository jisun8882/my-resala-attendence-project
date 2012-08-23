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
                
                <div class="back">
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>  &nbsp;
                	<a href="studentOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="optionsDiv">
                <h4>تعديل بيانات</h4>
                <hr />
				
				<?php
					$studID = $_POST['studID'];
					$_SESSION['currentStudentID'] = $_POST['studID'];
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getStudQuery = mysql_query("SELECT * FROM student WHERE student_id = '$studID' ",$conn);
					
					echo "<form name='studentData' action='editStudent3.php' method='POST'>";
					echo "<table width='auto' border='0'>";
					
					while($row = mysql_fetch_array($getStudQuery)  ){
			
						echo "<tr>";
						echo "<td>";
						echo "<input name='f_name' type='text' size='10' style='text-align:right' autocomplete='off' class='input-small search-query' value='".$row['f_name']."' />";
						echo " : الاسم الاول</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>&nbsp;</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>";
						echo "<input name='m_name' type='text' size='10' style='text-align:right' autocomplete='off' class='input-small search-query' value='".$row['m_name']."' />";
						echo " : الاسم الاوسط</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>&nbsp;</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>";
						echo "<input name='l_name' type='text' size='10' style='text-align:right' autocomplete='off' class='input-small search-query' value='".$row['l_name']."' />";
						echo " : الاسم الاخير</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>&nbsp;</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>";
						echo "<input name='mobile' type='text' size='15' style='text-align:right' autocomplete='off' class='input-small search-query' value='".$row['mobile']."' /> ";
						echo " : الموبيل</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>&nbsp;</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>";
						echo "<select name='gender' class='input-medium'>
								<option value='".$row['gender']."'>".$row['gender']."</option>
								<option>----------------</option>
								<option>- أختار النوع -</option>
								<option value='بنت'>بنت</option>
								<option value='ولد'>ولد</option>
								</select> : النوع";
						echo "</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>&nbsp;</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td>";
						echo "<input name='submit' class='span2 btn btn-primary' type='submit' value='عدل' />";
						echo "</td>";
						echo "</tr>";
						
						
							
					}
					echo "</table";
					echo "</form>";
					mysql_close($conn);
				?>

                </div>
                
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
