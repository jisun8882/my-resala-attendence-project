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
            	<img src="assets/images/banner" class="bannerImage" alt="���� ����� ���" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="nav">������</a>
        	<a href="other.php" class="nav">����� ����</a>
        	<a href="volunteer.php" class="nav">�������</a>
        	<a href="report.php" class="nav">������� �����</a>
        	<a href="strategy.php" class="nav">��� �����</a>
        	<a href="getDay.php" class="nav">������</a>
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
                	<h4>����� ���� ����</h4>
                    <h5>����� (*) ���� ������ ������ � ����</h5>
                        
					<hr />
                    <p>
                        
                        <form action="addStudentSuccess.php" method="post">
                            <table width="auto" border="0">
                                <tr>
                                    <td>(*)<input name="f_name" type="text" size="20" autocomplete="off">: ����� �����</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><input name="m_name" type="text" size="20" autocomplete="off">: ����� ������</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>(*)<input name="l_name" type="text" size="20" autocomplete="off">: ����� ������</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>(*)<input name="mobile" type="text" size="25" autocomplete="off">: �������</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>(*)<select name="gender">
                                    		<option>- ����� ����� -</option>
                                            <option value="���">���</option>
                                            <option value="���">���</option>
                                    		</select>: �����</td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><input name="submit" type="submit" value="����"></td>
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
