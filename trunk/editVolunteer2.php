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
        	<a href="#" class="nav">������� �����</a>
        	<a href="#" class="nav">��� �����</a>
        	<a href="getDay.php" class="nav">������</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
        		<?php
                include 'assets/modules/unauthorized.php';
                ?>
                
                <div class="back">
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>  &nbsp;
                	<a href="studentOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDiv">
                <h4>����� ������</h4>
                <hr />
				
				<?php
					$stuffID = $_POST['stuffID'];
					$_SESSION['currentStuffID'] = $stuffID;
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getStudQuery = mysql_query("SELECT * FROM stuff WHERE stuff_id = '$stuffID' ",$conn);
					
					echo "<form name='stuffData' action='editVolunteer3.php' method='POST'>";
					echo "<table width='700px' border='0'>";
					
					while($row = mysql_fetch_array($getStudQuery)  ){
			
					echo "<tr>";
					echo "<td> </td>";
					echo "<td><input name='l_name' type='text' size='20' style='text-align:right' autocomplete='off' value='".$row['l_name']."' />";
					echo ": ����� ������</td>";
					
					echo "<td><input name='m_name' type='text' size='20' style='text-align:right' autocomplete='off' value='".$row['m_name']."' />";
					echo ": ����� ������</td>";
					echo "<td> </td>";
					echo "<td><input name='f_name' type='text' size='20' style='text-align:right' autocomplete='off' value='".$row['f_name']."' />";
					echo ": ����� �����</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td><input name='subject' type='text' size='20' style='text-align:right' autocomplete='off' value='".$row['subject']."' />";
					echo ": ������</td>";
					echo "<td>&nbsp;</td>";
					echo "<td><input name='mobile' type='text' size='20' style='text-align:right' autocomplete='off' value='".$row['mobile']."' />";
					echo ": �������</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>�������� �������</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>���� 3 - 1</td>";
					echo "<td><input name='date1' type='text' size='15' style='text-align:right' autocomplete='off' value='".$row['date1']."' />";
					echo ": ������</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>";
					
					echo "<select name='day1'>";
					echo "<option value='".$row['day1']."'>";
					echo $row['day1'];
					echo "</option>";
					echo "<option value='�����'>";
					echo "�����";
					echo "</option>";
					echo "<option value='�����'>";
					echo "�����";
					echo "</option>";
					echo "<option value='�������'>";
					echo "�������";
					echo "</option>";
					echo "<option value='��������'>";
					echo "��������";
					echo "</option>";
					echo "<option value='��������'>";
					echo "��������";
					echo "</option>";
					echo "<option value='������'>";
					echo "������";
					echo "</option>";
					echo "<option value='������'>";
					echo "������";
					echo "</option>";
					echo "�����";
					echo "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>���� 3 - 1</td>";
					echo "<td><input name='date2' type='text' size='15' style='text-align:right' autocomplete='off' value='".$row['date2']."' />";
					echo ": ������</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>";
					
					echo "<select name='day2'>";
					echo "<option value='".$row['day2']."'>";
					echo $row['day2'];
					echo "</option>";
					echo "<option value='�����'>";
					echo "�����";
					echo "</option>";
					echo "<option value='�����'>";
					echo "�����";
					echo "</option>";
					echo "<option value='�������'>";
					echo "�������";
					echo "</option>";
					echo "<option value='��������'>";
					echo "��������";
					echo "</option>";
					echo "<option value='��������'>";
					echo "��������";
					echo "</option>";
					echo "<option value='������'>";
					echo "������";
					echo "</option>";
					echo "<option value='������'>";
					echo "������";
					echo "</option>";
					echo "�����";
					echo "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>";
					echo "<input name='submit' type='submit' value='���' />";
					echo "</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "</tr>";
					
							
					}
					echo "</table";
					echo "</form>";
					mysql_close($conn);
				?>

                </div>
                
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
