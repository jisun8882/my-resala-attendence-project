<?php
require_once('assets/modules/calendar/classes/tc_calendar.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>My Calender</title>


<link href="assets/modules/calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="assets/modules/calendar/calendar.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

            <form name="form1" method="post" action="">
             
     <?php
					  $myCalendar = new tc_calendar("date2");
					  $myCalendar->setIcon("assets/modules/calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));
					  $myCalendar->setPath("assets/modules/calendar/");
					  $myCalendar->setYearInterval(1970, 2020);
					  $myCalendar->dateAllow('2008-05-13', '2019-12-31', false);
					  $myCalendar->startMonday(true);
					  //$myCalendar->autoSubmit(true, "", "test.php");
					  //$myCalendar->autoSubmit(true, "form1");
					  //$myCalendar->disabledDay("Sat");
					  //$myCalendar->disabledDay("sun");
					  $myCalendar->showWeeks(true);  
					  $myCalendar->writeScript();
					  ?>
    <input type="button" name="button3" id="button3" value="Check the value" onClick="javascript:alert(this.form.date2.value);">


              </form>
</body>
</html>
