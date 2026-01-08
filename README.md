# Sistem Informasi Perpustakaan Berbasis Web

## Deskripsi
Sistem Informasi Perpustakaan adalah aplikasi web sederhana yang dibuat untuk memenuhi
tugas UAS Pemrograman Web.  
Aplikasi ini dibangun menggunakan PHP dengan konsep Object Oriented Programming (OOP),
modularisasi, serta routing menggunakan file `.htaccess`.

Aplikasi mendukung dua role pengguna, yaitu **admin** dan **user**, dengan fitur CRUD,
pencarian data, pagination, serta tampilan responsive menggunakan framework CSS Bootstrap.

---

## Teknologi yang Digunakan
- PHP 7
- MySQL
- Bootstrap 5 (Framework CSS)
- HTML & CSS
- Apache (XAMPP)

---

## Fitur Aplikasi

### Admin
- Login
- Kelola data kategori (Create, Read, Delete)
- Kelola data buku (Create, Read, Delete)
- Pencarian data buku
- Pagination data buku
- Logout

### User
- Login
- Melihat daftar buku
- Pencarian buku
- Logout

---

## Konsep yang Diterapkan
- Object Oriented Programming (OOP)
- Routing menggunakan `.htaccess`
- Arsitektur MVC sederhana (Model, View, Controller)
- Responsive design (mobile-first)
- Custom CSS dengan Bootstrap

---

## Struktur Folder Project
    perpustakaan/
    │
    ├── app/
    │ ├── controllers/
    │ ├── models/
    │ └── views/
    │ ├── admin/
    │ ├── auth/
    │ └── layout/
    │
    ├── core/
    ├── public/
    │ └── css/
    │
    ├── .htaccess
    ├── database.sql
    └── README.md

---

## Cara Menjalankan Aplikasi
1. Install XAMPP dan jalankan Apache & MySQL
2. Clone atau download repository project
3. Letakkan folder project ke dalam direktori `htdocs`
4. Buat database dengan nama `db_perpustakaan`
5. Import file `database.sql` ke database
6. Akses aplikasi melalui browser:
   http://localhost/perpustakaan

---

## Akun Login
### Admin
- Email: `admin@gmail.com`
- Password: `123456`

---

## Proses Pembuatan Aplikasi

### Pembuatan Database
Proses pembuatan database dan tabel di phpMyAdmin.
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/ee4064e1-5dc6-4029-a9c8-c594e0c05fa0" />


---

### Struktur Folder Project
Struktur folder project pada Visual Studio Code.
<img width="466" height="770" alt="image" src="https://github.com/user-attachments/assets/b8cfa847-c0dc-46cf-bbf2-4db1f7fd02c0" />


---

### Implementasi Routing (.htaccess)
Konfigurasi routing menggunakan file `.htaccess`.
`perpustakaan/.htaccess`
<img width="537" height="193" alt="image" src="https://github.com/user-attachments/assets/c851cc5b-9a7f-4280-a2b6-8d36665d2602" />
`perpustakaan/public/.htaccess`
<img width="593" height="218" alt="image" src="https://github.com/user-attachments/assets/01cf8fab-b94d-4a41-9928-34fcbdda54b9" />


---

### Halaman Login
Tampilan halaman login aplikasi.

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/932b7e32-ae4a-4cb4-8bc5-cb8b490c7b2f" />


---

### Dashboard Admin
Dashboard admin setelah login berhasil.

<img width="960" height="540" alt="dashboard admin" src="https://github.com/user-attachments/assets/150d7723-4a62-472d-b67f-b0c49652e118" />


---

### CRUD Kategori
Halaman pengelolaan data kategori (tambah & hapus).

<img width="960" height="540" alt="data kategori" src="https://github.com/user-attachments/assets/cc02f895-b5df-462b-857b-3456d475915d" />


---

### CRUD Buku
Halaman pengelolaan data buku beserta relasi kategori.

<img width="960" height="540" alt="data buku" src="https://github.com/user-attachments/assets/ed9c4fe9-8436-4dd4-aeed-f5b92e955a56" />


---

### Pencarian Data Buku
Screenshot fitur pencarian buku berdasarkan judul atau penulis.

<img width="959" height="486" alt="css1" src="https://github.com/user-attachments/assets/7339679c-f1bc-4748-85c7-626d0ae1ef00" />
<img width="959" height="301" alt="css2" src="https://github.com/user-attachments/assets/935e81f9-90f3-45a0-afc4-329bfa4f5ee8" />


---

### Pagination Data Buku
Pagination data buku (halaman 1, 2, dst).

<img width="960" height="540" alt="data buku 2" src="https://github.com/user-attachments/assets/cca5bd5e-56b2-491e-bcde-686b61912969" />


---

## Catatan
- Data yang digunakan dalam aplikasi ini merupakan **data dummy**
untuk keperluan simulasi dan pembelajaran.
- Aplikasi dibuat sebagai bagian dari tugas UAS Pemrograman Web.

---

Dengan dibuatnya aplikasi ini, diharapkan dapat membantu memahami
penerapan PHP OOP, routing, CRUD, serta penggunaan framework CSS
dalam pengembangan aplikasi web sederhana.

