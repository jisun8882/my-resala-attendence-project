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
        		<?php
                include 'assets/modules/unauthorized.php';
                ?>
                
                <div class="back">
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>
                	<a href="strategyOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="optionsDiv">
                	<h4>�����  ����� �������</h4>
                    <h4>: ����� �����</h4>
                    <?php
						$server = "localhost";
						$username = "root";
						$password = "";
						$database = "information_schema";
						$myDatabase = "resalastrategy";
						
						$conn = mysql_connect($server, $username, $password);
						if (!$conn) {die('Could not connect due to: ' . mysql_error());}
						
						mysql_query("SET NAMES cp1256");
						mysql_query("set characer set cp1256");
						
						mysql_select_db($database, $conn);
						
						$getTablesquery = mysql_query("SELECT TABLE_NAME FROM TABLES WHERE TABLE_SCHEMA LIKE '$myDatabase' ORDER BY CREATE_TIME ASC",$conn);
						
						echo "<form action='deleteStrategy1.php' method='post' name='editTables'> ";
						echo "<select name='getTableName'>";
						echo "<option>- ����� ����� ������� �� ��� -</option>";
						while($row = mysql_fetch_array($getTablesquery)  ){
							echo "<option value='".$row['TABLE_NAME']."'>";
							echo $row['TABLE_NAME'];
							echo "</option>";
						}
						
						echo "</select><br />";
						echo "<input type='submit' name='submit' value='�����' />";
						echo "</form>";
						
						mysql_close();
					?>
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
