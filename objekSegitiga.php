<?php
require_once "classSegitiga.php";

// Segitiga Sama Kaki
$segitiga1 = new Segitiga(10, 8, 6, 8, 6);
$segitiga1->info();

// Segitiga Sama Sisi
$segitiga2 = new Segitiga(5, 4.33, 5, 5, 5);
$segitiga2->info();
?>
