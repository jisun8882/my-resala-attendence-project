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
                	<a href="otherOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                <?php
					$strategyID = $_SESSION['strategyId'];
					$tableName = $_SESSION['tableName'];
					
					$body = mysql_real_escape_string( $_POST['body'] );
					$date = mysql_real_escape_string( $_POST['date'] );
					$day = mysql_real_escape_string( $_POST['day'] );
					$status = mysql_real_escape_string( $_POST['status'] );
					
					$server = "localhost";
					$username = "root";
					$password = "";
					$database = "resalastrategy";
					
					$conn = mysql_connect($server, $username, $password);
					if (!$conn) {die('Could not connect due to: ' . mysql_error());}
					
					mysql_query("SET NAMES cp1256");
					mysql_query("set characer set cp1256");
					
					mysql_select_db($database, $conn);
					
					$editQuery = mysql_query("UPDATE `$database`.`$tableName` 
					SET  status = '".$status."', 
					date = '".$date."', 
					day = '".$day."', 
					body = '".$body."' 
					WHERE strategy_id = '$strategyID' ",$conn);
					
					if($editQuery){
						
						?>
						<script>
							alert("�� ����� ������ �����");
							location.href = "strategyOption.php";
						</script>
						<?php
					}
					else{
						?>
						<script>
							alert("��� ��� ������ ��� �������");
							location.href = "strategyOption.php";
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
