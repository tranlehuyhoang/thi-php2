<?php
class NhanVat
{
    public $ten;
    public $mau;
    public $nangLuong;

    public function __construct($ten, $mau, $nangLuong)
    {
        $this->ten = $ten;
        $this->mau = $mau;
        $this->nangLuong = $nangLuong;
    }

    public function kiemTra()
    {
        if ($this->mau > 0) {
            echo "Nhân vật {$this->ten} còn {$this->mau} chỉ số sinh tồn.";
        } else {
            echo "Chỉ số sinh tồn bằng 0. {$this->ten} đã hy sinh.";
        }
    }

    public function hoiMau($mau = 10)
    {
        $this->mau += $mau;
        echo "Nhân vật {$this->ten} đã được hồi {$mau} chỉ số máu.";
    }
}

class QuaiVat extends NhanVat
{
    public $sucManh;

    public function __construct($ten, $mau, $nangLuong, $sucManh)
    {
        parent::__construct($ten, $mau, $nangLuong);
        $this->sucManh = $sucManh;
    }

    public function tanCong($nhanVat)
    {
        $nhanVat->mau -= $this->sucManh;
        echo "Nhân vật {$this->ten} tấn công nhân vật {$nhanVat->ten} và làm giảm {$this->sucManh} chỉ số máu.";
    }
}

// Tạo một nhân vật
$nhanVat1 = new NhanVat("Nhân vật 1", 100, 50);
$nhanVat1->kiemTra(); // Kết quả: Nhân vật Nhân vật 1 còn 100 chỉ số sinh tồn.

// Hồi máu cho nhân vật
$nhanVat1->hoiMau(); // Kết quả: Nhân vật Nhân vật 1 đã được hồi 10 chỉ số máu.

// Tạo một quái vật
$quaiVat1 = new QuaiVat("Quái vật 1", 80, 60, 20);
$quaiVat1->kiemTra(); // Kết quả: Nhân vật Quái vật 1 còn 80 chỉ số sinh tồn.

// Quái vật tấn công nhân vật
$quaiVat1->tanCong($nhanVat1); // Kết quả: Nhân vật Quái vật 1 tấn công nhân vật Nhân vật 1 và làm giảm 20 chỉ số máu.

$nhanVat1->kiemTra(); // Kết quả: Nhân vật Nhân vật 1 còn 90 chỉ số sinh tồn.