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
                
                <div class="back">
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>
                	<a href="createSch.php"><img src="assets/images/back.png" /></a>
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
                    <h3>أختار الماده</h3>
                    
                       <form action="createSch2.php" method="post" name="getGroup"> 
                       
                       <input type="submit" value="أختار" />
                        <select name="subject">
                            <option>- أختار ماده -</option>
                            <option value='إنجليزى'>إنجليزى</option>
                            <option value='عربى'>عربى</option>
                            <option value='دراسات'>- دراسات -</option>
                            <option value='تاريخ'>تاريخ</option>
                            <option value='جغرافيا'>جغرافيا</option>
                            <option value='علوم'>- علوم -</option>
                            <option value='كيمياء'>كيمياء</option>
                            <option value='فيزياء'>فيزياء</option>
                            <option value='أحياء'>أحياء</option>
                            <option value='رياضيات'>- رياضيات -</option>
                            <option value='جبر'>جبر</option>
                            <option value='هندسه'>هندسه</option>
                        </select>
                        
					</form>
                    
				</div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
