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
        		<?php
                include 'assets/modules/unauthorized.php';
                ?>
                
                <div class="back">
                	<a href="adminOptions.php"><img src="assets/images/home.png" /></a>  &nbsp;
                	<a href="volunteerOption.php"><img src="assets/images/back.png" /></a>
                </div>
                
                <hr />
                
                <div class="optionsDiv">
                	<h4>����� ����� ����</h4>
                    <h5>����� (*) ���� ������ ������ � ����</h5>
                        
					<hr />
                    
                        
<form action="addVolunteerSuccess.php" method="post">
    <table width="auto" border="0">
        <tr>
            <td>(*)<input name="f_name" type="text" size="20" autocomplete="off" 
            class="input-small search-query" placeholder="... ����� �����" style="text-align:right" /></td>
        </tr>
        
        <tr>
            <td><input name="m_name" type="text" size="20" autocomplete="off"
            class="input-small search-query" placeholder="... ����� ������" style="text-align:right" /></td>
        </tr>
        <tr>    
            <td>(*)<input name="l_name" type="text" size="20" autocomplete="off"
            class="input-small search-query" placeholder="... ����� ������" style="text-align:right" /></td>
        </tr>
        <tr>
            <td>(*)<select name="subject" class="input-medium" >
            <option value="-�� ���� ����">- ����� ������ �� ������� -</option>
            <option value="�������">�������</option>
            <option value="����">����</option>
            <option value="������">- ������ -</option>
            <option value="�����">�����</option>
            <option value="�������">�������</option>
            <option value="����">- ���� -</option>
            <option value="������">������</option>
            <option value="������">������</option>
            <option value="�����">�����</option>
            <option value="�������">- ������� -</option>
            <option value="���">���</option>
            <option value="�����">�����</option>
            </select>
            </td>
         </tr>
           
         <tr>
            <td>(*)<input name="mobile" type="text" size="15" autocomplete="off"
            class="input-small search-query" placeholder="... �������" style="text-align:right" /></td>

        </tr>
        
        <tr>
            <td>&nbsp;</td>
        </tr>
        
        <tr>
            <td>�������� �������</td>
        </tr>
        <tr>
            <td>(���� 3 - 1*)<input name="date1" type="text" size="15" autocomplete="off"
            class="input-mini search-query" placeholder="... ������" style="text-align:right" /></td>
        </tr>
        <tr>
             <td>(*)
            <select name="day1" class="input-small" >
                <option>- ����� ����� -</option>
                <option value="�����">�����</option>
                <option value="�����">�����</option>
                <option value="�������">�������</option>
                <option value="��������">��������</option>
                <option value="��������">��������</option>
                <option value="������">������</option>
                <option value="������">������</option>
            </select></td>
        </tr>
        <tr>
            <td>(���� 3 - 1*)<input name="date2" type="text" size="15" autocomplete="off"
            class="input-mini search-query" placeholder="... ������" style="text-align:right" /></td>
        </tr>
        
        <tr>
            <td>(*)
            <select name="day2" class="input-small" >
                <option>- ����� ����� -</option>
                <option value="�����">�����</option>
                <option value="�����">�����</option>
                <option value="�������">�������</option>
                <option value="��������">��������</option>
                <option value="��������">��������</option>
                <option value="������">������</option>
                <option value="������">������</option>
            </select></td>
            
        </tr>
        <tr>
            
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><input name="submit" class="btn btn-primary span2" type="submit" value="����"></td>
            
        </tr>
        </table>
</form>

                </div>
                
        	<!-- InstanceEndEditable -->
        	
        </div>
        
	</div>
    
</body>
<!-- InstanceEnd --></html>
