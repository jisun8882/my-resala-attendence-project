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
                	<a href="otherOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDiv">
                	<?php
						$otherID = $_POST['otherID'];
						$_SESSION['otherId'] = $otherID;
						$tableName = $_SESSION['tableName'];
						
						$server = "localhost";
						$username = "root";
						$password = "";
						$database = "resalaother";
						
						$conn = mysql_connect($server, $username, $password);
						if (!$conn) {die('Could not connect due to: ' . mysql_error());}
						
						mysql_query("SET NAMES cp1256");
						mysql_query("set characer set cp1256");
						
						mysql_select_db($database, $conn);
						
						$getOtherQuery = mysql_query("SELECT * FROM $tableName WHERE other_id = '$otherID'",$conn);
						
						echo "<form name='otherData' action='editOtherItem2.php' method='POST'>";
						echo "<table width='700px' border='0'>";
						
						while($row = mysql_fetch_array($getOtherQuery)  ){
								echo "<tr>";
								echo "<td colspan='2'>";
								echo "<input name='body' type='text' size='80' style='text-align:right' autocomplete='off' value='".$row['body']."' />";
								echo ": ������ </td>";
								echo "</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<td>";
						
								echo "</td>";
					
								echo "<td>";
								echo "<select name='day'>
										<option value='".$row['day']."'>".$row['day']."</option>
                                    	<option>- ����� ����� -</option>
                                        <option value='�����'>�����</option>
                                        <option value='�����'>�����</option>
                                        <option value='�������'>�������</option>
                                        <option value='��������'>��������</option>
                                        <option value='��������'>��������</option>
                                        <option value='������'>������</option>
                                        <option value='������'>������</option>
                                    </select>";
								echo ": �����</td>";
								echo "</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<td>";
								
								echo "</td>";
								echo "<td>";
								
								echo "<input name='date' type='text' size='15' style='text-align:right' autocomplete='off' value='".$row['date']."' />";
								echo ": ������� </td>";
								
								echo "</td>";
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
								echo "<input type='submit' class='btn' value='�����' />";
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
