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
            	<img src="assets/images/banner.png" class="bannerImage" alt="���� ����� ���" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="nav">������</a>
        	<a href="other.php" class="nav">����� ����</a>
        	<a href="volunteer.php" class="nav">�������</a>
        	<a href="report.php" class="nav">������� �����</a>
        	<a href="strategy.php" class="nav">��� �����</a>
            <a href="schedule.php" class="nav">�������</a>
        	<a href="getDay.php" class="nav">������</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
        		<?php
                include 'assets/modules/unauthorized.php';
                ?>
                <div class="back">
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>
                	<a href="groupOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                <?php
                	echo "<h2><u>"; 
					echo $_SESSION['Gname'];
					$_SESSION['groupID'];
					$getIDint = intval($_SESSION['groupID']);
					echo "</u></h2> <br />";
				?>
                
                <div class="addStudentDataDiv">
                	<h4>��� ����</h4>
                    
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
					
					if( $odd = $getIDint%2 )
					{
						// $odd == 1; the remainder of 25/2
						$gender = "���";
						//echo 'ODD Number!';
					}
					else
					{
						// $odd == 0; nothing remains if e.g. $number is 48 instead,
						// as in 48 / 2
						$gender = "���";
						//echo 'EVEN Number!';
					}
					
					$getStudentquery = mysql_query("SELECT * FROM student WHERE gender = '$gender' ORDER BY f_name ASC",$conn);
		
					echo "<table border='1' class='volunteerTable'>";
					echo "<tr>";
					echo "<th>���</th><th>�������</th> <th>�����</th>";
					echo "</tr>";
					
					while($row = mysql_fetch_array($getStudentquery)  ){
						
						echo "<tr>";
						
						echo "<td>";
						echo "<form action='addGroup2.php' method='post' name='submitStu2Grp'> ";
						echo "<input name='studID' type='hidden' value='".$row['student_id']."' />
						<input name='sizes[]' type='checkbox' value='".$row['student_id']."'>";
						echo "</td>";
						
						echo "<td>";
						echo $row['mobile'];
						echo "</td>";
						
						echo "<td>";
						echo $row['f_name'] . " " . $row['m_name'] . " " .$row['l_name'];
						echo "</td>";
						
						echo "</tr>";
						
					}
					
					echo"<tr>";
					echo"<td>";
					echo "<input type='submit' value='���'";
					echo "</tr>";
					echo "</tr>";
					
					echo "</form>";
						
					echo "</table>";
					
					mysql_close();
				
				?>
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
