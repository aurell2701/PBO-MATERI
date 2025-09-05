<?php
class Segitiga {
    public $alas;
    public $tinggi;
    public $sisiA;
    public $sisiB;
    public $sisiC;

    // Constructor
    public function __construct($alas, $tinggi, $sisiA, $sisiB, $sisiC) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisiA = $sisiA;
        $this->sisiB = $sisiB;
        $this->sisiC = $sisiC;
    }

    // Hitung luas
    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    // Hitung keliling
    public function hitungKeliling() {
        return $this->sisiA + $this->sisiB + $this->sisiC;
    }

    // Cek jenis segitiga
    public function cekJenis() {
        if ($this->sisiA == $this->sisiB && $this->sisiB == $this->sisiC) {
            return "Sama Sisi";
        } elseif ($this->sisiA == $this->sisiB || $this->sisiB == $this->sisiC || $this->sisiA == $this->sisiC) {
            return "Sama Kaki";
        } else {
            return "Sembarang";
        }
    }

    // Cetak informasi
    public function info() {
        echo "===== INFORMASI SEGITIGA ======<br>";
        echo "Alas : " . $this->alas . "<br>";
        echo "Tinggi : " . $this->tinggi . "<br>";
        echo "Sisi : " . $this->sisiA . ", " . $this->sisiB . ", " . $this->sisiC . "<br>";
        echo "Luas : " . $this->hitungLuas() . "<br>";
        echo "Keliling : " . $this->hitungKeliling() . "<br>";
        echo "Jenis : " . $this->cekJenis() . "<br>";
        echo "===============================<br><br>";
    }
}
?>
