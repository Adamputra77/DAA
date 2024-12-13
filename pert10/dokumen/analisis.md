# Solusi Penyimpanan Data Produk

## 1. Definisi Struktur Data
Produk di toko online harus memiliki atribut penting untuk mendukung pengelolaan dan pencarian yang efisien. Berikut adalah struktur data yang dirancang untuk kebutuhan tersebut:

### Atribut Utama:
1. **Nama Produk**  
   - Tipe Data: `VARCHAR` (Laravel: `string`)
   - Contoh: "Adidas", "Nike"
   - Tujuan: Menyimpan nama unik yang mudah diidentifikasi.

2. **Harga Produk**  
   - Tipe Data: `INTEGER` (Laravel: `integer`)
   - Contoh: 1000, 999
   - Tujuan: Menyimpan harga dalam satuan mata uang tanpa desimal untuk mempermudah perhitungan.

3. **Kategori Produk**  
   - Tipe Data: `ENUM`
   - Pilihan Nilai: "sepatu", "baju", "celana"
   - Tujuan: Membatasi kategori agar data tetap konsisten.

---

## 2. Rencana Implementasi
Langkah-langkah berikut akan memastikan data produk terorganisasi dengan baik dan siap digunakan dalam aplikasi e-commerce.

### a. Migration
Migration akan digunakan untuk membuat tabel `products`. Kolom yang disiapkan adalah:

- **id**: Primary key otomatis.
- **name**: Menyimpan nama produk (`string`).
- **price**: Harga produk (`integer`).
- **category**: Kategori produk dengan batasan nilai ("sepatu", "baju", "celana").
- **timestamps**: Kolom bawaan Laravel untuk mencatat waktu pembuatan dan pembaruan data.

### b. Seeder
Seeder digunakan untuk mengisi tabel dengan data awal. Berikut adalah contoh data yang akan dimasukkan:

| Nama Produk | Harga | Kategori |
|-------------|-------|----------|
| Vans        | 100000| Sepatu   |
| Converse    | 150000| Sepatu   |
| Rucas       | 500000| Celana   |
| H&M         | 100000| Baju     |

### c. Model
Model `Product` akan digunakan untuk merepresentasikan tabel `products`.
- **Mass Assignment Protection**: Gunakan properti `fillable` untuk kolom:
  - `name`
  - `price`
  - `category`

---

## 3. Langkah Teknis
Berikut adalah langkah teknis untuk implementasi:

1. **Migration**  
   Gunakan Artisan untuk membuat migration:
   ```bash
   php artisan make:migration create_products_table
   ```
   Dalam file migration, definisikan struktur tabel:
   ```php
   Schema::create('products', function (Blueprint $table) {
       $table->id();
       $table->string('name');
       $table->integer('price');
       $table->enum('category', ['sepatu', 'baju', 'celana']);
       $table->timestamps();
   });
   ```
   Jalankan perintah:
   ```bash
   php artisan migrate
   ```

2. **Seeder**  
   Buat seeder untuk mengisi data awal:
   ```bash
   php artisan make:seeder ProductSeeder
   ```
   Tambahkan data ke file `ProductSeeder`:
   ```php
   DB::table('products')->insert([
       ['name' => 'Vans', 'price' => 100000, 'category' => 'sepatu'],
       ['name' => 'Converse', 'price' => 150000, 'category' => 'sepatu'],
       ['name' => 'Rucas', 'price' => 500000, 'category' => 'celana'],
       ['name' => 'H&M', 'price' => 100000, 'category' => 'baju'],
   ]);
   ```
   Jalankan seeder:
   ```bash
   php artisan db:seed --class=ProductSeeder
   ```

3. **Model**  
   Buat model `Product` dengan perintah:
   ```bash
   php artisan make:model Product
   ```
   Tambahkan properti `fillable` ke file model:
   ```php
   protected $fillable = ['name', 'price', 'category'];
   ```

---

Dengan struktur ini, data produk dapat dengan mudah diakses, dimodifikasi, dan dikelola untuk memenuhi kebutuhan toko online Anda.

