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
        		<h2>������</h2>
				<h3>����� �����</h3>
                <form action="getDate.php" method="get" name="day">
               	  <p class="getDayP">
                	  <label>����� <input type="radio" name="days" value="�����" id="days_0"></label>
                	  <br>
                	  <label>  ����� <input type="radio" name="days" value="�����" id="days_1"></label>
                	  <br>
                      <label>������� <input type="radio" name="days" value="�������" id="days_2"></label>
                	  <br>
                	  <label>�������� <input type="radio" name="days" value="��������" id="days_3"></label>
                	  <br>
                      <label>�������� <input type="radio" name="days" value="��������" id="days_4"></label>
                	  <br>
                	  <label>������ <input type="radio" name="days" value="������" id="days_5"></label>
                	  <br>
                      <label>������ <input type="radio" name="days" value="������" id="days_6"></label>
                	  <br />
                      <P> 
                      </P>
                      
                      <input type="submit" value="�����" />
              	  </p>
                </form>
       	  <!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
