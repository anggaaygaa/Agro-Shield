<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro-Shield | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 min-h-screen">
    
    <!-- Navbar -->
    <nav class="bg-white shadow-sm px-6 py-4 flex justify-between items-center border-b border-slate-200">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center text-emerald-600 font-bold text-xl">
                A
            </div>
            <h1 class="text-xl font-bold text-slate-800">Agro-Shield Dashboard</h1>
        </div>
        <div class="flex items-center gap-4">
            <span class="text-sm font-medium text-slate-600">Blok Area: <strong>A</strong></span>
            <a href="/" class="text-sm text-red-500 hover:text-red-700 font-medium px-4 py-2 bg-red-50 rounded-lg transition-colors">Keluar</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="p-6 max-w-[1600px] mx-auto flex flex-col lg:flex-row gap-6 h-[calc(100vh-80px)]">
        
        <!-- Kiri: Analytics & Charts (70%) -->
        <section class="w-full lg:w-[70%] flex flex-col gap-6">
            
            <!-- Stat Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Suhu -->
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
                    <p class="text-sm text-slate-500 font-medium mb-1">Suhu Saat Ini</p>
                    <div class="flex items-end gap-2">
                        <h2 class="text-3xl font-bold text-red-500">37.0°C</h2>
                        <span class="text-xs text-red-500 font-medium bg-red-50 px-2 py-0.5 rounded flex items-center mb-1">↑ Naik</span>
                    </div>
                </div>
                <!-- Kelembapan -->
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 border-l-4 border-l-red-500">
                    <p class="text-sm text-slate-500 font-medium mb-1">Kelembapan Tanah</p>
                    <div class="flex items-end gap-2">
                        <h2 class="text-3xl font-bold text-red-500">25%</h2>
                        <span class="text-xs text-red-500 font-medium bg-red-50 px-2 py-0.5 rounded flex items-center mb-1">ANOMALI</span>
                    </div>
                </div>
                <!-- pH Tanah -->
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
                    <p class="text-sm text-slate-500 font-medium mb-1">pH Tanah</p>
                    <div class="flex items-end gap-2">
                        <h2 class="text-3xl font-bold text-slate-800">6.1</h2>
                        <span class="text-xs text-slate-500 font-medium mb-1">Normal</span>
                    </div>
                </div>
            </div>

            <!-- Chart Container -->
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex-grow flex flex-col">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-slate-800">Pemantauan Lingkungan Real-time</h3>
                    <span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-bold rounded-full animate-pulse border border-red-200">WARNING DETECTED</span>
                </div>
                <div class="relative flex-grow w-full h-full min-h-[300px]">
                    <canvas id="sensorChart"></canvas>
                </div>
            </div>
        </section>

        <!-- Kanan: AI Assistant / IBM Bob Panel (30%) -->
        <section class="w-full lg:w-[30%] bg-white rounded-2xl shadow-sm border border-slate-100 flex flex-col overflow-hidden">
            <!-- Header Chat -->
            <div class="bg-slate-800 p-4 text-white flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-emerald-500 flex items-center justify-center text-sm font-bold border-2 border-emerald-300">
                    AI
                </div>
                <div>
                    <h3 class="font-semibold text-sm">IBM Bob Assistant</h3>
                    <p class="text-xs text-slate-300">Powered by watsonx Granite</p>
                </div>
            </div>
            
            <!-- Chat Messages Area -->
            <div class="flex-grow p-4 overflow-y-auto flex flex-col gap-4 bg-slate-50" id="chatContainer">
                
                <!-- System Alert Message -->
                <div class="flex flex-col gap-1 max-w-[85%] self-start">
                    <div class="bg-red-50 border border-red-200 text-red-800 p-3 rounded-2xl rounded-tl-sm text-sm">
                        <strong class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                            Peringatan Anomali Sistem!
                        </strong>
                        <p class="mt-1 text-xs">Kelembapan tanah turun drastis ke 25% (di bawah batas normal 40%). Suhu meningkat tajam ke 37.0°C.</p>
                    </div>
                    <span class="text-[10px] text-slate-400 ml-1">12:00 PM</span>
                </div>

                <!-- AI Mitigation Response (Mocked RAG output) -->
                <div class="flex flex-col gap-1 max-w-[85%] self-start mt-2">
                    <div class="bg-white border border-slate-200 text-slate-700 p-3 rounded-2xl rounded-tl-sm text-sm shadow-sm">
                        Berdasarkan literatur mitigasi pertanian yang ada di database saya, berikut tindakan yang harus segera dilakukan:
                        <ul class="list-disc ml-4 mt-2 space-y-1 text-xs">
                            <li>Aktifkan sistem irigasi tetes (drip irrigation) di Blok A selama 45 menit.</li>
                            <li>Pasang jaring peneduh (paranet) sementara jika paparan matahari terus berlanjut.</li>
                            <li>Tunda pemberian pupuk berbasis nitrogen tinggi sampai kelembapan tanah kembali di atas 40%.</li>
                        </ul>
                        <p class="mt-2 text-xs font-medium text-emerald-600">Apakah Anda ingin saya mengotomatiskan penjadwalan irigasi sekarang?</p>
                    </div>
                    <span class="text-[10px] text-slate-400 ml-1">12:00 PM</span>
                </div>

            </div>
            
            <!-- Chat Input Form -->
            <div class="p-4 bg-white border-t border-slate-100">
                <form id="chatForm" class="flex gap-2">
                    <input type="text" id="chatInput" placeholder="Tanyakan instruksi lebih lanjut..." autocomplete="off"
                           class="flex-grow px-4 py-2 bg-slate-100 border-transparent rounded-full text-sm focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all">
                    <button type="submit" id="chatSubmit" class="w-10 h-10 bg-emerald-600 text-white rounded-full flex items-center justify-center hover:bg-emerald-700 shadow-md transition-colors disabled:opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </button>
                </form>
            </div>
        </section>

    </main>

    <!-- Dummy Chart Script -->
    <script>
        const ctx = document.getElementById('sensorChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['08:00', '09:00', '10:00', '11:00', '12:00'],
                datasets: [
                    {
                        label: 'Kelembapan (%)',
                        data: [62, 59, 30, 27, 25],
                        borderColor: '#3b82f6',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    },
                    {
                        label: 'Suhu (°C)',
                        data: [28.0, 28.8, 35.5, 36.2, 37.0],
                        borderColor: '#ef4444',
                        borderWidth: 2,
                        tension: 0.4,
                        borderDash: [5, 5]
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'top' }
                },
                scales: {
                    y: { beginAtZero: false, suggestedMax: 80 }
                }
            }
        });
    </script>

    <!-- Chat Logic with Langflow Integration -->
    <script>
        const chatForm = document.getElementById('chatForm');
        const chatInput = document.getElementById('chatInput');
        const chatContainer = document.getElementById('chatContainer');
        const chatSubmit = document.getElementById('chatSubmit');

        // GANTI ID INI DENGAN FLOW ID DARI LANGFLOW ANDA
        const LANGFLOW_FLOW_ID = '01cdc6a9-e3d1-4583-a983-31f6773a1c59'; 

        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const message = chatInput.value.trim();
            if (!message) return;

            // 1. Tampilkan pesan User
            appendMessage('user', message);
            chatInput.value = '';
            chatSubmit.disabled = true;

            // 2. Tampilkan indikator loading AI
            const loadingId = 'loading-' + Date.now();
            appendMessage('ai', 'Sedang memproses instruksi dengan watsonx...', loadingId);

            // 3. Panggil API Langflow
            try {
                const response = await fetch(`http://127.0.0.1:7860/api/v1/run/${LANGFLOW_FLOW_ID}?stream=false`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        input_value: message,
                        output_type: "chat",
                        input_type: "chat"
                    })
                });

                if (!response.ok) throw new Error('API Error');
                const data = await response.json();
                
                // Ekstrak teks dari respons RAG
                const aiResponseText = data.outputs[0].outputs[0].results.message.text;
                
                // Ganti loading dengan teks asli
                document.getElementById(loadingId).innerHTML = formatAIResponse(aiResponseText);
            } catch (error) {
                console.error(error);
                document.getElementById(loadingId).innerHTML = "<span class='text-red-500 font-medium'>[Error] Gagal terhubung ke AI. Pastikan Langflow berjalan dan Flow ID benar.</span>";
            } finally {
                chatSubmit.disabled = false;
                chatInput.focus();
            }
        });

        function appendMessage(sender, text, id = '') {
            const time = new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
            let html = '';
            
            if (sender === 'user') {
                html = `
                <div class="flex flex-col gap-1 max-w-[85%] self-end mt-2">
                    <div class="bg-emerald-600 text-white p-3 rounded-2xl rounded-tr-sm text-sm shadow-sm">
                        ${text}
                    </div>
                    <span class="text-[10px] text-slate-400 self-end mr-1">${time}</span>
                </div>`;
            } else {
                html = `
                <div class="flex flex-col gap-1 max-w-[85%] self-start mt-2">
                    <div class="bg-white border border-slate-200 text-slate-700 p-3 rounded-2xl rounded-tl-sm text-sm shadow-sm" id="${id}">
                        ${text}
                    </div>
                    <span class="text-[10px] text-slate-400 ml-1">${time}</span>
                </div>`;
            }
            
            chatContainer.insertAdjacentHTML('beforeend', html);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        function formatAIResponse(text) {
            // Basic markdown formatting to HTML for bold and bullet points
            return text
                .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                .replace(/\*(.*?)\*/g, '<em>$1</em>')
                .replace(/\n/g, '<br>');
        }
    </script>
</body>
</html>
