<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Tên</th>
                <th>Đơn Giá</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>sp1 Iphone 15</td>
                <td>48000</td>
                <td><a href="giohang.php?id=1">TGH</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>sp2 Samsung 40000</td>
                <td>40000</td>
                <td><a href="giohang.php?id=2">TGH</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>sp3 Mouse</td>
                <td>10000</td>
                <td><a href="giohang.php?id=3">TGH</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>sp4 Man Hinh</td>
                <td>10000</td>
                <td><a href="giohang.php?id=4">TGH</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (array_key_exists($id, $_SESSION['cart'])) {
        $_SESSION['cart'][$id]++;
    } else {
        $_SESSION['cart'][$id] = 1;
    }
}
?>