<!DOCTYPE html>
<html lang="en">
<?php
// print_r($data['rooms']) 
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* CSS inline */
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }

    ul {
        list-style-type: none;
        flex-wrap: wrap;
        display: flex;
        padding: 0;
    }

    li {
        background-color: #fff;
        padding: 10px;
        margin: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    p {
        margin: 0;
    }
    </style>
    <!-- Hoặc liên kết đến tệp CSS bên ngoài -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>

<body>
    <ul>
        <?php
        $totalPrice = 0; // Variable to store the total price
        foreach ($data['rooms'] as $room) :
            $totalPrice += $room['GiaGoc']; // Increment the total price
        ?>
        <li>
            <p>Mã Tour: <?php echo $room['MaTour']; ?></p>
            <p>Địa điểm: <?php echo $room['DiaDiem']; ?></p>
            <p>Ngày khởi hành: <?php echo $room['ThoiGianKhoiHanh']; ?></p>
            <p>Giá bán: <?php echo $room['GiaBan']; ?></p>
        </li>
        <?php endforeach; ?>
    </ul>
    <p>Tổng tiền: <?php echo number_format($totalPrice, 0, ',', '.') . 'đ'; ?></p> <!-- Display the total price -->
    <a href="<?php url('checkout/pay') ?>">Thanh toán</a>

</body>

</html>