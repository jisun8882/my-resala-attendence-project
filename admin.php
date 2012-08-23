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

<script src="assets/javascript/jquery.js"></script>

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
				<div id="formDiv" class="formDiv">   
                    <form action="checkLogins.php" method="post" name="login" class="form-search">
                        <table width="auto" border="0">
                          <tr>
                            <td colspan="2"><h2>أدخل الأسم و كلمة المرور</h2></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="username" class="input-small search-query" placeholder="...الاسم" autocomplete="off" autofocus="autofocus" style="text-align:right"/></td>
                            <td>: الاسم</td>
                          </tr>
                          <tr><td colspan='2'>&nbsp;</td></tr>
                          <tr>
                            <td><input type="password" name="password" class="input-small search-query" placeholder="...كلمه المرور" autocomplete="off" style="text-align:right"/></td>
                            <td>: كلمه المرور</td>
                          </tr>
                          <tr><td colspan='2'>&nbsp;</td></tr>
                          <tr>
                          <td align="right"><input type='submit' class='btn span2 btn-primary' value="دخول" /></td>
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
