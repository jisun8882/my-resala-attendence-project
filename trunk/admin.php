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
				<div id="formDiv" class="formDiv">   
                    <form action="checkLogins.php" method="post" name="login" id="login">
                        <table width="auto" border="0">
                          <tr>
                            <td colspan="2"><h2>���� ����� � ���� ����</h2></td>
                          </tr>
                          <tr>
                            <td><input type="text" name="username" id="username" autocomplete="off" autofocus="autofocus"/></td>
                            <td>: �����</td>
                          </tr>
                          <tr>
                            <td><input type="password" name="password" id="password" autocomplete="off"/></td>
                            <td>: ���� ����</td>
                          </tr>
                          <tr>
                          <td align="left"><input type='submit' class='btn' id="btn" value="����" /></td>
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
