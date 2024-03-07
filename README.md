==========================

# LAPORAN PRAKTIKUM

# PEMROGRAMAN WEB LANJUT

# JOBSHEET – 3

==========================

## Nama : Hanief Mochsin

## Kelas : 2F

## Nim : 2241720181

==========================

--Buat project laravel PWL_POS

![alt text](image.png)

--Create database phpmyadmin PWL_POS

![alt text](image-1.png)

--Copy file .env.example menjadi .env

![alt text](image-2.png)

--Edit file .env

![alt text](image-3.png)

--Create file dan tabel migration memakai php artisan

![alt text](image-4.png)

--Mengedit file m_level

![alt text](image-5.png)
![alt text](image-6.png)

--Membuat migrasi table

![alt text](image-7.png)

--mengecek table yang masuk di phpmyadmin

![alt text](image-8.png)

--Buat table database dengan migration untuk table m_kategori yang sama-sama tidak
memiliki foreign key

![alt text](image-9.png)

--di migrasi ke phpmyadmin

![alt text](image-10.png)

--pengecekan ke phpmyadmin

![alt text](image-11.png)

--membuat create -m_user table

![alt text](image-12.png)

--edit file migration m_user tabel

![alt text](image-13.png)

--membuat dan mengedit file migration m_barang, t_penjualan, t_stok, t_penjualan_detail

![alt text](image-14.png)

![alt text](image-15.png)
![alt text](image-16.png)

--mengecek di localhost phpmyadmin

![alt text](image-17.png)

--membuat seeder LevelSeeder dengan php artisan

![alt text](image-18.png)

![alt text](image-19.png)

--seeding database ke table m_level

![alt text](image-20.png)
![alt text](image-21.png)

--membuat file user seeder

![alt text](image-22.png)

--seeding class user

![alt text](image-23.png)

--mengecek kolom table user di phpmyadmin

![alt text](image-24.png)

--seeder kategori, barang, stok, penjualan, detail penjualan
--
![alt text](image-25.png)
--
![alt text](image-26.png)
--
![alt text](image-27.png)
--
![alt text](image-28.png)
--
![alt text](image-29.png)
![alt text](image-30.png)

--insert data baru ke table m_level menggunakan controller

![alt text](image-31.png)
![alt text](image-32.png)

--update data baru ke table m_level menggunakan controller

![alt text](image-33.png) 
![alt text](image-34.png)

--menghapus data cus dari m_level

![alt text](image-35.png)
![alt text](image-36.png)

-- menampilkan data dari table m_level lewat views menggunakan controller

![alt text](image-37.png)

-- insert data table m_kategori

![alt text](image-38.png)

![alt text](image-39.png)

-- update data

![alt text](image-40.png)

--snack menjadi cemilan

![alt text](image-41.png)

--hapus data cemilan 

![alt text](image-42.png)

--kategori cemilan telah terhapus

![alt text](image-43.png)

--menampilkan data table kategori dari database

![alt text](image-44.png)

--menampilkan semua data di table user

![alt text](image-45.png)

--menambahkan beberapa data akan tetapi saat ditampilkan password tidak dimunculkan 

![alt text](image-46.png)

-- menambah data pelanggan

![alt text](image-47.png)

-- mengubah data pelanggan menjadi data pelanggan pertama

![alt text](image-48.png)

## TUGAS PERTANYAAN
### 1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?
### 2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?
### 3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? dan untuk apa saja file migrasi tersebut?
### 4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output dari fungsi tersebut?
### 5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut?
### 6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id'); ?
### 7. Pada migration, Fungsi ->unique() digunakan untuk apa?
### 8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id') ?
### 9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode program Hash::make('1234');?
### 10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa kegunaan dari tanda tanya (?) tersebut?
### 11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = 
### ‘m_user’; dan protected $primaryKey = ‘user_id’; ?
### 12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan

--jawab

-- 1. APP_KEY pada file .env Laravel merupakan kunci enkripsi yang digunakan untuk mengamankan data sensitif.

-- 2. APP_KEY bisa digenerate dengan menjalankan perintah `php artisan key:generate`.

-- 3. Secara default, Laravel memiliki satu file migrasi yang biasa digunakan untuk membuat tabel pengguna (users).

-- 4. Fungsi timestamps() digunakan untuk secara otomatis menyimpan waktu pembuatan dan pembaruan setiap entri dalam tabel.

-- 5. Fungsi $table->id() menghasilkan tipe data kolom auto increment yang bisa bertambah otomatis.

-- 6. Penggunaan $table->id() dan $table->id('level_id') menghasilkan hasil yang sama, yaitu kolom auto increment dengan nama level_id.

-- 7. Fungsi ->unique() digunakan untuk memastikan bahwa nilai dalam kolom tertentu adalah unik.

-- 8. Penggunaan $tabel->unsignedBigInteger('level_id') dan $tabel->id('level_id') berbeda karena yang pertama adalah tipe data unsigned big integer sedangkan yang kedua adalah pembuatan kolom auto-incrementing.

-- 9. Class Hash digunakan untuk mengenkripsi kata sandi. 

-- 10. Tanda tanya (?) pada query builder digunakan untuk menandai parameter yang akan diikuti oleh nilai, berguna untuk mencegah SQL injection.

-- 11. Penulisan kode protected $table = 'm_user'; dan protected $primaryKey = 'user_id'; digunakan untuk menentukan nama tabel dan primary key yang digunakan oleh model.

-- 12. Penggunaan Eloquent ORM lebih mudah dalam melakukan operasi CRUD karena abstract yang diberikan serta Query Builder dan DB Façade. Eloquent ORM menyediakan sintaks yang lebih dekat dengan bahasa pemrograman dan developer untuk berinteraksi dengan database menggunakan objek-objek model yang banyak.