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
                
                <?php
					echo "student: ";
					echo $studentID = $_POST['finalStudID'];
					echo "<br /> group: ";
					echo $groupID = $_POST['finalGroupID'];
					echo "<br /> schedule: ";
					echo $scheduleID = $_POST['finalScheduleID'];
					echo "<br /> stuff:";
					echo $stuffID = $_POST['finalStuffID'];
					echo "<br /> comment: ";
					echo $comment = $_POST['comment'];
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resala";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$insertComment = mysql_query("INSERT INTO `$database`.`studentComments`
					(comment_id, student_id, group_id, schedule_id, stuff_id, comment)
					VALUES
					(NULL, '$studentID', '$groupID', '$scheduleID', '$stuffID', '$comment')", $conn);
					
					if($insertComment){
						mysql_error();
						?>
                        <script>
							alert("�� ��� ��������");
							window.location = "adminOptions.php";
						</script>
                        <?php
					}
					else{
						echo mysql_error();
						?>
                        <script>
							alert("��� ���� ��� ��������");
							window.location = "adminOptions.php";
						</script>
                        <?php
					}
					
					mysql_close();
				?>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
