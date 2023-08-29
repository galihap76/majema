## Manajemen Mahasiswa 📋 
Majema singkatan dari manajemen mahasiswa merupakan aplikasi web yang di bangun dengan framework laravel 9. Tujuan aplikasi web ini adalah untuk memanajemen data mahasiswa dalam sebuah kampus dan saya membangun ini sebagai contekan aja. Sebagai tambahan, aplikasi web ini mendukung komponen livewire memungkinkan aplikasi berinteraksi dengan antarmuka modern. Aplikasi web ini hanya memiliki satu user saja untuk login yaitu administrator.

## Fitur Auth App 🔐
- Register
- Login
- Lupa password
- Log out
- Remember me

## Fitur Utama App 📱
- Menghitung total semua mahasiswa
- Menghitung total mahasiswa aktif
- Menghitung total mahasiswa tidak aktif
- Tampilkan data mahasiswa
- Tambah data mahasiswa
- Edit data mahasiswa
- Delete data mahasiswa
- Search data mahasiswa
- Tampilkan mahasiswa yang aktif
- Tampilkan mahasiswa yang tidak aktif

## Install⚙️

Jika Anda ingin menggunakan aplikasi web ini berikut langkah langkah nya :

1. Lakukan git clone
```
git clone https://github.com/galihap76/majema.git
```

2. Masuk ke direktori majema
```
cd majema
```

3. Install package bawahan laravel
```
composer install
```

4. Install livewire
```
composer require livewire/livewire
```

5. Rename .env.example ke .env
```
copy .env.example .env
```

6. Generate key
```
php artisan key:generate
```

7. Open .env lalu ubah konfigurasi database sesuai yang ingin dipakai
```
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

8. Jalankan migration dan seeder
```
php artisan migrate --seed
```

9. Run
```
php artisan serve
```
 
## Tangkapan Layar 📸
![Screenshot (567)](https://github.com/galihap76/majema/assets/83481679/3a62cabf-14b0-43ad-984f-42187ea4cd36)

![Screenshot (566)](https://github.com/galihap76/majema/assets/83481679/0b813083-940c-4ef4-95b8-26b894120799)

![Screenshot (568)](https://github.com/galihap76/majema/assets/83481679/abd144e9-338d-4761-98c3-839a0f13088f)

![Screenshot (569)](https://github.com/galihap76/majema/assets/83481679/c3ca93b9-85c2-456d-94a3-ea6f5f77b2ee)

![Screenshot (570)](https://github.com/galihap76/majema/assets/83481679/a85911cb-2144-4fd1-9ff7-7a15c333ca23)

![Screenshot (571)](https://github.com/galihap76/majema/assets/83481679/4b078a52-f381-44dc-8303-4d8ec5d1f57f)

![Screenshot (572)](https://github.com/galihap76/majema/assets/83481679/7deeefab-19eb-4f5f-9eb4-a404873f0741)








 
