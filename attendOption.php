<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<!-- InstanceBeginEditable name="doctitle" -->
<title>���� ����� ����� �����</title>
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
                	<a href="adminOptions.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDiv">
                	
                    <h2>����� ���� ���� �����</h2>
                    <br />
                    
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
					
					$getAllSchedules = mysql_query("SELECT * FROM `$database`.`schedule`
					LEFT JOIN stuff ON schedule.stuff_id = stuff.stuff_id
					LEFT JOIN resala.group ON schedule.group_id = group.group_id
					ORDER BY dayOrder ASC",$conn);
					
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>����� ����</th> <th>������</th> 
							<th>�����</th> <th>�������</th> <th>������</th> <th>����</th>";
					echo "</tr>";
					while($row=mysql_fetch_array($getAllSchedules) ){
						echo "<tr>";
						
						echo "<td>";
						echo "<form action='createAttend.php' method='post' name='submitAtt'> ";
						echo "<input name='stuffID' type='hidden' value='".$row['stuff_id']."' />
							<input name='scheduleID' type='hidden' value='".$row['schedule_id']."' />
							<input name='groupID' type='hidden' value='".$row['group_id']."' />
							<input type='submit' value='�����' />
							</form>";
						echo "</td>";
						
						echo "<td>";
						echo $row['date'];
						echo "</td>";
						
						echo "<td>";
						echo $row['day'];
						echo "</td>";
						
						echo "<td>";
						echo $row['f_name'] . " " . $row['m_name'] . " " . $row['l_name'];
						echo "</td>";
						
						echo "<td>";
						echo $row['subject'];
						echo "</td>";
						
						echo "<td>";
						echo $row['name'];
						echo "</td>";
						
						echo "</tr>";
						
						$insertQuery = mysql_query("INSERT INTO studentReport
						(sr_id, student_id, group_id, schedule_id, comment, 1st_monthly, 
							2nd_monthly, 3rd_monthly, 4th_monthly)
						VALUES
						(NULL, '".$row['student_id']."', '".$row['group_id']."', '".$row['schedule_id']."', 'NO', 'NO', 'NO', 'NO', 'No')", $conn);
					}
					
					echo "</table>";
					mysql_close();
				?>
                <h2><a href="SubAttStu.php"class="adminsOptionA" >����� ���� �� ��� ����� �������</a></h2>
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
