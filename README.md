==========================

# LAPORAN PRAKTIKUM

# PEMROGRAMAN WEB LANJUT

# JOBSHEET – 4

==========================

## Nama : Hanief Mochsin

## Kelas : 2F

## Nim : 2241720181

==========================

## PRAKTIKUM

--mendaftarkan atribut m_user ke database

![alt text](image.png)

-- yang terjadi adalah menambahkan data baru lagi yaitu manager 3

![alt text](image-1.png)

--retrieve data dengan metode find

![alt text](image-2.png)

--mengambil data dengan level id 1 diambil yang pertama

![alt text](image-3.png)\

--hasilnya sama seperti sebelumnya akan tetapi method firt nya digabung dengan where

![alt text](image-4.png)

--hasilnya akan menampilkan retrieve data yang diambil. apabila data yang diambil tidak sesuai atau tidak ada di kolom tabel maka akan menampilkan abort(404)

![alt text](image-5.png)

--berikut hasil error 404 apabila menginputkan data yang salah ataau tidak ada di kolom tabel

![alt text](image-6.png)

--penggunaan findOrFail

![alt text](image-7.png)

--hasil apabila retrieve data fail

![alt text](image-8.png)

--ketika melakukan count tampilah browser hanya menampilkan sebuah attention di usercontroller baris 15

![alt text](image-9.png)

--mengubah tampilan view agar dapat menampilkan count dari jumlah pengguna berdasarkan level id tabel user

![alt text](image-10.png)

--disini menggunakan method firstOrCreate maka apabila data ditemukan maka akan ditampilkan apabila tidak ketemu maka akan di inssert ke dalam tabel, berhubung disini data nya ketemu maka hasilnya akan ditampilkan ke web dan tidak menambahkan data apapun ke tabel

![alt text](image-11.png)

--disini ditampilkan manager dua dua yang sebelumnya tidak ada di dalam kolom tabel maka akan di tambahkan ke dalamnya

![alt text](image-12.png)

![alt text](image-13.png)

--disini menggunakan method firstOrNew sedangkan data yang diambil sudah tersedia di tabel maka hanya menampilkan data yang diambil saja

![alt text](image-14.png)

--sama seperti sebelumnya pada method ini menampilkan data manager 33 yang sebelumnya tidak ada di kolom tabel maka sekaligus ditambahkan ke dalam tabel user di database

![alt text](image-15.png)
![alt text](image-16.png)

--lalu agar method create dan new tadi bisa tersimpan maka digunakan lah method save agar tersimpan dengan baik di dalam database.

![alt text](image-17.png)

--pada tampilan web hanya mengembalikan code dump pada percobaan praktikum yaitu mengembalikan nilai method isdirty yang menghasilkan false

![alt text](image-18.png)

--berikut ketika menampilkan data manager55 yang sebelum nya tidak ada akan ditambahkan dengan create melalui isdirty dan isclean

![alt text](image-19.png)

--pada code dump yang diberikan mengembalikan nilai false dari nama dan username karena username tidak berubah

![alt text](image-20.png)

![alt text](image-21.png)

--membuat halaman CRUD

![alt text](image-22.png)

--menampilkan fitur tambah user pada view user

![alt text](image-23.png)

--ketika menjalankan di browser

![alt text](image-24.png)

--dan klik tombol tambah, lalu setelah menginputkan form dan klik simpan maka akan langsung tersimpan di database

![alt text](image-25.png)
![alt text](image-26.png)

--lalu mengubah salah atu data diatas

![alt text](image-27.png)

--klik tombol ubah pada salah satu data

![alt text](image-28.png)

--lalu ubah sesuai keinginan kita

![alt text](image-29.png)

--isi form untuk mengubahnya

![alt text](image-30.png)

--setelah diubah

![alt text](image-31.png)

--lalu fitur untuk menghapus salah satu data, contohnya managerku123 akan dihapus, maka didalam kolom tabel akan terhapus

![alt text](image-32.png)

--menggunakan method belongsto untuk menampilkan seluruh data kolom tabel user

![alt text](image-33.png)
