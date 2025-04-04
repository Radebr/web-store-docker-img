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
        
if (isset($_POST["register_stock"])) {
    $stock_codeb = $_POST["stock_codeb"];
    $stock_pri = $_POST["stock_pri"];
    $stock_name = $_POST["stock_name"];
    $quant_stock = $_POST["quant_stock"];
    $stock_type = $_POST["stock_type"];
    $stock_img = $_POST["stock_img"];
    $stock_pro = $_POST["stock_pro"];
    $stock_exp = $_POST["stock_exp"];

    require 'stock.php';

    // التحقق من وجود المنتج
    $result = mysqli_query($con, "SELECT * FROM stockes WHERE codb_stock='$stock_codeb'");

    if (mysqli_num_rows($result) > 0) {
        echo '<script>alert("المنتج موجود في المخزن هل تريد التعديل عليه ؟");window.location.assign("stock.php");</script>';
    } else {
        // إضافة المنتج الجديد
        $insert = "INSERT INTO stockes (`codb_stock`, `pri_stock`, `nom_stock`, `img_stock`, `type_stock`, `pro_stock`, `exp_stock`, `quant_stock`) 
                   VALUES ('$stock_codeb', '$stock_pri', '$stock_name', '$stock_img', '$stock_type', '$stock_pro', '$stock_exp', '$quant_stock')";
        
        $query2 = mysqli_query($con, $insert);

        if ($query2) {
            echo '<script>alert("تم تسجيل المنتج بنجاح !.");</script>';
        } else {
            echo '<script>alert("حدث خطأ أثناء تسجيل المنتج.");</script>';
        }
    }
}
?>