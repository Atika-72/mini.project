<?php
require_once 'Mahasiswa.php';
require_once 'Laporan.php';

// Simulasi Data Mahasiswa (Bisa dikembangkan dengan Database/Form)
$mhs = new Mahasiswa("Atika Kumailiya", "I43253267", "Bisnis Digital");
$mhs->tambahNilai("Pemrograman Berorientasi Objek", 95);
$mhs->tambahNilai("Algoritma & Struktur Data", 88);
$mhs->tambahNilai("E-Commerce", 90);
$mhs->tambahNilai("Desain Grafis & Multimedia", 89);

$cetakKHS = new LaporanKHS($mhs);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard | SIAKAD MINI</title>
</head>
<body class="bg-slate-50 min-h-screen">
    <nav class="bg-indigo-700 p-4 shadow-md text-white">
        <div class="container mx-auto flex justify-center uppercase font-bold tracking-widest text-xl">
            SIAKAD MINI
        </div>
    </nav>

    <main class="container mx-auto mt-10 p-4">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="p-8 border-b border-slate-100 bg-slate-50/50">
                <h2 class="text-xl font-bold text-slate-800">Input Data Mahasiswa</h2>
            </div>
            
            <form action="khs.php" method="POST">
                 <div class="grid grid-cols-2 gap-6 mb-8">
                    <input type="text" name="nama" placeholder="Nama Mahasiswa" class="p-3 border rounded-lg">
                    <input type="text" name="nim" placeholder="NIM" class="p-3 border rounded-lg">
                </div>
                <hr class="mb-6">

    <div class="space-y-4">
        <div class="grid grid-cols-2 gap-6">
            <input type="text" name="matkul[]" placeholder="Mata Kuliah 1" class="p-3 border rounded-lg">
            <input type="number" name="nilai[]" placeholder="Nilai" class="p-3 border rounded-lg">
        </div>
        <div class="grid grid-cols-2 gap-6">
            <input type="text" name="matkul[]" placeholder="Mata Kuliah 2" class="p-3 border rounded-lg">
            <input type="number" name="nilai[]" placeholder="Nilai" class="p-3 border rounded-lg">
        </div>
        <div class="grid grid-cols-2 gap-6">
            <input type="text" name="matkul[]" placeholder="Mata Kuliah 3" class="p-3 border rounded-lg">
            <input type="number" name="nilai[]" placeholder="Nilai" class="p-3 border rounded-lg">
        </div>
        <div class="grid grid-cols-2 gap-6">
            <input type="text" name="matkul[]" placeholder="Mata Kuliah 4" class="p-3 border rounded-lg">
            <input type="number" name="nilai[]" placeholder="Nilai" class="p-3 border rounded-lg">

    </div>

    <button type="submit" class="mt-6 bg-indigo-900 text-white px-8 py-2 rounded-lg">PROSES KHS</button>
</form>
        </div>
    </main>
</body>
</html>