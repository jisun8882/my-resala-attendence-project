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
                	<a href="editStuMonRep.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDiv">
                	<?php
                    $groupID = $_POST['group'];
					$_SESSION['groupID'] = $groupID;
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getGroupName = mysql_query("SELECT name FROM `$database`.`group` 
					WHERE group_id = '$groupID' ",$conn);
					
					while($row = mysql_fetch_array($getGroupName)  ){
						echo "<h2><u>"; 
						echo $row['name'];
						echo "</u></h2> <br />";
						$_SESSION['groupName'] = $row['name'];
					}
					
					$getStudentGroupquery = mysql_query("SELECT * FROM groupStudent 
					WHERE group_id = $groupID ",$conn);
					
					echo "<table class='table table-hover table-condensed' >";
					
					while($row = mysql_fetch_array($getStudentGroupquery)  ){
						
						$getStudentInfoQuery = mysql_query("SELECT * FROM student 
						WHERE 
						student_id = ".$row['student_id']." ",$conn);
						
						while($row = mysql_fetch_array($getStudentInfoQuery)  ){
							
						echo "<tr>";
						echo "<th>��� ������</th> <th><font style= 'font-size:20pt'>�������</font></th> <th><font style= 'font-size:20pt'>�����</font></th>";
						echo "</tr>";
						
						echo "<tr>";
						
						echo "<td>";
						echo "<form name='addDetail' method='post' action='addComment.php' >";
						echo "<input type='hidden' name ='studID' value='".$row['student_id']."' />";
						echo "<input type='submit' class='btn' value='���' />";
						echo "</form>";
						echo "</td>";
						
						echo "<td><font style= 'font-size:20pt'>";
						echo $row['mobile'];
						echo "</font></td>";
						
						echo "<td><font style= 'font-size:20pt'>";
						echo $row['f_name'] . " " . $row['m_name'] . " " .$row['l_name'];
						echo "</font></td>";
						
						echo "</tr>";
						
						$getAttend = mysql_query("SELECT * FROM attend
							LEFT JOIN stuff ON attend.stuff_id = stuff.stuff_id
							WHERE student_id = '".$row['student_id']."' ", $conn);
						
						echo "<th>���������</th> <th>���� ������</th> <th>������</th>";
						echo "</tr>";
						
						while($row2 = mysql_fetch_array($getAttend) ){
					
							echo "<tr>";
							
							$getComments = mysql_query("SELECT * FROM studentComments
							WHERE student_id  = '".$row['student_id']."' 
							AND schedule_id = '".$row2['schedule_id']."'
							AND stuff_id = '".$row2['stuff_id']."' ", $conn);
							
							echo "<td> </td>";
							
							
							echo "<td>";
							echo $row2['percentage']."/".$row2['currentClass'];
							echo "</td>";
							
							echo "<td>";
							echo $row2['subject'];
							echo "</td>";
							
							while($row3 = mysql_fetch_array($getComments) ){
							
							echo "<tr>";
							echo "<td>";
							echo $row3['comment'];
							echo "</td>";
							echo "</tr>";
							
							}
							
							echo "</tr>";
						}
						echo "<tr><td colspan='4'> <hr /> </td></tr>";
						
						}
					}
					
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
