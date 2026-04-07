<?php
// classes/Mahasiswa.php
require_once 'User.php';

class Mahasiswa extends User {
    // Properti khusus mahasiswa
    private $prodi;
    private $daftarNilai = []; // Menyimpan array [matakuliah => nilai]

    public function __construct($nama, $id, $prodi) {
        // Memanggil constructor dari parent (User)
        parent::__construct($nama, $id);
        $this->prodi = $prodi;
    }

    public function getRole() {
        return "Mahasiswa";
    }

    public function getProdi() {
        return $this->prodi;
    }

    // Method untuk Manajemen Mata Kuliah & Nilai
    public function tambahNilai($mataKuliah, $nilai) {
        $this->daftarNilai[$mataKuliah] = $nilai;
    }

    public function getDaftarNilai() {
        return $this->daftarNilai;
    }

    // Fitur Utama: Hitung IPK
    public function hitungIPK() {
        if (empty($this->daftarNilai)) return 0;

        $totalNilai = array_sum($this->daftarNilai);
        $jumlahMatkul = count($this->daftarNilai);
        $rataRata = $totalNilai / $jumlahMatkul;

        // Konversi sederhana ke skala 4.0
        $ipk = ($rataRata / 100) * 4;
        return number_format($ipk, 2);
    }
}