<!DOCTYPE html>
<html>
<head>
    <title>My_Site</title>
    <script>
        function setTodayDate() {
            let today = new Date().toISOString().split('T')[0];
            document.getElementById("stock_pro").value = today;
            document.getElementById("stock_exp").value = today;
        }
    </script>
</head>
<body onload="setTodayDate()" style="background-color: #2980b9">
    <h1 align="center">
        <label>
            <font size="+4" color="red">
                <img src="star.gif" width="75" height="75">My Online Store<img src="star.gif" width="75" height="75">
            </font>
        </label>
    </h1>
    
    <table border="3" style="width:75%" align="center" background="1.png">
        <tr background="1.png">
            <th><p align="center"><a href="index.php"><strong><font size="+2" color="red">تسجيل الخروج</font></strong></a></p></th>
            <th><p align="center"><a href="call_us_admin.php"><strong><font size="+2" color="blue">اتصل بنا</font></strong></a></p></th>
            <th><p align="center"><a href="stock.php"><strong><font size="+2" color="green">إضافة منتج</font></strong></a></p></th>
            <th><p align="center"><a href="products_admin.php"><strong><font size="+2" color="blue">المنتجات</font></strong></a></p></th>
            <th><p align="center"><a href="admin_site.php"><strong><font size="+2" color="blue">الرئيسية</font></strong></a></p></th>
        </tr>
    </table>
    <br>
    
    <center>
        <fieldset>
        <center><legend><p align="center"><label><font size="+2"><strong>إضافة منتج جديد</strong></font></label></p></legend></center>
            <form action="register_stock.php" method="post">
                <input type="number" name="stock_codeb"><label>:كود بار المنتج</label>
                <br><br>
                <input type="text" name="stock_name"><label>: إسم المنتج</label>
                <br><br>
                <input type="number" name="stock_pri"><label>: سعر المنتج</label>
                <br><br>
                <input type="number" name="quant_stock" min="1"><label>: عدد المنتج</label>
                <br><br>
                <select type="text" name="stock_type">
                    <option value="">-----</option>
                    <option value="مواد غذائية">مواد غذائية</option>
                    <option value="مواد تنظيف">مواد تنظيف</option>
                    <option value="مواد شبه طبية">مواد شبه طبية</option>
                    <option value="مواد أخرى">مواد أخرى</option>
                </select><label>: نوع المنتج</label>
                <br><br>
                <input type="file" name="stock_img"><label>: صورة المنتج (إختياري)</label>
                <br><br>
                <input type="date" name="stock_pro" id="stock_pro"><label>: تاريخ الإنتاج</label>
                <br><br>
                <input type="date" name="stock_exp" id="stock_exp"><label>: تاريخ نهاية الصلاحية</label>
                <br><br>
                <input type="submit" name="register_stock" value="إضافة">
            </form>
        </fieldset>
    </center>
    <br>
    <p align="left"><label><strong> Ramdane Bouroga © 2023 جميع الحقوق محفوظة لـ</strong></label></p>
</body>
</html>