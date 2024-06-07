## README: Aplikasi Web Somno

### Gambaran Umum
Somno adalah platform AI berbasis web yang memanfaatkan machine learning untuk menganalisis data tidur pengguna dan memberikan diagnosis gangguan tidur yang akurat. Website ini juga menawarkan rekomendasi tindak lanjut dan konten edukatif seperti artikel untuk membantu pengguna memahami dan mengatasi masalah tidur mereka.

### Teknologi yang Digunakan
- **Framework Backend**: Flask
- **Framework Frontend**: Laravel
- **Stilisasi**: Tailwind CSS, Flowbite
- **Kontainerisasi**: Docker

### Prasyarat
Sebelum mengatur proyek ini, pastikan Anda telah menginstal:
- Docker
- Docker Compose
- Composer (untuk Laravel)
- Python dan pip (untuk Flask)

### Instalasi

#### 1. Clone Repository
```bash
git clone https://github.com/yourusername/somno.git
cd somno
```

#### 2. Setup Backend (Flask)
```bash
cd backend
pip install -r requirements.txt
```

#### 3. Setup Frontend (Laravel)
```bash
cd ../frontend
composer install
```

#### 4. Build dan Jalankan Kontainer
```bash
docker-compose up --build
```
Perintah ini akan membangun dan menjalankan kontainer Docker untuk layanan backend dan frontend.

### Penggunaan
Setelah kontainer berjalan, Anda dapat mengakses aplikasi di `http://localhost`.

#### Mengakses Frontend
Buka browser Anda dan arahkan ke `http://localhost` untuk mengakses aplikasi frontend Laravel.

#### Mengakses Backend
API backend Flask dapat diakses di `http://localhost:5000`.

### Pengembangan Frontend
Untuk bekerja pada frontend Laravel:
```bash
cd frontend
php artisan serve
```
Perintah ini akan memulai server pengembangan dengan live reloading.

### Pengembangan Backend
Untuk bekerja pada backend Flask:
```bash
cd backend
flask run
```
Perintah ini akan memulai server pengembangan Flask.

### Styling dengan Tailwind CSS dan Flowbite
Tailwind CSS dan Flowbite digunakan untuk stilisasi dan komponen UI. Untuk menyesuaikan gaya, Anda dapat mengedit file CSS dan template yang ada di dalam folder `resources`.

### Menjalankan Tes
Untuk menjalankan tes pada frontend Laravel:
```bash
cd frontend
php artisan test
```

Untuk menjalankan tes pada backend Flask:
```bash
cd backend
pytest
```

### Konfigurasi Tambahan

#### Migrasi Database (Laravel)
Untuk menjalankan migrasi database untuk aplikasi Laravel:
```bash
cd frontend
php artisan migrate
```

#### Mengelola Kontainer Docker
Untuk menghentikan kontainer Docker:
```bash
docker-compose down
```

Untuk membangun ulang kontainer Docker setelah membuat perubahan:
```bash
docker-compose up --build
```

---

### Anggota Kelompok GitHub:
- Ade Pertiwi
- Aprodhita Nanda
- Sri Hidayanti
- Jonathan Wilbert
- Stasia Olfiani

### Informasi Tambahan
Proyek ini adalah final project dari program Kampus Merdeka Studi Independen Skilvul dan IBM yaitu IBM Skillsbuild For AI & Cybersecurity.