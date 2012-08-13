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
        	<a href="#" class="nav">������� �����</a>
        	<a href="#" class="nav">��� �����</a>
        	<a href="getDay.php" class="nav">������</a>
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
                	<h4>����� ���� ����</h4>
                    <form action="addOtherItem1.php" method="post" name="addItem">
                        <table width="600" border="1">
                        <tr>
                            <td colspan="2">
                            <input name="body" type="text" size="80" style="text-align:right" autocomplete="off" />: ������ </td>
                        </tr>
                        <tr>
                            <td><input name="date" type="text" size="15" style="text-align:right" autocomplete="off" />: �������</td>
                            <td><input name="day" type="text" size="15" style="text-align:right" autocomplete="off" />: �����</td>
                        </tr>
                        <tr>
                            <td>����: � � - � � - � �</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="�����" /></td>
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
