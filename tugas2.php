<?php
// Interface BangunDatar
interface BangunDatar {
    public function luas();
}

// Implementasi Persegi
class Persegi implements BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function luas() {
        return $this->sisi * $this->sisi;
    }
}

// Implementasi Lingkaran
class Lingkaran implements BangunDatar {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function luas() {
        return pi() * $this->jariJari * $this->jariJari;
    }
}

// Array berisi objek Persegi dan Lingkaran
$bangun = [
    new Persegi(5),
    new Lingkaran(10),
];

// Polimorfisme: memanggil method luas() tanpa peduli jenis objeknya
foreach ($bangun as $b) {
    echo "Luas: " . $b->luas() . "\n";
}
?>