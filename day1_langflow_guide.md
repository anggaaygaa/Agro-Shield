# Panduan Hari 1: Setup Langflow & watsonx

Dibuat pada: 30 September 2026, 22:15 WIB
Status: Menunggu eksekusi setelah IDE dibuka kembali.

## 🧰 FASE 1: Persiapan Aset
- [ ] **PDF Mitigasi**: Siapkan file PDF panduan pertanian presisi/penanganan hama (5-10 halaman).
- [ ] **Akun IBM Cloud**: Siapkan `API Key` dari IBM Cloud.
- [ ] **Project ID watsonx**: Buat project di watsonx.ai dan catat `Project ID`-nya.

## ⚙️ FASE 2: Instalasi Langflow
Buka terminal/PowerShell di dalam folder Agro-Shield dan jalankan:
1. `python -m pip install langflow`
2. `python -m langflow run`
3. Buka browser di `http://127.0.0.1:7860`

## 🚀 FASE 3: Merakit Pipeline di Langflow (Action Plan)
Setelah Langflow terbuka, kita akan merakit *nodes* berikut:
1. **Document Loader Node**: Masukkan PDF Mitigasi.
2. **Text Splitter Node**: Pecah PDF menjadi chunk.
3. **Embeddings Node**: Ubah teks menjadi vektor.
4. **Vector Store Node**: Simpan vektor (FAISS/ChromaDB lokal).
5. **Prompt Template Node**: Set instruksi persona "IBM Bob Assistant" untuk merespons anomali.
6. **LLM Node (watsonx)**: Masukkan API Key dan pilih model Granite.

---
*Catatan Sistem: Environment lokal telah di-scan dan dipastikan siap (PHP 8.4, Python 3.13, Docker 29.6). UI Dashboard dan Login (Mock Auth & Mock Data) di dalam `resources/views` sudah tervalidasi memenuhi syarat Hackathon.*
