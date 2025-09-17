<?php
// Class Induk
class ItemKpop {
    public $judul;
    public $tahunRilis;

    public function __construct($judul, $tahunRilis) {
        $this->judul = $judul;
        $this->tahunRilis = $tahunRilis;
    }

    public function play() {
        echo "Item K-Pop sedang dimainkan." . PHP_EOL;
    }
}

// Class Anak: Album
class Album extends ItemKpop {
    public $label;

    public function __construct($judul, $tahunRilis, $label) {
        parent::__construct($judul, $tahunRilis);
        $this->label = $label;
    }

    public function play() {
        echo "Album '{$this->judul}' dari label {$this->label} (rilis {$this->tahunRilis}) diputar." . PHP_EOL;
    }
}

// Class Anak: DVD Konser
class DVDKonser extends ItemKpop {
    public $durasi;

    public function __construct($judul, $tahunRilis, $durasi) {
        parent::__construct($judul, $tahunRilis);
        $this->durasi = $durasi;
    }

    public function play() {
        echo "DVD konser '{$this->judul}' (rilis {$this->tahunRilis}) berdurasi {$this->durasi} menit diputar." . PHP_EOL;
    }
}

// Class Anak: Majalah Kpop
class MajalahKpop extends ItemKpop {
    public $edisi;

    public function __construct($judul, $tahunRilis, $edisi) {
        parent::__construct($judul, $tahunRilis);
        $this->edisi = $edisi;
    }

    public function play() {
        echo "Majalah K-Pop '{$this->judul}' edisi {$this->edisi} (rilis {$this->tahunRilis}) dibaca." . PHP_EOL;
    }
}

// --- Penggunaan ---
$album   = new Album("Born Pink - BLACKPINK", 2022, "YG Entertainment");
$dvd     = new DVDKonser("BTS World Tour: Love Yourself", 2019, 150);
$majalah = new MajalahKpop("Seventeen Special Edition", 2024, "April");

$album->play();
$dvd->play();
$majalah->play();

?>