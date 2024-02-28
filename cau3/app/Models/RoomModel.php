<?php

use App\Libs\Database;

class RoomModel extends Database
{
    public function getAllRoom()
    {
        $sql = "SELECT 
        MaTour ,DiaDiem, dat,
        CONCAT('Khởi hành sau ', DATEDIFF(NgayKhoiHanh, CURDATE()), ' ngày') AS ThoiGianKhoiHanh,
        CONCAT(FORMAT(GiaBan, 0), 'đ') AS GiaBan
    FROM 
        TOUR
    WHERE 
        NgayKhoiHanh > CURDATE();";

        $result = $this->select($sql);
        return $result;
    }
    public function getAllRoomDat()
    {
        $sql = "SELECT 
            MaTour, DiaDiem, dat, GiaBan as GiaGoc,
            CONCAT('Khởi hành sau ', DATEDIFF(NgayKhoiHanh, CURDATE()), ' ngày') AS ThoiGianKhoiHanh,
            CONCAT(FORMAT(GiaBan, 0), 'đ') AS GiaBan
        FROM 
            TOUR
        WHERE 
            NgayKhoiHanh > CURDATE() 
            AND dat = '1'";

        $result = $this->select($sql);
        return $result;
    }

    public function dat($data)
    {
        $id = mysqli_escape_string($this->link, $data);
        $sql = "UPDATE tour SET dat = '1' WHERE MaTour = '$id'";
        $this->update($sql);
    }
    public function pay()
    {
        $sql = "UPDATE tour SET dat = '0' ";
        $this->update($sql);
        redirect('');
    }
    public function huy($data)
    {
        $id = mysqli_escape_string($this->link, $data);
        $sql = "UPDATE tour SET dat = '0' WHERE MaTour = '$id'";
        $this->update($sql);
    }
}