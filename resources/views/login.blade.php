<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro-Shield | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-slate-100">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-emerald-600 mb-2">Agro-Shield</h1>
            <p class="text-slate-500 text-sm">AI-Driven Precision Farming Dashboard</p>
        </div>
        
        <form onsubmit="event.preventDefault(); window.location.href='/dashboard';" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Email Pengelola</label>
                <input type="email" value="manager@agro-shield.com" readonly 
                    class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 text-slate-600 focus:outline-none cursor-not-allowed">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Kata Sandi</label>
                <input type="password" value="********" readonly 
                    class="w-full px-4 py-3 rounded-lg bg-slate-50 border border-slate-200 text-slate-600 focus:outline-none cursor-not-allowed">
            </div>
            
            <a href="/dashboard" 
               class="block w-full bg-emerald-600 hover:bg-emerald-700 text-white text-center font-semibold py-3 rounded-lg transition duration-200 shadow-md shadow-emerald-200">
                Masuk ke Sistem Pengendali
            </a>
        </form>

        <div class="mt-6 text-center">
            <p class="text-xs text-slate-400">Mock Environment - No Auth Required for Demo</p>
        </div>
    </div>
</body>
</html>
