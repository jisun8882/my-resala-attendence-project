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
<link href="assets/stylesheet/bootstrap.css" rel="stylesheet">

<script language="javascript" src="assets/javascript/jquery.js" ></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

  <div class="mainWrapper">
		
        <div class="bannerDiv">
        	<a href="index.php">
            	<img src="assets/images/banner.png" class="bannerImage" alt="���� ����� ���" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="navButton">������</a>
        	<a href="other.php" class="navButton">����� ����</a>
        	<a href="volunteer.php" class="navButton">�������</a>
        	<a href="report.php" class="navButton">������� �����</a>
        	<a href="strategy.php" class="navButton">��� �����</a>
            <a href="schedule.php" class="navButton">�������</a>
        	<a href="getDay.php" class="navButton">������</a>
        </div>
        
        <div class="contentDiv">
        	
            <!-- InstanceBeginEditable name="contentRegion" -->
        		<h2>������</h2>
				<h3>����� �����</h3>
                <form action="getSched.php" method="post" name="day">
               	  
                	  <label>����� <input type="radio" name="days" value="�����" id="days_0"></label>
                	  <label>  ����� <input type="radio" name="days" value="�����" id="days_1"></label>
                      <label>������� <input type="radio" name="days" value="�������" id="days_2"></label>
                	  <label>�������� <input type="radio" name="days" value="��������" id="days_3"></label>
                      <label>�������� <input type="radio" name="days" value="��������" id="days_4"></label>
                	  <label>������ <input type="radio" name="days" value="������" id="days_5"></label>
                      <label>������ <input type="radio" name="days" value="������" id="days_6"></label>
                      <input type="submit" class='btn btn-inverse' value="�����" />
              	  
                </form>
       	  <!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
