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
            	<img src="assets/images/banner.png" class="bannerImage" alt="���� ����� ���" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="navButton">������</a>
        	<a href="other.php" class="navButton">����� ����</a>
        	<a href="volunteer.php" class="navButton">�������</a>
        	<a href="report.php" class="navButton">������� �����</a>
        	<a href="strategy.php" class="navButton">��� �����</a>
            <a href="schedule.php" class="navButton">�������</a>
        	<a href="getDay.php" class="navButton">������</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
        		<?php
                include 'assets/modules/unauthorized.php';
                ?>
                <div class="back">
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>
                	<a href="studentOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="addStudentDataDiv">
                	<h4>��� ������ ����</h4>
                    
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
					
					$getStudentquery = mysql_query("SELECT * FROM student ORDER BY f_name ASC",$conn);
		
					echo "<table class='table table table-hover table-condensed' >";
					echo "<tr>";
					echo "<th>���</th><th>�������</th> <th>�����</th>";
					echo "</tr>";
					
					while($row = mysql_fetch_array($getStudentquery)  ){
						
						echo "<tr>";
						
						echo "<td>";
						echo "<form action='deleteStudent2.php' method='post' name='submitStudID'> ";
						echo "<input name='studID' type='hidden' value='".$row['student_id']."' />
								<input class='btn btn-danger' type='submit' value='���' />";
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
					mysql_close();
				
				?>
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
