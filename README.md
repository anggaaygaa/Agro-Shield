# Agro-Shield 🛡️🌱
**Prescriptive AI Analytics for Smart Farming**

![Agro-Shield Concept](https://img.shields.io/badge/Status-Prototype_Stage_1-brightgreen)
![Tech Stack](https://img.shields.io/badge/Tech-Langflow_|_Gemini_|_Laravel-blue)

## 📌 Deskripsi Proyek
**Agro-Shield** adalah sebuah platform analitik preskriptif berbasis *Retrieval-Augmented Generation* (RAG) yang dirancang untuk memitigasi krisis cuaca ekstrem dan anomali tanah pada lahan pertanian. 

Tidak seperti *dashboard smart farming* konvensional yang hanya menampilkan data deskriptif (misal: "Suhu 37°C") atau peringatan dini, Agro-Shield bertindak layaknya Pakar Agronomi Senior. Ketika mendeteksi anomali (seperti cuaca ekstrem atau pH tanah yang asam), sistem langsung memberikan **Resep Penanganan (Preskriptif)** yang konkret, seperti dosis pupuk, kapur, atau volume irigasi yang dibutuhkan.

## 🛠️ Tech Stack & Arsitektur (Technical Diagram)
Agro-Shield dibangun dengan arsitektur yang modern dan *hardware-agnostic*:
1. **AI Logic Core (Langflow):** Menggunakan *pipeline* RAG untuk memastikan AI bebas dari halusinasi. AI hanya mengambil data mitigasi dari dokumen terverifikasi (`Panduan_Mitigasi_Pertanian.md`).
2. **Language Model:** Google Gemini / IBM watsonx Granite (LLM Processing).
3. **Frontend Dashboard:** Laravel Blade, Tailwind CSS, & Chart.js (Untuk visualisasi data sensor yang interaktif).

*(Catatan untuk Juri: Silakan merujuk pada video demo dan screenshot kanvas Langflow kami untuk melihat alur pipeline RAG secara visual).*

## 💡 Business Model
Sistem ini dirancang dengan pendekatan **B2B (Business-to-Business)** dan **Freemium**:
*   **Tier Basic (Gratis):** Petani dapat memasukkan data sensor/kondisi tanah secara manual ke dalam chat untuk mendapatkan saran mitigasi.
*   **Tier Premium (B2B/Subscription):** Integrasi penuh API dengan ekosistem sensor IoT yang sudah dimiliki oleh perusahaan agrikultur atau koperasi tani, otomatisasi irigasi, dan analitik multi-lahan.
*   **Monetisasi Data (Jangka Panjang):** Penjualan agregat *dataset* anomali lahan ke perusahaan asuransi pertanian atau produsen pupuk.

## 🚀 Cara Menjalankan Prototype
1. **Jalankan Langflow:** Pastikan *virtual environment* aktif dan jalankan perintah `langflow run`.
2. **Setup RAG:** Muat dokumen `Panduan_Mitigasi_Pertanian.md` ke dalam komponen File Loader di Langflow.
3. **Uji Coba AI:** Ketikkan anomali lingkungan di Playground Chat (contoh: *"Suhu udara 35 derajat, dan pH tanah berada di angka 4. Tolong berikan solusi."*).
4. **Visualisasi:** Buka file `dashboard.blade.php` untuk melihat visualisasi antarmuka aplikasi monitoring lahan.

---
*Dibuat untuk Hacktiv8 x IBM National AI Hackathon 2026*
