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
                	<a href="createSch1.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
				<?php
					$groupID = $_SESSION['groupID'];
					$groupName = $_SESSION['Gname'];
					$subject = $_POST['subject'];
					$_SESSION['subjectName'] = $subject;
				?>
					
					<div class="VoloptionsDiv">
                <h4>أختار متطوع ل<?php echo $_SESSION['Gname'] ?> مادة <?php echo $_SESSION['subjectName']?></h4>
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
					
					$getVolQuery = mysql_query("SELECT * FROM stuff
					WHERE (slot1 = 'لا' OR slot2 = 'لا') AND subject = '$subject'
					",$conn);
					
					echo "<table class='table table-hover table condensed' >";
					echo "<tr>";
					echo "<th>أختار</th> <th>المعاد الثانى</th> <th>أختار</th> <th>المعاد الاول</th> <th>الموبيل</th> <th>الاسم</th>";
					echo "</tr>";
					while($row = mysql_fetch_array($getVolQuery)  ){
						if($row['slot1'] == 'نعم' ){
							$row['day1'] = "";
							$row['date1'] = "غير متاح";
						}
					
						if($row['slot2'] == 'نعم' ){
							$row['day2'] = "";
							$row['date2'] = "غير متاح";
						}
						
						echo "<tr>";
						
						echo "<td>";
						echo "<form action='createSch3.php' method='post' name='submitstuffID'> ";
						echo "<input name='stuffID' type='hidden' value='".$row['stuff_id']."' />
							  <input name='dateID' type='hidden' value='".$row['date2']."' />
							  <input name='dayID' type='hidden' value='".$row['day2']."' />
							  <input type='submit' class='btn' value='أختار' />
							  </form>";
						echo "</td>";
						
						echo "<td>";
						echo $row['date2'] . " " . $row['day2'];
						echo "</td>";
						
						echo "<td>";
						echo "<form action='createSch3.php' method='post' name='submitstuffID'> ";
						echo "<input name='stuffID' type='hidden' value='".$row['stuff_id']."' />
							  <input name='dateID' type='hidden' value='".$row['date1']."' />
							  <input name='dayID' type='hidden' value='".$row['day1']."' />
							  <input type='submit' class='btn' value='أختار' />
							  </form>";
						echo "</td>";
						
						echo "<td>";
						echo $row['date1'] . " " . $row['day1'];
						echo "</td>";
						
						echo "<td>";
						echo $row['mobile'];
						echo "</td>";
						
						echo "<td>";
						echo $row['f_name'] . " " . $row['m_name'] . " " .$row['l_name'];
						echo "</td>";
						
						echo "</tr>";
						echo "</form>";
					}
					echo "</table>";
					
					mysql_close($conn);
				?>

                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
