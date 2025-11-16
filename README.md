Sistem Manajemen Kontak Sederhana (PHP + Session)
1. Deskripsi Singkat

Project ini merupakan Tugas Akhir Praktikum Pemrograman Web – Modul 4 yang berfokus pada penggunaan PHP, Form Handling, Validasi, dan Session.
Aplikasi ini dibuat sebagai sistem manajemen kontak sederhana yang memungkinkan user untuk:

Login ke sistem

Menambahkan kontak baru

Melihat daftar kontak

Mengedit kontak

Menghapus kontak

Semua data disimpan menggunakan Session, tanpa database

Tujuan project ini adalah menerapkan konsep PHP dasar, manipulasi form, serta manajemen session sesuai modul praktikum.

2. Fitur Utama
✅ 1. Login Menggunakan Session

User harus login terlebih dahulu untuk bisa mengakses sistem.
Akun default:

Username: admin

Password: 123456

Setelah login, session akan menyimpan status login user.

✅ 2. Tambah Kontak

Terdapat form untuk menambahkan data kontak dengan validasi:

Nama tidak boleh kosong

Email harus valid

Nomor telepon hanya boleh angka

✅ 3. Daftar Kontak

Menampilkan semua kontak yang sudah disimpan dalam bentuk tabel.

✅ 4. Edit Kontak

User dapat mengubah data kontak yang sebelumnya sudah dimasukkan.

✅ 5. Hapus Kontak

Kontak yang tidak diperlukan lagi dapat dihapus.

✅ 6. Logout

Mengakhiri session user dan kembali ke halaman login.

3. Teknologi yang Digunakan

PHP Native

HTML

CSS (sedikit)

Session Storage (tanpa database)

Laragon/XAMPP sebagai server

4. Struktur Folder Project
contact-app/
│
├── index.php          // Login
├── dashboard.php      // Daftar kontak
├── add.php            // Tambah kontak
├── edit.php           // Edit kontak
├── delete.php         // Hapus kontak
├── logout.php         // Logout session
└── style.css          // Optional styling

5. Cara Menjalankan Aplikasi

Clone / download repository

Pindahkan folder ke direktori server, contoh:

D:\laragon\www\contactapp


Buka di browser:

http://localhost/contactapp/


Login menggunakan akun default

Aplikasi siap digunakan

6. Status Pengembangan

Project ini dibuat khusus untuk keperluan praktikum sehingga fitur-fitur yang digunakan mengikuti modul.
Tidak menggunakan database untuk menjaga kesederhanaan dan agar sesuai instruksi tugas.

7. Pembuat

Ary Nanda Nanda
Praktikum Pemrograman Web – Universitas Lampung
