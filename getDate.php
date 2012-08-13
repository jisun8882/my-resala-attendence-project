<?php
require_once('assets/modules/calendar/classes/tc_calendar.php');
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

<link href="assets/modules/calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="assets/modules/calendar/calendar.js"></script>

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
        	<a href="#" class="nav">ملاحظات شهرية</a>
        	<a href="#" class="nav">خطط شهرية</a>
        	<a href="getDay.php" class="nav">الغياب</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
        		<h2>الغياب</h2>
                <?php
					$_SESSION['theDay'] = $_GET['days'];
					echo "<h2> لقد أخترت يوم <font style='color:#F00'>" . $_SESSION['theDay'] . "</font></h2>";	
				?>
                <h4>أختار التاريخ</h4>
                
                <div class="pickDate">
                	
                    <form name="form1" method="post" action="getSched.php">
                    
                        <?php
                            $myCalendar = new tc_calendar("date2");
                            $myCalendar->setIcon("assets/modules/calendar/images/iconCalendar.gif");
                            $myCalendar->setDate(date('d'), date('m'), date('Y'));
                            $myCalendar->setPath("assets/modules/calendar/");
                            $myCalendar->setYearInterval(1970, 2020);
                            $myCalendar->dateAllow('2008-05-13', '2019-12-31', false);
                            $myCalendar->startMonday(true); 
                            $myCalendar->writeScript();
							
                        ?>
                        
                        <input type="submit" name="submit" id="submit" value="عرض الحصص" >
                        <input type="button" name="button3" id="button3" value="تاكيد التاريخ" onClick="javascript:alert(this.form.date2.value);">
    
                    </form>
                   
				</div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
