# Business Requirements Document (BRD)  
**Sistem Manajemen Toko Sepatu**

## 1. Introduction  

### 1.1 Purpose of Document  
Dokumen ini adalah Business Requirement Document (BRD) untuk sistem manajemen toko sepatu. BRD ini menjelaskan alur kerja dan kebutuhan fungsional untuk pengelolaan data pelanggan, stok sepatu, pemesanan, dan transaksi pembelian.

### 1.2 Project Scope  
Sistem ini akan mencakup modul-modul berikut:  
- **Pelanggan**: Melakukan registrasi, update data, dan notifikasi status keanggotaan.  
- **Produk (Sepatu)**: Mengelola data sepatu, termasuk penambahan, penghapusan, pembaruan, dan pengecekan ketersediaan stok.  
- **Pemesanan Sepatu**: Mengelola pemesanan sepatu oleh pelanggan, termasuk pengecekan stok dan konfirmasi pemesanan.  
- **Transaksi Pembelian**: Mencatat transaksi pembelian sepatu, termasuk metode pembayaran dan status pengiriman.  

---

## 2. System Requirement  

### 2.1 Business Flow  

#### **Registrasi Pelanggan**:  
1. Pelanggan melakukan registrasi.  
2. Admin menerima notifikasi registrasi.  
3. Admin memverifikasi data pelanggan.  
4. Jika diterima, pelanggan menerima notifikasi dan dapat melanjutkan pemesanan. Jika ditolak, pelanggan menerima notifikasi penolakan.  

#### **Pemesanan Sepatu**:  
1. Pelanggan melihat daftar sepatu yang tersedia.  
2. Setelah memilih sepatu, pelanggan membuat pesanan, dan admin menerima notifikasi.  
3. Admin memverifikasi ketersediaan stok.  
   - Jika tersedia, pesanan dikonfirmasi, dan pelanggan menerima detail pembayaran.  
   - Jika stok habis, pesanan dibatalkan.  

#### **Manajemen Sepatu**:  
- Admin dapat memperbarui data sepatu, menambah, atau menghapus sepatu sesuai dengan kondisi inventaris.  

#### **Transaksi Pembelian**:  
1. Pelanggan menyelesaikan pembayaran.  
2. Admin mencatat pembayaran dan memproses pengiriman sepatu.  
3. Status transaksi diperbarui dan pelanggan menerima notifikasi pengiriman.  

---

## 3. Business Requirement  

### 3.1 Fungsional Requirement  

| No | Kebutuhan Modul/Doctype          | Status             |
|----|----------------------------------|--------------------|
| 1  | **Registrasi Pelanggan**         | Modul/doctype baru |
|    | - Insert                         |                    |
|    | - View                           |                    |
|    | - Update                         |                    |
|    | - Delete                         |                    |
| 2  | **Penerimaan/Notifikasi Status Keanggotaan** | Modul/doctype baru |
|    | - Ditolak                        |                    |
|    | - Diterima                       |                    |
| 3  | **Manajemen Sepatu**             | Modul/doctype baru |
|    | - Menambah Sepatu                |                    |
|    | - Menghapus Sepatu               |                    |
|    | - Update Data Sepatu             |                    |
| 4  | **Pengecekan Stok Sepatu**       | Modul/doctype baru |
|    | - Tersedia                       |                    |
|    | - Habis                          |                    |
| 5  | **Pemesanan Sepatu**             | Modul/doctype baru |
|    | - Pengecekan Stok                |                    |
|    | - Update Status Pemesanan        |                    |
| 6  | **Transaksi Pembelian**          | Modul/doctype baru |
|    | - Pembayaran                     |                    |
|    | - Status Pengiriman              |                    |

---

## 4. Approval  

| No. | Modul/Doctype       | Tingkat Approval                                                     |
|-----|---------------------|----------------------------------------------------------------------|
| 1   | **Registrasi Pelanggan** | Admin memverifikasi pelanggan baru dan menentukan status diterima atau ditolak. |
| 2   | **Pemesanan Sepatu**     | Admin memeriksa stok sepatu dan mengonfirmasi pemesanan jika stok tersedia.      |
| 3   | **Transaksi Pembelian**  | Admin mencatat pembayaran dan memproses pengiriman sepatu setelah pembayaran diterima. |

---

## 5. Analysis  

### 5.1 Kelebihan Sistem  
1. **Efisiensi Pengelolaan Data**:  
   Semua data pelanggan, produk, pemesanan, dan transaksi dapat dikelola secara terpusat dan mudah diakses.  
2. **Automasi Proses**:  
   Notifikasi otomatis untuk registrasi, status pemesanan, dan pengiriman mengurangi kesalahan manual dan meningkatkan pengalaman pelanggan.  
3. **Pemantauan Stok Real-Time**:  
   Admin dapat memantau ketersediaan sepatu secara langsung, sehingga dapat meminimalkan pesanan yang tidak terpenuhi.  

### 5.2 Tantangan  
1. **Validasi Data**:  
   Memastikan data pelanggan dan stok sepatu selalu akurat memerlukan integrasi sistem yang baik.  
2. **Skalabilitas Sistem**:  
   Sistem harus dirancang untuk menangani lonjakan pesanan, terutama pada periode promosi atau hari besar.  
3. **Keamanan Transaksi**:  
   Perlindungan data pelanggan dan informasi pembayaran menjadi prioritas utama.  

### 5.3 Rekomendasi  
1. Menggunakan sistem **backup otomatis** untuk menghindari kehilangan data.  
2. Mengimplementasikan fitur **enkripsi data** untuk melindungi informasi pelanggan.  
3. Menambahkan modul **laporan analitik** untuk membantu admin memahami pola penjualan dan kebutuhan stok.  
