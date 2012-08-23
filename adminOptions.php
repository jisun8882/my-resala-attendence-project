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
                    
                <div class='optionsDiv'>
                    <a class='adminsOptionA' href='studentOption.php'><h3>الطلاب</h3></a>
                    <a class='adminsOptionA' href='volunteerOption.php'><h3>المتطوعين</h3></a>
                    <a class='adminsOptionA' href='groupOption.php'><h3>المجموعات</h3></a>
                    <a class='adminsOptionA' href='scheduleOption.php'><h3>الجداول</h3></a>
                    <a class='adminsOptionA' href='attendOption.php'><h3>الغياب</h3></a>
                    <a class='adminsOptionA' href='strategyOption.php'><h3>الخطط الشهرية</h3></a>
                    <a class='adminsOptionA' href='reportOption.php'><h3>الملاحظات الشهرية</h3></a>
                    <a class='adminsOptionA' href='otherOption.php'><h3>الأنشطة الاخرى</h3></a>
				</div>
             	
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
