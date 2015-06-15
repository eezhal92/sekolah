## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Contoh CRUD buat yang baru belajar Laravel

## Cara install 

* Menggunakan terminal atau command prompt, clone repo ini ke lokal dengan command `git clone <url>`, kemudian masuk ke direktori aplikasi. 
* Buat file `.env.php` atau `.env.local.php`, tergantung environment aplikasi. Kalau belum tahu, ke sini http://laravel.com/docs/4.2/configuration#environment-configuration
* Copy dan paste isi `.env.example.php` ke file tadi, kemudian rubah sesuai konfigurasi yang diinginkan. Jangan lupa buat databasenya.
* Setelah berhasil, jalankan command `composer install`
* Jalankan command `php artisan migrate --seed`
* Jalankan command `php artisan serve`
* Buka browser, ketik `http://localhost:8000` di address bar, kemudian hit enter!
