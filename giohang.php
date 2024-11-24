<?php
$cart23 = [
    [
        'id' => 1,
        'name' => 'iPhone',
        'quantity' => 1,
        'price' => 48000
    ],
    [
        'id' => 2,
        'name' => 'Mouse',
        'quantity' => 3,
        'price' => 30
    ]
];
// Tính tổng tiền
$total = 0;
foreach ($cart23 as $item) {
    $total += $item['quantity'] * $item['price'];
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Thông tin giỏ hàng</h2>

<table border="1">
    <tr>
        <th>STT</th>
        <th>Mã</th>
        <th>Tên</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thànhtiền</th>
        <th>#</th>
    </tr>
    <?php foreach ($cart23 as $index => $item): ?>
    <tr>
        <td><?php echo $index + 1; ?></td>
        <td>sp<?php echo $item['id'];?></td>
        <td><?php echo $item['name']; ?></td>
        <td><?php echo $item['quantity']; ?></td>
        <td><?php echo number_format($item['price'], 0, ',', '.'); ?> VNĐ</td>
        <td><?php echo number_format($item['quantity'] * $item['price'], 0, ',', '.'); ?> VNĐ</td>
        <td>
            <a href="delete.php?id=<?php echo $item['id']; ?>">delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
    <tr>
    <td colspan="5" style="text-align: right;"><strong>Tổng tiền:</strong></td>
    <td><?php echo number_format($total, 0, ',', '.'); ?> VNĐ</td>
    <td></td>
</tr>
</table>
<?php
echo "mia mai + 123123"
?>
</body>
</html>
