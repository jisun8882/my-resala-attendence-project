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
            	<img src="assets/images/banner.png" class="bannerImage" alt="دروس تقويه ادي" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="navButton">الدخول</a>
        	<a href="other.php" class="navButton">أنشطة أخرى</a>
        	<a href="volunteer.php" class="navButton">متطوعين</a>
        	<a href="report.php" class="navButton">ملاحظات شهرية</a>
        	<a href="strategy.php" class="navButton">خطط شهرية</a>
            <a href="schedule.php" class="navButton">الجداول</a>
        	<a href="getDay.php" class="navButton">الغياب</a>
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
                
                <div class="optionsDiv">
                    <h3>أختار مجموعة</h3>
                    
                       <form action="createSch1.php" method="post" name="getGroup" class="form-search"> 
                       
                       <div class="input-prepend">
                       
                       <input type="submit" value="أختار" class="btn" />
                        <select name="group" class="input-medium search-query">
                            <option>- أختار مجموعة -</option>
                            
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
									$_SESSION['groupID'] = $row['group_id'];
									echo "</option>";
									
								};
							
							?>
                        </select>
                        </div>
					</form>
                    
				</div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
