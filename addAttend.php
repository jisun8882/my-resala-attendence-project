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
<title>���� ����� ����� �����</title>
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
					
					$scheduleID = $_SESSION['currentSchedule'];
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$getClass = mysql_query("SELECT student_id,currentClass FROM attend
							WHERE schedule_id = '$scheduleID' ", $conn);
						while($rrow = mysql_fetch_array($getClass) ){
							$rrow['currentClass']+=1;
							mysql_query("UPDATE attend
								SET currentClass = '".$rrow['currentClass']."'
								WHERE schedule_id = '$scheduleID' ", $conn);	
						}
					
					if (isset($_POST['sizes']))
					{
						$sizesArray = $_POST['sizes'];
							foreach ($sizesArray as $key => $value)
							{	
						$getPercentClass = mysql_query("SELECT percentage FROM attend
							WHERE student_id = '$value' AND schedule_id = '$scheduleID' ", $conn);
						while($rr = mysql_fetch_array($getPercentClass) ){
							$rr['percentage'] += 1;
						$addAttendance = mysql_query("UPDATE `$database`.`attend` 
							SET percentage = '".$rr['percentage']."'
							WHERE student_id = '$value'
							AND schedule_id = '$scheduleID' ",$conn);
							}
					}
					
					
					if($addAttendance){
						?>
                        <script>
							alert("�� ����� ������ �����");
							window.location = "getDay.php";
						</script>
                        <?php
					}
					
					else{
						
						?>
                        <script>
							alert("����� ��� ���� ��� �������� ������");
							window.location = "getDay.php";
						</script>
                        <?php
					}
					
					}
					else{
						
						?>
                        <script>
							alert("�� ���� ����� � �� ���� ���");
							window.location = "getDay.php";
						</script>
                        <?php
					}
					
					mysql_error();
					mysql_close();
				?>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
