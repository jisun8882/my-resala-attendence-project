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
        		<div class="optionsDiv">
                    <h3>����� ������</h3>
                    
                       <form action="schedule1.php" method="post" name="getGroup"> 
                       
                       <input type="submit" value="�����" />
                        <select name="group">
                            <option>- ����� ������ -</option>
                            
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
								
								$getGroupQuery = mysql_query("SELECT * FROM `$database`.`group`",$conn);
								while($row = mysql_fetch_array($getGroupQuery)  ){
									
									echo "<option value='".$row['group_id']."' >";
									echo $row['name'];
									//$_SESSION['groupID'] = $row['group_id'];
									echo "</option>";
									
								};
							
							?>
                        </select>
                        
					</form>
                    
				</div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>