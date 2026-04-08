<?php
// 1. Pastikan menangkap data dengan pengecekan agar tidak Undefined
$nama_mhs   = $_POST['nama'] ?? "Atika Kumailiya";
$nim_mhs    = $_POST['nim'] ?? "I43253267";
$prodi      = "Bisnis Digital"; // Pastikan variabel ini ada

// Menangkap array mata kuliah dan nilai
$daftar_matkul = $_POST['matkul'] ?? [];
$daftar_nilai  = $_POST['nilai'] ?? [];

// 2. Fungsi Huruf Mutu
function hitungHuruf($n) {
    if ($n >= 85) return 'A';
    if ($n >= 75) return 'B';
    if ($n >= 65) return 'C';
    return 'D';
}

// 3. Logika Hitung IPK
$total_skor = 0;
$jumlah_data = 0;

if (!empty($daftar_nilai)) {
    foreach ($daftar_nilai as $n) {
        if ($n !== "" && $n !== null) {
            $total_skor += (float)$n;
            $jumlah_data++;
        }
    }
}
$ipk_kumulatif = ($jumlah_data > 0) ? number_format((($total_skor / $jumlah_data) / 100) * 4, 2) : "0.00";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>KHS - <?= htmlspecialchars($nama_mhs) ?></title>
    <style>
        @media print { .no-print { display: none; } }
    </style>
</head>
<body class="bg-slate-100 p-5">
    <div class="max-w-4xl mx-auto bg-white p-10 shadow-xl border-t-8 border-indigo-900">
        
        <div class="flex justify-between border-b-2 border-slate-800 pb-5 mb-8">
            <div>
                <h1 class="text-2xl font-bold uppercase">Kartu Hasil Studi</h1>
                <p class="text-indigo-600 font-semibold">Tahun Akademik 2025/2026</p>
            </div>
            <div class="text-right">
                <h2 class="font-bold"><?= $prodi ?></h2>
                <p class="text-sm text-slate-500">Politeknik Negeri Jember</p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-10">
            <div>
                <p class="text-xs text-slate-400 font-bold uppercase">Nama Lengkap Mahasiswa</p>
                <p class="text-lg font-bold"><?= htmlspecialchars($nama_mhs) ?></p>
            </div>
            <div class="text-right">
                <p class="text-xs text-slate-400 font-bold uppercase">Nomor Induk Mahasiswa</p>
                <p class="text-lg font-mono font-bold text-indigo-700"><?= htmlspecialchars($nim_mhs) ?></p>
            </div>
        </div>

        <table class="w-full mb-10">
            <thead>
                <tr class="bg-slate-900 text-white text-left">
                    <th class="p-4">Mata Kuliah</th>
                    <th class="p-4 text-center">Nilai</th>
                    <th class="p-4 text-right">Huruf</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php foreach ($daftar_matkul as $key => $m): ?>
                    <?php if (!empty($m)): ?>
                    <tr>
                        <td class="p-4 font-medium"><?= htmlspecialchars($m) ?></td>
                        <td class="p-4 text-center"><?= $daftar_nilai[$key] ?></td>
                        <td class="p-4 text-right font-bold text-indigo-600"><?= hitungHuruf($daftar_nilai[$key]) ?></td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="flex justify-between items-center bg-slate-50 p-6 rounded-xl">
            <p class="text-xs italic text-slate-400 italic">* Tidak sah tanpa tanda tangan basah.</p>
            <div class="text-right">
                <p class="text-xs font-bold uppercase text-slate-400">IPK Kumulatif</p>
                <p class="text-4xl font-black"><?= $ipk_kumulatif ?></p>
            </div>
        </div>

        <div class="no-print mt-10 flex justify-center gap-4">
    <a href="index.php" class="bg-slate-200 text-slate-700 px-8 py-3 rounded-lg font-bold hover:bg-slate-300 transition-all">
        INPUT ULANG
    </a>

    <button onclick="window.print()" class="bg-indigo-900 text-white px-8 py-3 rounded-lg font-bold hover:bg-indigo-800 transition-all">
        CETAK DOKUMEN
    </button>
</div>
    </div>
</body>
</html>