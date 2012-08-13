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
        	<a href="#" class="nav">أنشطة أخرى</a>
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
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>  &nbsp;
                	<a href="volunteerOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="VoloptionsDiv">
                	<h4>إضافة متطوع جديد</h4>
                    <h5>علامة (*) تعنى بيانات مطلوبة و مهمه</h5>
                        
					<hr />
                    <p>
                        
                        <form action="addVolunteerSuccess.php" method="post">
                            <table width="750px" border="0">
                                <tr>
                                	<td> </td>
                                    <td>(*)<input name="l_name" type="text" size="20" autocomplete="off">: الاسم الاخير</td>
                                    <td><input name="m_name" type="text" size="20" autocomplete="off">: الاسم الاوسط</td>
                                    <td></td>
                                    <td>(*)<input name="f_name" type="text" size="20" autocomplete="off">: الاسم الاول</td>
                                    
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                	<td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>(*)<input name="subject" type="text" size="15" autocomplete="off">: المادة</td>
                                    <td>&nbsp;</td>
                                    <td>(*)<input name="mobile" type="text" size="15" autocomplete="off">: الموبيل</td>
                                    
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>المواعيد المتاحة</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>مثال 3 - 1</td>
                                    <td>(*)<input name="date1" type="text" size="15" autocomplete="off">: الساعة</td>
                                    <td>&nbsp;</td>
                                     <td>(*)
                                    <select name="day1">
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
                                	<td>&nbsp;</td>
                                    <td>مثال 3 - 1</td>
                                    <td>(*)<input name="date2" type="text" size="15" autocomplete="off">: الساعة</td>
                                    <td>&nbsp;</td>
                                    <td>(*)
                                    <select name="day2">
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
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                	<td><input name="submit" type="submit" value="أدخل"></td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                </table>
                        </form>
					</p>
                   
                </div>
                
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
