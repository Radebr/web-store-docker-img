<!DOCTYPE html>
<html>
	<head>
		<title>Products</title>
	</head>
	
	<body style="background-color: NavajoWhite">
		<h1 align="center"><label><font size="+4" color="red"><img src="twinkles.gif" width="75" height="75"> My Online Store <img src="twinkles.gif" width="75" height="75"></font><label></h1>
		<table border="3" style="width:75%" align="center" background="1.png">
			<tr style="width:75%" background="1.png">
				<th background="1.png"><p align="center"><a href="index.php"><strong><font size="+2" color="red">تسجيل الخروج</font></strong></a></p></th>
				<th background="1.png"><p align="center"><a href="call_us_cust.php"><strong><font size="+2" color="blue">اتصل بنا</font></strong></a></p></th>
				<th background="1.png"><p align="center"><a href="products_cust.php"><strong><font size="+2" color="blue">المنتجات</font></strong></a></p></th>
				<th background="1.png"><p align="center"><a href="site_cust.php"><strong><font size="+2" color="blue">الرئيسية</font></strong></a></p></th>
			</tr>
		</table>
		
		<br>
		
		<fieldset align="center">
		<legend><p align="center"><label><font size="+2"><strong>: منتجاتنا المتوفرة حاليا</strong></font></label></p></legend>
		
		
		
		<?php
        // إعداد بيانات الاتصال
        //$host = "db";
        //$dbuser = "root";
        //$dbpass = "root";
        //$dbname = "store";
	
    	$host = getenv('DB_HOST');  //render deploy
    	$dbuser = getenv('DB_USER');
    	$dbpass = getenv('DB_PASSWORD');
    	$dbname = getenv('DB_NAME');

        // إنشاء الاتصال
        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);

        // التحقق من نجاح الاتصال
        if (!$con) {
            die("<p style='color:red; text-align:center;'>خطأ في الاتصال بقاعدة البيانات: " . mysqli_connect_error() . "</p>");
        }

        mysqli_set_charset($con, "utf8");

		$result= mysqli_query($con,"select * from stockes");
		?>
			
		<table border="2" align="center">
				<tr>
					<th>شراء</th>
					<th>السعر</th>
					<th>المنتج</th>
					<th>الكود</th>
				</tr>
		<?php
			while($row = mysqli_fetch_array($result)){
		?>
			<tr>
				<td><button><strong>إضافة</strong></button></td>
				<td><?php	echo $row['pri_stock']	?></td>
				<td><?php	echo $row['nom_stock']	?></td>
				<td><?php	echo $row['codb_stock']	?></td>
			</tr>
		<?php			
			}
		?>
		</table>
		<br>
		</fieldset>
		<br>
		<p align="left"><label><strong> Ramdane Bouroga © 2023 جميع الحقوق محفوظة لـ</strong></label></p>
	</body>	
</html>
