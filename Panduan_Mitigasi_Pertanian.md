# PANDUAN MITIGASI HAMA, ANOMALI CUACA, DAN TANAH (PERTANIAN PRESISI)
**Referensi Otomatisasi AI Agro-Shield & Pengendalian Hama Terpadu (PHT)**

Dokumen ini merupakan pedoman *knowledge base* utama untuk merespons data sensor lahan secara preskriptif. Sistem AI harus menganalisis kombinasi metrik (Suhu, Kelembaban Udara, Kelembaban Tanah/Soil Moisture, dan pH Tanah) untuk menghasilkan rekomendasi yang akurat.

## 1. Analisis Metrik Anomali & Rekomendasi Solusi

### 1.1 Anomali Kekeringan Ekstrem (El Niño) & Penurunan pH
*Ini adalah skenario paling kritis yang sering terdeteksi oleh sensor (Status: WARNING).*
*   **Indikator Sensor:** 
    *   Suhu (Temperature) melonjak > 34°C.
    *   Kelembaban (Humidity) udara turun tajam < 45%.
    *   Kelembaban Tanah (Soil Moisture) mengering hingga < 25%.
    *   Tingkat pH (pH Level) turun menjadi asam (< 6.0).
*   **Dampak Fisiologis & Risiko Hama:**
    *   Kekeringan parah menyebabkan dehidrasi tanaman secara instan.
    *   Penurunan pH tanah yang ekstrem (asam) menyebabkan keracunan Aluminium (Al) dan Besi (Fe) pada akar, serta menghalangi penyerapan unsur hara (Nitrogen dan Fosfor).
    *   Hama penghisap sap (cairan tanaman) seperti Kutu Daun (Aphids), Thrips, dan Tungau Merah akan menyerang secara sporadis.
*   **SOLUSI PRESKRIPTIF (Tindakan Wajib AI):**
    1.  **Pengairan Darurat:** Segera aktifkan sistem irigasi tetes (*drip irrigation*) atau penggenangan berselang (AWD) secara otomatis untuk mengembalikan *Soil Moisture* ke angka minimal 40%.
    2.  **Koreksi pH Tanah:** Taburkan **Kapur Pertanian (Dolomit / CaMg(CO3)2)** di sekitar zona perakaran dengan dosis 1-2 ton per hektar untuk menetralkan pH kembali ke kisaran ideal (6.2 - 6.5).
    3.  **Pelindung Tanah:** Aplikasikan mulsa organik (jerami kering) untuk menekan penguapan air lebih lanjut akibat suhu ekstrem.
    4.  **Kontrol Hama:** Semprotkan pestisida nabati (minyak mimba/neem oil) di sore hari (setelah suhu turun di bawah 30°C) untuk mengusir thrips dan tungau.

### 1.2 Anomali Cuaca Basah / Kelembaban Tinggi (La Niña)
*   **Indikator Sensor:**
    *   Kelembaban (Humidity) konstan > 85%.
    *   Kelembaban Tanah (Soil Moisture) > 70% (tergenang).
*   **Dampak Fisiologis & Risiko Hama:**
    *   Kondisi basah dan minim sinar matahari memicu perkembangbiakan jamur secara masif.
    *   Rentan penyakit Hawar Daun Bakteri (Kresek), Antraknosa (Busuk Buah), dan serangan Wereng Batang Coklat (WBC).
*   **SOLUSI PRESKRIPTIF (Tindakan Wajib AI):**
    1.  Tingkatkan operasional pompa drainase untuk membuang genangan air dari lahan agar tanah bisa bernapas.
    2.  Aplikasikan fungisida berbahan aktif *Mancozeb* atau agen hayati *Trichoderma sp.* pada pagi hari.
    3.  Kurangi pemupukan yang mengandung Nitrogen (Urea) tinggi karena akan membuat batang tanaman berair dan mudah diserang jamur/wereng.

## 2. Parameter Ideal (Status: NORMAL)
Untuk menjaga lahan tetap stabil, pastikan sensor membaca rentang nilai berikut:
*   **Suhu (Temperature):** 28°C - 32°C.
*   **Kelembaban (Humidity):** 55% - 66%.
*   **Kelembaban Tanah (Soil Moisture):** 35% - 50%.
*   **pH Tanah (pH Level):** 6.2 - 6.8.

Jika sistem mendeteksi angka di dalam rentang ini, AI cukup memberikan laporan: "Lahan dalam kondisi optimal, tidak ada tindakan mitigasi yang diperlukan."

## 3. Protokol Tanggap Darurat & Eskalasi
1. Jika status peringatan (*WARNING*) dari sensor tidak kembali normal setelah 4 jam sejak solusi diterapkan, AI harus mengirimkan notifikasi *Eskalasi Manual* ke Petugas Penyuluh Lapangan (PPL) setempat.
2. Setiap aplikasi *treatment* (Dolomit, irigasi, atau pestisida) wajib dicatat dalam *Log Treatment* di Dashboard Agro-Shield.

---
*Dokumen ini divalidasi oleh Tim Agronomi Agro-Shield untuk digunakan eksklusif sebagai Knowledge Base sistem RAG (Retrieval-Augmented Generation) IBM Watsonx AI.*
