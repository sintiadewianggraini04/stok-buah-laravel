FITUR

Menampilkan daftar buah (Read)
Menambahkan data buah (Create)
Mengedit data buah (Update)
Menghapus data buah (Delete)

Instalasi

Clone project:
git clone https://github.com/sintiadewianggraini04/laravel-buah-project.git
cd laravel-buah-project

Install dependency:
composer install

Copy file .env:
cp .env.example .env

Setting database di .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=toko_buah
DB_USERNAME=root
DB_PASSWORD=

Generate key:
php artisan key:generate

Migrasi database:
php artisan migrate

>Menjalankan Aplikasi
php artisan serve

Akses di browser:

http://127.0.0.1:8000/buah