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
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

	<div class="mainWrapper">
		
        <div class="bannerDiv">
        	<a href="index.php">
            	<img src="assets/images/banner" class="bannerImage" alt="���� ����� ���" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="nav">������</a>
        	<a href="other.php" class="nav">����� ����</a>
        	<a href="volunteer.php" class="nav">�������</a>
        	<a href="report.php" class="nav">������� �����</a>
        	<a href="strategy.php" class="nav">��� �����</a>
        	<a href="getDay.php" class="nav">������</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
        		<h2>������</h2>
				
                <?php
					echo "<h3> �����: <font style='color:#F00'>" . $_SESSION['theDay'] . "</font><br /> �������: ";
					$day = $_SESSION['theDay'];
					$_SESSION['theDate'] = $_POST['date2'];
					echo "<font style='color:#F00'>" . $_SESSION['theDate'] ."</font></h3>";
				?>
                
                <?
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$queryy = mysql_query("SELECT * FROM schedule LEFT JOIN stuff 
					ON 
					schedule.stuff_id = stuff.stuff_id
					WHERE day = '$day' ",$conn);

					echo "<table border='1'>";
					
					echo "<tr>";
					echo "<th>���� ������</th> <th>������</th> <th>�������</th> <th>����</th> <th>������</th>";
					echo "</tr>";
					
					while($row = mysql_fetch_array($queryy)  ){
						echo "<tr>";
						
						echo "<td>";
						echo "<form action='' method='post' name='submitAttend'> ";
						echo "<input name='stuffID' type='hidden' value='".$row['stuff_id']."' />
							<input name='groupID' type='hidden' value='".$row['group_id']."' />
							<input name='scheduleID' type='hidden' value='".$row['schedule_id']."' />
							<input type='submit' value='����' />";
						echo "</td>";
						
						echo "<td>";
						echo $row['day'];
						echo "</td>";
						
						echo "<td>";
						echo $row['f_name']. " " . $row['m_name'] . " " . $row['l_name'];
						echo "</td>";
						
						echo "<td>";
						$getGroupName = mysql_query("SELECT name FROM `resala`.`group` 
													Where group_id = '".$row['group_id']."' ",$conn);
						while($row2 = mysql_fetch_array($getGroupName) ){
							echo $row2['name'];
						}
						
						echo "</td>";
						
						echo "<td>";
						echo $row['subject'];
						echo "</td>";
 						echo "</tr>";
						
						
					}
					
					echo "</table>";
					
					mysql_close();
				?>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
