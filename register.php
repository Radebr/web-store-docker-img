<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
	</head>
									
	<body>
		<h1 align="center"><label><font size="+4" color="red"><img src="twinkles.gif" width="75" height="75"> My Online Store <img src="twinkles.gif" width="75" height="75"></font><label></h1>
	
		<table border="3" style="width:75%" align="center" background="1.png">
			<tr style="width:75%" background="1.png">
				<th background="1.png"><p align="center"><a href="call_us.php"><strong><font size="+2" color="blue">اتصل بنا</font></strong></a></p></th>
				<th background="1.png"><p align="center"><a href="products.php"><strong><font size="+2" color="blue">المنتجات</font></strong></a></p></th>
				<th background="1.png"><p align="center"><a href="index.php"><strong><font size="+2" color="blue">الرئيسية</font></strong></a></p></th>
			</tr>
		</table>	
		<br>
		<fieldset align="center">
		<legend><p align="center"><label><font size="+2"><strong>: تسجيل حساب جديد</strong></font></label></p></legend>
		<form action="customer_reg.php" method="post">
		
			<input type="text" name="cust_name" required><label> : إسم المستخدم</label>
			<br>
			<br>
			<input type="password" name="cust_pass" required><label> : كلمة المرور</label>
			<br>
			<br>
			<input type="email" name="cust_email" required><label> : Email</label>
			<br>
			<br>
			<input type="date" name="cust_bdate" required><label> : تاريخ الميلاد<label>
			<br>
			<br>
			<input type="submit" name="register"  value="تسجيل">
			
            <input type="reset" value="مسح">    			
		</form>
		</fieldset>
		
		
		<br>
		<p align="left"><label><strong> Ramdane Bouroga © 2023 جميع الحقوق محفوظة لـ</strong></label></p>
	</body>
</html>