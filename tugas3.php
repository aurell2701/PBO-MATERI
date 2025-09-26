<?php
// Class abstrak
abstract class ItemPerpustakaan {
    public $judul;
    public $tahunTerbit;

    public function __construct($judul, $tahunTerbit) {
        $this->judul = $judul;
        $this->tahunTerbit = $tahunTerbit;
    }

    // Method abstrak → wajib diimplementasikan di class turunan
    abstract public function pinjam();
}

// Class Buku
class Buku extends ItemPerpustakaan {
    public $isbn;

    public function __construct($judul, $tahunTerbit, $isbn) {
        parent::__construct($judul, $tahunTerbit);
        $this->isbn = $isbn;
    }

    public function pinjam() {
        echo "Buku '{$this->judul}' (ISBN: {$this->isbn}) dipinjam.\n";
    }
}

// Class Majalah
class Majalah extends ItemPerpustakaan {
    public $edisi;

    public function __construct($judul, $tahunTerbit, $edisi) {
        parent::__construct($judul, $tahunTerbit);
        $this->edisi = $edisi;
    }

    public function pinjam() {
        echo "Majalah '{$this->judul}' edisi {$this->edisi} dipinjam.\n";
    }
}

// Membuat daftar item (campur Buku & Majalah)
$items = [
    new Buku("Pemrograman PHP", 2023, "ISBN12345"),
    new Majalah("Teknologi Masa Depan", 2024, "Edisi Maret")
];

// Polimorfisme: panggil method pinjam() tanpa peduli jenis objek
foreach ($items as $item) {
    $item->pinjam();
}
?>