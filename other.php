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
        		<h3>����� ������� ���� �����</h3>
                <?php
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resalaother";
			
					$currentMonth = date('M');
					$currentYear = date('Y');
					$TableName = date('M');
					
					switch ($currentMonth)
					{
						case "Jan":
							$TableName = "�����";
							echo "�����"." ".$currentYear;
							break;
						case "Feb":
							$TableName = "������";
							echo "������"." ".$currentYear;
							break;
						case "Mar":
							$TableName = "����";
							echo "����"." ".$currentYear;
							break;
						case "Apr":
							$TableName = "�����";
							echo "�����"." ".$currentYear;
							break;
						case "May":
							$TableName = "����";
							echo "����"." ".$currentYear;
							break;
						case "Jun":
							$TableName = "�����";
							echo "�����"." ".$currentYear;
							break;
						case "Jul":
							$TableName = "�����";
							echo "�����"." ".$currentYear;
							break;
						case "Aug":
							$TableName = "�����";
							echo "�����"." ".$currentYear;
							break;
						case "Sep":
							$TableName = "������";
							echo "������"." ".$currentYear;
							break;
						case "Oct":
							$TableName = "������";
							echo "������"." ".$currentYear;
							break;
						case "Nov":
							$TableName = "������";
							echo "������"." ".$currentYear;
							break;
						case "Dec":
							$TableName = "������";
							echo "������"." ".$currentYear;
							break;
						default:
							echo "error";
					}
					
					$TableName = $TableName.$currentYear;
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getVolquery = mysql_query("SELECT * FROM `$database`.`$TableName`",$conn);
					if(!$getVolquery){echo mysql_error();}
					echo "<table border='1' class='volunteerTable'>";
					echo "<tr>";
					echo "<th>�������</th> <th>�����</th> <th>������</th>";
					echo "</tr>";
					
					while($row = mysql_fetch_array($getVolquery)  ){
						
						echo "<tr>";
						
						echo "<td>";
						echo $row['date'];
						echo "</td>";
						
						echo "<td>";
						echo $row['day'];
						echo "</td>";
						
						echo "<td>";
						echo $row['body'];
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
