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
                	<a href="groupOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
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
					
					$getTablesquery = mysql_query("SELECT name FROM `$database`.`group` 
					WHERE group_id = '$groupID' ",$conn);
					
					while($row = mysql_fetch_array($getTablesquery)  ){
						echo "<h2><u>"; 
						echo $row['name'];
						echo "</u></h2> <br />";
						$_SESSION['Gname'] = $row['name'];
					}
					mysql_close();
				?>
                
                <div class="optionsDiv">
                    <a class="adminsOptionA" href="addGroup.php"><h3>����� ���� ��� ������</h3></a>
                    <a class="adminsOptionA" href="editGroup.php"><h3>���/��� ���� �� ������</h3></a>
                    <a class="adminsOptionA" href="truncateGroup.php"><h3>��� ������</h3></a>
				</div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
