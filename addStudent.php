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
        	<a href="report.php" class="nav">ملاحظات شهرية</a>
        	<a href="strategy.php" class="nav">خطط شهرية</a>
        	<a href="getDay.php" class="nav">الغياب</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
            	<?php
                include 'assets/modules/unauthorized.php';
                ?>
                <div class="back">
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>  &nbsp;
                	<a href="studentOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="addStudentDataDiv">
                	<h4>إضافة طالب جديد</h4>
                    <h5>علامة (*) تعنى بيانات مطلوبة و مهمه</h5>
                        
					<hr />
                    <p>
                        
                        <form action="addStudentSuccess.php" method="post">
                            <table width="auto" border="0">
                                <tr>
                                    <td>(*)<input name="f_name" type="text" size="20" autocomplete="off">: الاسم الاول</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><input name="m_name" type="text" size="20" autocomplete="off">: الاسم الاوسط</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>(*)<input name="l_name" type="text" size="20" autocomplete="off">: الاسم الاخير</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>(*)<input name="mobile" type="text" size="25" autocomplete="off">: الموبيل</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>(*)<select name="gender">
                                    		<option>- أختار النوع -</option>
                                            <option value="بنت">بنت</option>
                                            <option value="ولد">ولد</option>
                                    		</select>: النوع</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><input name="submit" type="submit" value="أدخل"></td>
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
