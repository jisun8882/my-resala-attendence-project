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
                	<a href="scheduleOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class='VoloptionsDivS'>
                
                	<h4>����� �����</h4>
                   <?php
				   	$groupID = $_POST['groupID'];
					$stuffID = $_POST['stuffID'];
					$scheduleID = $_POST['schedID'];
					$oldDate = $_POST['oldDate'];
					$oldDay = $_POST['oldDay'];
					
					$_SESSION['scheduleID'] = $scheduleID;
					$_SESSION['oldStuffIID'] = $stuffID;
					$_SESSION['oldDate'] = $oldDate;
					$_SESSION['oldDay'] = $oldDay;
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getSubjectQuery = mysql_query("SELECT subject FROM `$database`.`stuff` 
									WHERE stuff_id = '$stuffID' ",$conn);
						
					while($row = mysql_fetch_array($getSubjectQuery)  ){
						$getALLStuff = mysql_query("SELECT * FROM `$database`.`stuff`
						WHERE (slot1 = '��' OR slot2 = '��') 
						AND 
						subject = '".$row['subject']."' ", $conn);
						
						echo "<table border='1' class='volunteerTable'>";
						echo "<tr>";
						echo "<th>�����</th> <th>������ ������</th> <th>�����</th> <th>������ �����</th> <th>�������</th> <th>�����</th>";
						echo "</tr>";
					
						while($row2 = mysql_fetch_array($getALLStuff)  ){
							
							if($row2['slot1'] == '���' ){
							$row2['day1'] = "";
							$row2['date1'] = "��� ����";
						}
					
						if($row2['slot2'] == '���' ){
							$row2['day2'] = "";
							$row2['date2'] = "��� ����";
						}
						
							echo "<tr>";
							
							echo "<td>";
							echo "<form action='editSch2.php' method='post' name='submitstuffID'> ";
							echo "<input name='stuffID' type='hidden' value='".$row2['stuff_id']."' />
								  <input name='dateID' type='hidden' value='".$row2['date2']."' />
								  <input name='dayID' type='hidden' value='".$row2['day2']."' />
								  <input type='submit' value='�����' />
								  </form>";
							echo "</td>";
							
							echo "<td>";
							echo $row2['date2'] . " " . $row2['day2'];
							echo "</td>";
							
							echo "<td>";
							echo "<form action='editSch2.php' method='post' name='submitstuffID'> ";
							echo "<input name='stuffID' type='hidden' value='".$row2['stuff_id']."' />
								  <input name='dateID' type='hidden' value='".$row2['date1']."' />
								  <input name='dayID' type='hidden' value='".$row2['day1']."' />
								  <input type='submit' value='�����' />
								  </form>";
							echo "</td>";
							
							echo "<td>";
							echo $row2['date1'] . " " . $row2['day1'];
							echo "</td>";
							
							echo "<td>";
							echo $row2['mobile'];
							echo "</td>";
							
							echo "<td>";
							echo $row2['f_name'] . " " . $row2['m_name'] . " " .$row2['l_name'];
							echo "</td>";
							
							echo "</tr>";
							echo "</form>";
							
							echo "</tr>";
							
						}
						echo "</table>";
					}
						mysql_error();
					mysql_close($conn);
				   ?>
                   
				</div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
