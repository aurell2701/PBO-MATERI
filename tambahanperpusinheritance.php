<?php
// ==== Definisi Traits ====
trait Loggable {
    public function logActivity($message) {
        echo "[LOG] " . $message . PHP_EOL;
    }
}

trait Notifiable {
    public function sendNotification($message) {
        echo "[NOTIFIKASI] " . $message . PHP_EOL;
    }
}

trait Searchable {
    public function search($keyword) {
        echo "Mencari data dengan kata kunci: '{$keyword}'" . PHP_EOL;
    }
}

// ==== Class Pengguna ====
class Pengguna {
    use Loggable, Notifiable, Searchable;
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }
}

// ==== Class Produk ====
class Produk {
    use Loggable, Searchable;
    public $namaProduk;

    public function __construct($namaProduk) {
        $this->namaProduk = $namaProduk;
    }
}

// ==== Class Transaksi ====
class Transaksi {
    use Loggable, Notifiable;
    public $idTransaksi;

    public function __construct($idTransaksi) {
        $this->idTransaksi = $idTransaksi;
    }
}

// ==== Penggunaan ====
$pengguna = new Pengguna("Aurell");
$produk = new Produk("Lightstick LeeSerafim");
$transaksi = new Transaksi("LSFX234");

$pengguna->logActivity("Pengguna {$pengguna->nama} login");
$pengguna->sendNotification("Selamat datang, {$pengguna->nama}!");
$pengguna->search("Profil pengguna");

$produk->logActivity("Produk {$produk->namaProduk} ditambahkan ke katalog");
$produk->search("Lightstick LeeSerafim");

$transaksi->logActivity("Transaksi {$transaksi->idTransaksi} berhasil dibuat");
$transaksi->sendNotification("Pembayaran transaksi {$transaksi->idTransaksi} diterima");

?>
