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
                
                <?php
					$groupID = $_SESSION['groupID'];
					$groupName = $_SESSION['Gname'];
					$_SESSION['subjectName'];
					$date = $_POST['dateID'];
					$day = $_POST['dayID'];
					$stuffID = $_POST['stuffID'];
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					switch ($day)
						{
						case "�����":
						  $dayOrder = "1";
						  break;
						case "�����":
						  $dayOrder = "2";
						  break;
						case "�������":
						  $dayOrder = "3";
						  break;
						case "��������":
						  $dayOrder = "4";
						  break;
						case "��������":
						  $dayOrder = "5";
						  break;
						case "������":
						  $dayOrder = "6";
						  break;
						case "������":
						  $dayOrder = "7";
						  break;
						default:
						  echo "error";
						}
						
					$insertQuery = mysql_query("INSERT INTO `$database`.`schedule`
					(schedule_id, stuff_id, group_id, day,dayOrder, date)
					VALUES
					(NULL, '$stuffID', '$groupID', '$day','$dayOrder' , '$date')",$conn);
					
					if($insertQuery){
						?>
						<script>
							
							alert("�� ����� ������ ����� <?php echo $groupName ?>");
							location.href = "adminOptions.php";
						</script>
						<?php
					}
					else{
						echo mysql_error();
						?>
						<script>
							alert("��� ��� ������ ��� �������");
							location.href = "adminOptions.php";
						</script>
						<?php
						
					}
					
					$getFuck = mysql_query("SELECT * FROM stuff
										WHERE stuff_id = '$stuffID'",$conn);
					
					while($row=mysql_fetch_array($getFuck) ){
							$currentDay2 = $row['day2'];
							$currentDay1 = $row['day1'];
							$currentDate2 = $row['date2'];
							$currentDate1 = $row['date1'];
					}
					
					$x = strcmp($currentDay2 ,$day);
					$y = strcmp($currentDate2 ,$date);
					if($x == '-5' and $y == '-5' ){
						$updateStuffSlot2 = mysql_query("UPDATE `$database`.stuff
							SET slot2 = '���'
							WHERE stuff_id = '$stuffID' ", $conn);
							if(!$updateStuffSlot2){echo mysql_error();}
					}
					else{
							$updateStuffSlot1 = mysql_query("UPDATE `$database`.stuff
							SET slot1 = '���'
							WHERE stuff_id = '$stuffID' ", $conn);
							if(!$updateStuffSlot1){echo mysql_error();}
						}
						
						echo mysql_error();
					
				?>
                
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>