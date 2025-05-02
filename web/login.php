<!DOCTYPE html>
<?php
        // إعداد بيانات الاتصال
        #$host = "db";
        #$dbuser = "root";
        #$dbpass = "root";
        #$dbname = "store";
	$host = getenv('DB_HOST');  
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
	
	if(isset($_POST["login"])){
		$L_cust_name=$_POST["cust_name"];
		$L_cust_pass=$_POST["cust_pass"];


 require 'index.php';
 
$select = "select * from customers where cust_name='$L_cust_name'";
$result = mysqli_query($con, $select);

	// التحقق من وجود الإيميل
	if(mysqli_num_rows($result)>0){   
		$row= mysqli_fetch_array($result);
		if($row["cust_pass"]==$L_cust_pass and $row["cust_name"]==('admin')){
			echo '<script>alert(" مرحبا ب المدير !! ");window.location.assign("admin_site.php");</script>';}
		
		if($row["cust_pass"]==$L_cust_pass){
			echo '<script>alert(" مرحبا !! ");window.location.assign("site_cust.php");</script>';
		}else{
			echo '<script>alert("كلمة مرور خاطئة");</script>';
		}
		}else{
			echo '<script>alert("الإسم غير مسجل لدينا، يرجى التسجيل ...");window.location.assign("register.php");</script>';
			
		}
	}
    
?>
