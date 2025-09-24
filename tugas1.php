<?php
// Class abstrak
abstract class Kendaraan {
    // Method abstrak (harus diimplementasi oleh class turunan)
    abstract public function jalan();
}

// Class turunan Mobil
class Mobil extends Kendaraan {
    public function jalan() {
        echo "Mobil berjalan dengan 4 roda\n";
    }
}

// Class turunan Motor
class Motor extends Kendaraan {
    public function jalan() {
        echo "Motor berjalan dengan 2 roda\n";
    }
}

// Membuat objek dan memanggil method
$k1 = new Mobil();
$k2 = new Motor();

$k1->jalan(); // Output: Mobil berjalan dengan 4 roda
$k2->jalan(); // Output: Motor berjalan dengan 2 roda
?>
