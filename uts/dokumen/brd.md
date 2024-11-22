# Business Requirements Document (BRD) untuk Sistem Toko Sepatu

---

## 1. Pendahuluan

### 1.1. Latar Belakang
Sistem ini bertujuan untuk membantu pengelolaan toko sepatu dengan fitur manajemen produk, pelanggan, transaksi, serta peran pengguna. Sistem dibangun dengan framework Laravel dan menggunakan paket **Spatie Role Permission** untuk pengaturan hak akses.

### 1.2. Tujuan
1. Memudahkan pengelolaan data sepatu, pelanggan, dan transaksi.
2. Memastikan keamanan data dengan peran berbasis akses (RBAC).
3. Memberikan laporan transaksi secara real-time.

### 1.3. Ruang Lingkup
Sistem akan melayani tiga jenis pengguna:
- **Admin**: Mengelola seluruh data, termasuk sepatu, pelanggan, dan transaksi.
- **Penjual**: Melihat dan memanipulasi data transaksi terkait.
- **Pembeli**: Melihat transaksi miliknya dan detail produk yang tersedia.

---

## 2. Kebutuhan Bisnis

### 2.1. Fitur Utama
1. **Manajemen Produk (Toko Sepatu):**
   - Menambahkan, mengedit, dan menghapus data sepatu.
   - Informasi sepatu mencakup: *Tipe, Ukuran, Harga*.

2. **Manajemen Pelanggan:**
   - Menambahkan, mengedit, dan menghapus data pelanggan.
   - Informasi pelanggan mencakup: *Nama, Alamat, Telepon*.

3. **Manajemen Transaksi:**
   - Menambahkan data transaksi berdasarkan pelanggan dan sepatu.
   - Menghitung total harga berdasarkan jumlah sepatu yang dibeli.

4. **Hak Akses dan Peran:**
   - **Admin**: Mengelola semua data.
   - **Penjual**: Mengelola transaksi miliknya dan melihat daftar pelanggan.
   - **Pembeli**: Melihat produk dan riwayat transaksi miliknya.

### 2.2. Hak Akses
| Peran      | Hak Akses                                                    |
|------------|-------------------------------------------------------------|
| Admin      | Semua akses.                                                |
| Penjual    | Lihat/mengelola transaksi, lihat pelanggan.                 |
| Pembeli    | Lihat daftar produk, riwayat transaksi.                     |

---

## 3. Desain Data

### 3.1. Tabel
1. **Tabel `toko_sepatus`**: Menyimpan data sepatu.
   - Kolom: `id`, `Tipe`, `Size`, `Harga`, `created_at`, `updated_at`.

2. **Tabel `pelanggans`**: Menyimpan data pelanggan.
   - Kolom: `id`, `Nama`, `Alamat`, `Telepon`, `created_at`, `updated_at`.

3. **Tabel `transaksis`**: Menyimpan data transaksi.
   - Kolom: `id`, `pelanggan_id`, `sepatu_id`, `Jumlah`, `Total_Harga`, `created_at`, `updated_at`.

---

## 4. Proses Utama

### 4.1. Proses Transaksi
1. Admin atau Penjual memilih pelanggan.
2. Pilih sepatu dari daftar.
3. Masukkan jumlah sepatu yang ingin dibeli.
4. Sistem menghitung total harga otomatis.
5. Data disimpan di tabel `transaksis`.

### 4.2. Proses Role dan Permission
1. Admin membuat pengguna baru.
2. Memberikan peran (**Admin, Penjual, Pembeli**).
3. Pengguna baru dapat mengakses fitur sesuai dengan peran yang diberikan.

---

## 5. Wireframe
1. **Halaman Produk (Toko Sepatu):**
   - Menampilkan daftar produk dengan aksi tambah, edit, dan hapus.
2. **Halaman Pelanggan:**
   - Menampilkan daftar pelanggan dengan aksi tambah, edit, dan hapus.
3. **Halaman Transaksi:**
   - Menampilkan riwayat transaksi berdasarkan pengguna.
   - Aksi tambah transaksi.

---

## 6. Non-Functional Requirements
1. **Keamanan**: Sistem harus menggunakan autentikasi berbasis role.
2. **Kinerja**: Sistem harus mendukung setidaknya 100 pengguna aktif secara bersamaan.
3. **Portabilitas**: Sistem berbasis web, dapat diakses di perangkat desktop dan mobile.

---

## 7. Timeline
| Aktivitas                | Durasi       | Tanggal Mulai | Tanggal Selesai |
|--------------------------|--------------|---------------|-----------------|
| Perancangan Database     | 2 hari       | 23 Nov 2024   | 25 Nov 2024     |
| Pengembangan Backend     | 7 hari       | 26 Nov 2024   | 3 Des 2024      |
| Pengembangan Frontend    | 5 hari       | 4 Des 2024    | 9 Des 2024      |
| Pengujian                | 3 hari       | 10 Des 2024   | 12 Des 2024     |
| Deployment               | 1 hari       | 13 Des 2024   | 13 Des 2024     |

---

BRD ini dapat dijadikan pedoman untuk pengembangan sistem toko sepatu. Jika ada pertanyaan atau perubahan kebutuhan, silakan disampaikan.
