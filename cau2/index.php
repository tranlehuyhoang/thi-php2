<?php

// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour";
$conn = new mysqli($servername, $username, $password, $dbname, 3309);
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Truy vấn và hiển thị thông tin tour
$sql = "SELECT DiaDiem, DATE_FORMAT(NgayKhoiHanh, '%d/%m/%Y') as NgayKhoiHanh, GiaBan FROM TOUR";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Địa điểm</th><th>Ngày khởi hành</th><th>Giá bán</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["DiaDiem"] . "</td><td>" . $row["NgayKhoiHanh"] . "</td><td>" . $row["GiaBan"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu tour.";
}

$conn->close();