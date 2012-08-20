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
            	<img src="assets/images/banner.png" class="bannerImage" alt="���� ����� ���" />
            </a>
        </div>
        
        <div class="navDiv">
        	<a href="admin.php" class="nav">������</a>
        	<a href="other.php" class="nav">����� ����</a>
        	<a href="volunteer.php" class="nav">�������</a>
        	<a href="report.php" class="nav">������� �����</a>
        	<a href="strategy.php" class="nav">��� �����</a>
            <a href="schedule.php" class="nav">�������</a>
        	<a href="getDay.php" class="nav">������</a>
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
                	<h4>����� ����� ����</h4>
                    <h5>����� (*) ���� ������ ������ � ����</h5>
                        
					<hr />
                    <p>
                        
                        <form action="addVolunteerSuccess.php" method="post">
                            <table width="750px" border="0">
                                <tr>
                                	<td> </td>
                                    <td>(*)<input name="l_name" type="text" size="20" autocomplete="off">: ����� ������</td>
                                    <td><input name="m_name" type="text" size="20" autocomplete="off">: ����� ������</td>
                                    <td></td>
                                    <td>(*)<input name="f_name" type="text" size="20" autocomplete="off">: ����� �����</td>
                                    
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
                                    <td>(*)<select name="subject">
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
                                    </select>: ������
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>(*)<input name="mobile" type="text" size="15" autocomplete="off">: �������</td>
                                    
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
                                    <td>�������� �������</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>���� 3 - 1</td>
                                    <td>(*)<input name="date1" type="text" size="15" autocomplete="off">: ������</td>
                                    <td>&nbsp;</td>
                                     <td>(*)
                                    <select name="day1">
                                    	<option>- ����� ����� -</option>
                                        <option value="�����">�����</option>
                                        <option value="�����">�����</option>
                                        <option value="�������">�������</option>
                                        <option value="��������">��������</option>
                                        <option value="��������">��������</option>
                                        <option value="������">������</option>
                                        <option value="������">������</option>
                                    </select>: �����</td>
                                </tr>
                                <tr>
                                	<td>&nbsp;</td>
                                    <td>���� 3 - 1</td>
                                    <td>(*)<input name="date2" type="text" size="15" autocomplete="off">: ������</td>
                                    <td>&nbsp;</td>
                                    <td>(*)
                                    <select name="day2">
                                    	<option>- ����� ����� -</option>
                                        <option value="�����">�����</option>
                                        <option value="�����">�����</option>
                                        <option value="�������">�������</option>
                                        <option value="��������">��������</option>
                                        <option value="��������">��������</option>
                                        <option value="������">������</option>
                                        <option value="������">������</option>
                                    </select>: �����</td>
                                    
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                	<td><input name="submit" type="submit" value="����"></td>
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
