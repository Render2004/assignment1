<?php
    if(isset($_POST["ten"])){
        $ten = $_POST["ten"];
        $xuat_ten = "Chào bạn ".$ten;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="demo.php" method="post">
        <table>
            <tr>
                <td style="border-bottom: 1px solid black;" colspan="2">IN LỜI CHÀO</td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="ten"></td>
            </tr>
            <tr>
                <td style="border-bottom: 1px solid black;" colspan="2"><label for=""><?php echo $xuat_ten; ?></label></td>
            </tr>
            <tr><td colspan="2">
                <input type="submit" value="Xuất">
            </td></tr>
        </table>
    </form>
</body>
</html>