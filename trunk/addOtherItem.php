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
        	<a href="#" class="nav">ملاحظات شهرية</a>
        	<a href="#" class="nav">خطط شهرية</a>
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
                        <table width="600" border="1">
                        <tr>
                            <td colspan="2">
                            <input name="body" type="text" size="80" style="text-align:right" autocomplete="off" />: النشاط </td>
                        </tr>
                        <tr>
                            <td><input name="date" type="text" size="15" style="text-align:right" autocomplete="off" />: التاريخ</td>
                            <td><input name="day" type="text" size="15" style="text-align:right" autocomplete="off" />: اليوم</td>
                        </tr>
                        <tr>
                            <td>مثال: س س - ش ش - ي ي</td>
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
