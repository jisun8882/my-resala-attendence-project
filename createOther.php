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
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>  &nbsp;
                	<a href="otherOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="optionsDiv">
                	<h4>أنشاء قائمة أنشطة شهرية جديدة</h4>
                    <h4>: أخطار الشهر</h4>
                    <form name="pickMonth" method="post" action="createOther1.php"
                    		class="form-search">
                            <div class="input-prepend">
                            <input type="submit" value="أنشاء" class="btn"/>
                        <select name="month" class="input-medium search-query">
                            <option>- أختار الشهر -</option>
                            <option value="يناير">يناير</option>
                            <option value="فبراير">فبراير</option>
                            <option value="مارس">مارس</option>
                            <option value="أبريل">أبريل</option>
                            <option value="مايو">مايو</option>
                            <option value="يونيو">يونيو</option>
                            <option value="يوليو">يوليو</option>
                            <option value="أغسطس">أغسطس</option>
                            <option value="سبتمبر">سبتمبر</option>
                            <option value="أكتوبر">أكتوبر</option>
                            <option value="نوفمبر">نوفمبر</option>
                            <option value="ديسمبر">ديسمبر</option>
                        </select>
                        </div>
					</form>
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
