<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>

<body>
    <h1 align="center">
        <label>
            <font size="+4" color="red">
                <img src="twinkles.gif" width="75" height="75"> My Online Store 
                <img src="twinkles.gif" width="75" height="75">
            </font>
        </label>
    </h1>
    <table border="3" style="width:75%" align="center" background="1.png">
        <tr style="width:75%" background="1.png">
            <th background="1.png">
                <p align="center"><a href="call_us.php"><strong><font size="+2" color="blue">اتصل بنا</font></strong></a></p>
            </th>
            <th background="1.png">
                <p align="center"><a href="products.php"><strong><font size="+2" color="blue">المنتجات</font></strong></a></p>
            </th>
            <th background="1.png">
                <p align="center"><a href="index.php"><strong><font size="+2" color="blue">الرئيسية</font></strong></a></p>
            </th>
        </tr>
    </table>

    <br>

    <fieldset align="center">
        <legend>
            <p align="center">
                <label><font size="+2"><strong>: منتجاتنا المتوفرة حاليا</strong></font></label>
            </p>
        </legend>

        <?php
        // إعداد بيانات الاتصال
        $host = "db"; // هذا هو اسم الخدمة التي حددتها في docker-compose.yml
        $dbuser = "root";
        $dbpass = "root"; // تأكد من مطابقة كلمة المرور في docker-compose.yml
        $dbname = "store";

        // إنشاء الاتصال
        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);

        // التحقق من نجاح الاتصال
        if (!$con) {
            die("<p style='color:red; text-align:center;'>خطأ في الاتصال بقاعدة البيانات: " . mysqli_connect_error() . "</p>");
        }

        mysqli_set_charset($con, "utf8");
        
        // تنفيذ استعلام جلب المنتجات
        $result = mysqli_query($con, "SELECT * FROM stockes");

        // التحقق من وجود منتجات
        if (!$result || mysqli_num_rows($result) == 0) {
            echo "<p style='color:red; text-align:center;'>⚠ لا توجد منتجات متاحة في الوقت الحالي.</p>";
        } else {
        ?>
        
        <table border="2" align="center">
            <tr>
                <th>السعر</th>
                <th>المنتج</th>
                <th>الكود</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['pri_stock']; ?></td>
                    <td><?php echo $row['nom_stock']; ?></td>
                    <td><?php echo $row['codb_stock']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <br>
        <?php
        }

        // إغلاق الاتصال
        mysqli_close($con);
        ?>

    </fieldset>
    <br>
    <p align="left"><label><strong> Ramdane Bouroga © 2023 جميع الحقوق محفوظة لـ</strong></label></p>
</body>
</html>
