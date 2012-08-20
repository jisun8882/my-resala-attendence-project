<?php
require_once('assets/modules/calendar/classes/tc_calendar.php');
session_start();
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
            	<img src="assets/images/banner.png" class="bannerImage" alt="دروس تقويه ادي" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="nav">الدخول</a>
        	<a href="other.php" class="nav">أنشطة أخرى</a>
        	<a href="volunteer.php" class="nav">متطوعين</a>
        	<a href="report.php" class="nav">ملاحظات شهرية</a>
        	<a href="strategy.php" class="nav">خطط شهرية</a>
            <a href="schedule.php" class="nav">الجداول</a>
        	<a href="getDay.php" class="nav">الغياب</a>
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
                
                <div class="VoloptionsDiv">
                	<h4>إضافة نشاط جديد</h4>
                    <form action="addOtherItem1.php" method="post" name="addItem">
                        <table width="600" border="0">
                        <tr>
                            <td colspan="2">
                            <input name="body" type="text" size="80" style="text-align:right" autocomplete="off" />: النشاط </td>
                        </tr>
                        <tr>
                            <td align="right">
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
                            
                            </td>
                            <td><select name="day">
                                    	<option>- أختار اليوم -</option>
                                        <option value="السبت">السبت</option>
                                        <option value="الاحد">الاحد</option>
                                        <option value="الاثنين">الاثنين</option>
                                        <option value="الثلاثاء">الثلاثاء</option>
                                        <option value="الاربعاء">الاربعاء</option>
                                        <option value="الخميس">الخميس</option>
                                        <option value="الجمعة">الجمعة</option>
                                    </select>: اليوم</td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="أضافة" /></td>
                            <td>&nbsp;</td>
                        </tr>
                        </table>
					</form>
                </div>
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
