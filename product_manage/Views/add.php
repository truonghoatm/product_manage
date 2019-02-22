<?php
if (isset($message)) {
    echo "<p class='alert-infor'>$message</p>";
}
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Thêm mới sản phẩm</h1>
</div>
<div>
    <form method="post">
        <div>
            <label>Name:</label><input type="text" name="name" placeholder="Nhap ten san pham">
        </div>
        <div>
            <label>Price:</label><input type="text" name="price" placeholder="Nhap gia san pham">
        </div>
        <div>
            <label>Description:</label><input type="text" name="description" placeholder="Nhap mo ta">
        </div>
        <div>
            <label>ProductVendor:</label><input type="text" name="productVendor" placeholder="Nhap ten nha san xuat">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Them moi</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </div>
    </form>
</div>
</body>
</html>
