<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login | SIAKAD MINI</title>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-10 rounded-3xl shadow-2xl w-full max-w-md border border-slate-100">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-slate-800 tracking-tight">SIAKAD <span class="text-indigo-600">MINI</span></h1>
            <p class="text-slate-400 mt-2">Masuk untuk mengelola data akademik</p>
        </div>
        <form action="index.php" method="POST" class="space-y-6">
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Username</label>
                <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" placeholder="Masukkan NIM">
            </div>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                <input type="password" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" placeholder="••••••••">
            </div>
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-xl shadow-lg shadow-indigo-200 transition-all transform hover:-translate-y-1">
                Masuk Sistem
            </button>
        </form>
    </div>
</body>
</html>