<?php
// classes/Laporan.php

interface CetakLaporan {
    public function generate();
}

// Implementasi Polymorphism untuk Cetak KHS
class LaporanKHS implements CetakLaporan {
    private $mhs;

    public function __construct(Mahasiswa $mhs) {
        $this->mhs = $mhs;
    }

    public function generate() {
        // Logika untuk mencetak struk KHS
        $output = "--- KARTU HASIL STUDI ---\n";
        $output .= "Nama: " . $this->mhs->getNama() . "\n";
        $output .= "IPK: " . $this->mhs->hitungIPK();
        return $output;
    }
}