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
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>  &nbsp;
                	<a href="volunteerOption.php"><img src="assets/images/back.png" /></a>
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
					
					echo "<form name='stuffData' action='editVolunteer3.php' method='POST' class='form-search'>";
					echo "<table width='700px' border='0'>";
					
					while($row = mysql_fetch_array($getStudQuery)  ){
			
					echo "<tr>";
					echo "<td> </td>";
					echo "<td><input name='l_name' class='input-small search-query' 
							type='text' size='20' style='text-align:right' autocomplete='off' value='".$row['l_name']."' />";
					echo ": ����� ������</td>";
					
					echo "<td><input name='m_name' class='input-small search-query'
							type='text' size='20' style='text-align:right' autocomplete='off' value='".$row['m_name']."' />";
					echo ": ����� ������</td>";
					echo "<td> </td>";
					echo "<td><input name='f_name' class='input-small search-query'
							type='text' size='20' style='text-align:right' autocomplete='off' value='".$row['f_name']."' />";
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
					echo "<td><select name='subject' class='input-small search-query'>
									<option value='".$row['subject']."'>".$row['subject']."</option>
                                    <option value='-�� ���� ����'>- ����� ������ �� ������� -</option>
                                    <option value='�������'>�������</option>
                                    <option value='����'>����</option>
                                    <option value='������'>- ������ -</option>
                                    <option value='�����'>�����</option>
                                    <option value='�������'>�������</option>
                                    <option value='����'>- ���� -</option>
                                    <option value='������'>������</option>
                                    <option value='������'>������</option>
                                    <option value='�����'>�����</option>
                                    <option value='�������'>- ������� -</option>
                                    <option value='���'>���</option>
                                    <option value='�����'>�����</option>
                                    </select>: ������</td>";
					echo "<td>&nbsp;</td>";
					echo "<td><input name='mobile' class='input-small search-query'
							type='text' size='20' style='text-align:right' autocomplete='off' value='".$row['mobile']."' />";
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
					echo "<td><input name='date1' class='input-small search-query'
						type='text' size='15' style='text-align:right' autocomplete='off' value='".$row['date1']."' />";
					echo ": ������</td>";
					echo "<td><select name='slot1' class='input-small search-query'>";
					echo "<option value='".$row['slot1']."'>".$row['slot1']."</option>";
					echo "<option>--------</option>";
					echo "<option value='���'>���</option>";
					echo "<option value='��'>��</option>";
					echo "</select>";
					echo "����";
					echo "</td>";
					echo "<td>";
					
					echo "<select name='day1' class='input-small search-query'>";
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
					echo "<td><input name='date2' type='text' size='15' class='input-small search-query'
						style='text-align:right' autocomplete='off' value='".$row['date2']."' />";
					echo ": ������</td>";
					echo "<td><select name='slot2' class='input-small search-query'>";
					echo "<option value='".$row['slot2']."'>".$row['slot2']."</option>";
					echo "<option>--------</option>";
					echo "<option value='���'>���</option>";
					echo "<option value='��'>��</option>";
					echo "</select>";
					echo "����";
					echo "</td>";
					echo "<td>";
					
					echo "<select name='day2' class='input-small search-query'>";
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
					echo "<input name='submit' class='btn btn-primary' type='submit' value='���' />";
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
