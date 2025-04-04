<!DOCTYPE html>
<?php
        // إعداد بيانات الاتصال
        $host = "db";
        $dbuser = "root";
        $dbpass = "root";
        $dbname = "store";

        // إنشاء الاتصال
        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);

        // التحقق من نجاح الاتصال
        if (!$con) {
            die("<p style='color:red; text-align:center;'>خطأ في الاتصال بقاعدة البيانات: " . mysqli_connect_error() . "</p>");
        }

        mysqli_set_charset($con, "utf8");

		if (isset($_POST["register"])) {
			$cust_name = $_POST["cust_name"];
			$cust_pass = $_POST["cust_pass"];
			$cust_email = $_POST["cust_email"];
			$cust_bdate = $_POST["cust_bdate"];
			//$cust_bdate = (int)date('Y', strtotime($_POST["cust_bdate"])); // تحويل التاريخ إلى سنة فقط
		
			require 'register.php';
		
			// التحقق من وجود الإيميل
			$select = "SELECT * FROM customers WHERE cust_email='$cust_email'";
			$result = mysqli_query($con, $select);
		
			if (mysqli_num_rows($result) > 0) {
				echo '<script>alert("الإيميل موجود يرجى تسجيل الدخول.");window.location.assign("index.php");</script>';
			} else {
				// إضافة العميل الجديد
				$insert = "INSERT INTO customers (`cust_name`, `cust_pass`, `cust_email`, `cust_bdate`) 
						   VALUES ('$cust_name', '$cust_pass', '$cust_email', '$cust_bdate')";
				
				$query2 = mysqli_query($con, $insert);
		
				if ($query2) {
					echo '<script>alert("تم تسجيلك بنجاح !.");window.location.assign("index.php");</script>';
				} else {
					echo '<script>alert("حدث خطأ أثناء التسجيل.");</script>';
				}
			}
		}