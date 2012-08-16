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
            	<img src="assets/images/banner" class="bannerImage" alt="دروس تقويه ادي" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="nav">الدخول</a>
        	<a href="other.php" class="nav">أنشطة أخرى</a>
        	<a href="volunteer.php" class="nav">متطوعين</a>
        	<a href="report.php" class="nav">ملاحظات شهرية</a>
        	<a href="strategy.php" class="nav">خطط شهرية</a>
        	<a href="getDay.php" class="nav">الغياب</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
        		<?php
                include 'assets/modules/unauthorized.php';				
                ?>
                
                <?php
					if (isset($_POST['sizes'])) {
						$sizesArray = $_POST['sizes'];
						
						$server = "localhost";
						$username = "root";
						$password = "";
						$database = "resala";
						$tableName = "groupStudent";
						
						echo $groupID = $_SESSION['groupID'];
						echo "<br />";
						echo $_SESSION['Gname'];
						echo "<br />";
						
						$conn = mysql_connect($server, $username, $password);
						if (!$conn) {die('Could not connect due to: ' . mysql_error());}
						
						mysql_query("SET NAMES cp1256");
						mysql_query("set characer set cp1256");
						
						mysql_select_db($database, $conn);
						
						foreach ($sizesArray as $key => $value)
						{
							$deleteQuery = mysql_query("DELETE FROM `$database`.`$tableName` 
							WHERE group_id = $groupID AND student_id = $value",$conn);
						}
						
						if($deleteQuery){
							echo mysql_error();
							?>
							<script>
								alert("تم حذف الطلاب الى مجموعة <?php echo $_SESSION['Gname'] ?> بنجاح");
								location.href = "groupOption.php";
							</script>
							<?php
						}
						else{
							
							?>
							<script>
								alert("حصل خطأ الرجاء أعد العملية");
								location.href = "groupOption.php";
							</script>
							<?php
						
						}
						
						mysql_close();
					}
				
				?>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
