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
        		<h2>الغياب</h2>
				<h3>أختار اليوم</h3>
                <form action="getSched.php" method="post" name="day">
               	  
                	  <label>السبت <input type="radio" name="days" value="السبت" id="days_0"></label>
                	  <label>  الاحد <input type="radio" name="days" value="الاحد" id="days_1"></label>
                      <label>الاثنين <input type="radio" name="days" value="الاثنين" id="days_2"></label>
                	  <label>الثلاثاء <input type="radio" name="days" value="الثلاثاء" id="days_3"></label>
                      <label>الاربعاء <input type="radio" name="days" value="الاربعاء" id="days_4"></label>
                	  <label>الخميس <input type="radio" name="days" value="الخميس" id="days_5"></label>
                      <label>الجمعة <input type="radio" name="days" value="الجمعة" id="days_6"></label>
                      <input type="submit" class='btn btn-inverse' value="أختار" />
              	  
                </form>
       	  <!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
