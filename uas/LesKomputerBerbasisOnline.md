### Analisis Sistem Manajemen Les Komputer Berbasis Online Berbasis Laravel, Docker, dan MySQL

## 1. Latar Belakang

**Pendidikan** dan **pengembangan diri** adalah dua aspek penting dalam kehidupan seseorang. Pendidikan tidak hanya terbatas pada lingkungan formal seperti sekolah atau universitas, tetapi juga mencakup pembelajaran informal dan non-formal. **Pengembangan diri** adalah proses terus-menerus untuk meningkatkan kemampuan, pengetahuan, dan kualitas hidup seseorang. Ini melibatkan refleksi diri, pembelajaran, dan penerapan keterampilan baru untuk mencapai potensi penuh.

Dalam era digital ini, keterampilan komputer menjadi sangat penting. **Les komputer berbasis online** adalah platform pembelajaran yang memungkinkan siswa untuk mempelajari keterampilan komputer melalui internet. Platform ini dapat mencakup berbagai topik, mulai dari dasar-dasar komputer hingga pemrograman lanjutan. Dengan les komputer berbasis online, siswa dapat belajar kapan saja dan di mana saja, sehingga meningkatkan aksesibilitas dan fleksibilitas pendidikan.

## 2. Identifikasi Masalah

Berdasarkan latar belakang yang telah dijelaskan, beberapa permasalahan utama yang diidentifikasi dalam studi ini adalah:

1. Kurangnya sistem terstruktur dalam penyediaan les komputer berbasis online.
2. Belum adanya sistem yang dapat mengelompokkan siswa berdasarkan tingkat kemampuan dan kebutuhan belajar.
3. Kurangnya pemanfaatan teknologi dalam pemantauan dan evaluasi kemajuan siswa secara real-time.
4. Belum adanya sistem manajemen waktu yang optimal dalam pengaturan jadwal belajar dan ujian.
5. Kurangnya transparansi dalam penilaian dan sertifikasi siswa berdasarkan performa belajar.

## 3. Rumusan Masalah

Berdasarkan identifikasi masalah di atas, rumusan masalah dalam penelitian ini adalah:

1. Bagaimana membangun sistem company profile yang dapat memberikan informasi lengkap mengenai penyedia les komputer berbasis online?
2. Bagaimana merancang dashboard kontrol yang dapat membantu dalam manajemen pembelajaran dan evaluasi siswa?
3. Bagaimana menentukan porsi belajar yang efektif untuk meningkatkan pemahaman siswa?
4. Bagaimana mengelola data personal siswa secara sistematis untuk mendukung pengambilan keputusan dalam pembelajaran?
5. Bagaimana melakukan klasifikasi siswa berdasarkan tingkat kemampuan dan kebutuhan belajar?
6. Bagaimana menyusun klasemen siswa yang hanya memungkinkan siswa yang telah menyelesaikan porsi belajar untuk mengikuti ujian?
7. Bagaimana merancang sistem manajemen waktu yang efektif untuk jadwal belajar dan ujian siswa?

## 4. Tujuan Penelitian

Tujuan dari penelitian ini adalah:

1. Membuat company profile yang dapat memberikan gambaran lengkap mengenai penyedia les komputer berbasis online.
2. Merancang dashboard kontrol untuk mempermudah pemantauan dan pengelolaan data siswa.
3. Menentukan porsi belajar yang optimal untuk meningkatkan pemahaman siswa.
4. Mengembangkan sistem pengelolaan data personal siswa yang terstruktur dan mudah diakses.
5. Membangun sistem klasifikasi siswa berdasarkan tingkat kemampuan dan kebutuhan belajar.
6. Menyusun klasemen siswa yang berbasis pada penyelesaian porsi belajar dan performa dalam belajar.
7. Merancang sistem manajemen waktu untuk mengatur jadwal belajar dan ujian siswa secara efisien.

## 5. Metode Analisis

Untuk menganalisis sistem ini, digunakan metode *5W1H* (What, Why, Who, When, Where, How):

### 5.1. What (Apa)

- *Apa yang ingin dicapai?*
  - Membangun sistem manajemen les komputer berbasis online untuk meningkatkan efektivitas pembelajaran dan evaluasi siswa.
- *Apa masalah yang dihadapi?*
  - Kurangnya sistem terstruktur dalam pembelajaran, manajemen waktu, dan evaluasi performa siswa.

### 5.2. Why (Mengapa)

- *Mengapa sistem ini diperlukan?*
  - Untuk meningkatkan kualitas pembelajaran melalui sistem yang terstruktur dan berbasis data.
- *Mengapa menggunakan teknologi Laravel, Docker, dan MySQL?*
  - Laravel untuk pengembangan aplikasi yang cepat dan efisien, Docker untuk manajemen lingkungan pengembangan yang konsisten, dan MySQL untuk penyimpanan data yang terstruktur.

### 5.3. Who (Siapa)

- *Siapa yang terlibat dalam sistem ini?*
  - Siswa, instruktur, manajer, dan administrator sistem.
- *Siapa yang akan menggunakan sistem ini?*
  - Instruktur dan manajer untuk memantau dan mengelola siswa, serta siswa untuk melihat perkembangan mereka.

### 5.4. When (Kapan)

- *Kapan sistem ini akan diimplementasikan?*
  - Setelah tahap pengembangan dan pengujian selesai, sistem akan diimplementasikan dalam waktu 6 bulan.
- *Kapan evaluasi performa siswa dilakukan?*
  - Evaluasi dilakukan secara berkala setiap bulan dan setelah setiap ujian.

### 5.5. Where (Di mana)

- *Di mana sistem ini akan digunakan?*
  - Sistem akan digunakan oleh penyedia les komputer berbasis online dan dapat diakses secara online melalui web dashboard.
- *Di mana data disimpan?*
  - Data disimpan dalam database MySQL yang dihosting pada server lokal atau cloud.

### 5.6. How (Bagaimana)

- *Bagaimana sistem ini akan dibangun?*
  - Menggunakan framework Laravel untuk backend dan frontend, Docker untuk containerisasi, dan MySQL untuk database.
- *Bagaimana cara kerja sistem ini?*
  - Siswa mendaftar, data mereka disimpan, instruktur mengevaluasi performa, dan sistem mengklasifikasikan siswa berdasarkan performa mereka.

## 6. Perancangan Sistem

### 6.1. Entity Relationship Diagram (ERD)

Sistem menggunakan beberapa entitas utama:

- *Siswa* (ID_Siswa, Nama, Usia, Kontak)
- *Instruktur* (ID_Instruktur, Nama, Spesialisasi)
- *Belajar* (ID_Belajar, ID_Siswa, Jenis Belajar, Hasil)
- *Ujian* (ID_Ujian, Tanggal, Lokasi)
- *Klasemen* (ID_Klasemen, ID_Siswa, Poin)

### 6.2. Flowchart Sistem

Flowchart utama mencakup:

1. *Proses Pendaftaran Siswa* → Input Data → Verifikasi → Masuk Database.
2. *Proses Belajar Siswa* → Input Hasil Belajar → Evaluasi → Klasifikasi.
3. *Proses Manajemen Ujian* → Penyusunan Jadwal → Seleksi Siswa → Pelaksanaan.

## 7. Implementasi Teknologi

Sistem ini dikembangkan menggunakan *Laravel, Docker, dan MySQL*:

- *Laravel:* Digunakan sebagai framework utama untuk membangun backend dan frontend dashboard.
- *Docker:* Digunakan untuk mengelola lingkungan pengembangan secara terisolasi dan memastikan kompatibilitas sistem.
- *MySQL:* Digunakan sebagai database untuk menyimpan data siswa, belajar, dan ujian.

Konfigurasi Docker untuk Laravel dan MySQL:

```yaml
version: '3.8'
services:
  app:
    build: .
    container_name: laravel_app
    volumes:
      - .:/var/www/html
    depends_on:
      - db
  db:
    image: mysql:8
    container_name: mysql_db
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: les_komputer
      MYSQL_USER: user
      MYSQL_PASSWORD: password
    ports:
      - "3306:3306"
```

---

## 8. Implementasi Fitur Berdasarkan Studi Kasus

---

### 8.1. Dashboard Control

*Tujuan:*

- Memantau dan mengelola data siswa, pembelajaran, dan ujian secara real-time.

*Fitur:*

- *Ringkasan Data:* Statistik jumlah siswa, instruktur, dan ujian.
- *Monitoring Performa:* Grafik perkembangan performa siswa.
- *Manajemen Siswa:* Tambah, edit, dan hapus data siswa.
- *Manajemen Belajar:* Jadwal dan hasil belajar siswa.
- *Manajemen Ujian:* Jadwal dan hasil ujian.

*Implementasi:*

- Menggunakan *Laravel* untuk backend dan *Chart.js* untuk visualisasi data.
- Dashboard diakses oleh admin, instruktur, dan manajer.

### 8.2. Porsi Belajar untuk Siswa

*Tujuan:*

- Menentukan porsi belajar yang efektif untuk meningkatkan pemahaman siswa.

*Fitur:*

- *Jadwal Belajar:* Jadwal harian/mingguan untuk setiap siswa.
- *Jenis Belajar:* Belajar teori, praktik, dan proyek.
- *Evaluasi Belajar:* Catatan hasil belajar dan rekomendasi perbaikan.

*Implementasi:*

- Data belajar disimpan dalam tabel belajar di database.
- Sistem memberikan notifikasi jika siswa belum menyelesaikan porsi belajar.

```sql
CREATE TABLE Belajar (
    ID_Belajar INT PRIMARY KEY AUTO_INCREMENT,
    ID_Siswa INT,
    Jenis_Belajar VARCHAR(100),
    Tanggal DATE,
    Hasil TEXT,
    FOREIGN KEY (ID_Siswa) REFERENCES Siswa(ID_Siswa)
);
```

---

### 8.3. Data Personal Siswa

*Tujuan:*

- Mengelola data personal siswa secara sistematis.

*Fitur:*

- *Profil Siswa:* Nama, usia, dan kontak.
- *Riwayat Belajar:* Data belajar yang telah diikuti.
- *Riwayat Ujian:* Data ujian yang diikuti dan hasilnya.

*Implementasi:*

- Data disimpan dalam tabel siswa di database.
- Siswa dapat mengakses profil mereka melalui dashboard.

```sql
CREATE TABLE Siswa (
    ID_Siswa INT PRIMARY KEY AUTO_INCREMENT,
    Nama VARCHAR(100),
    Usia INT,
    Kontak VARCHAR(20)
);
```

---

### 8.4. Klasifikasi Penilaian Siswa

*Tujuan:*

- Mengelompokkan siswa berdasarkan tingkat kemampuan dan kebutuhan belajar.

*Fitur:*

- *Parameter Penilaian:* Pemahaman teori, kemampuan praktik, dan konsistensi.
- *Klasifikasi:* Siswa dikelompokkan menjadi kategori (misalnya, pemula, menengah, lanjutan).
- *Rekomendasi:* Rekomendasi belajar berdasarkan hasil penilaian.

*Implementasi:*

- Penilaian dilakukan oleh instruktur dan disimpan dalam tabel penilaian.

```sql
CREATE TABLE Penilaian (
    ID_Penilaian INT PRIMARY KEY AUTO_INCREMENT,
    ID_Siswa INT,
    Teori INT,
    Praktik INT,
    Kategori VARCHAR(50),
    FOREIGN KEY (ID_Siswa) REFERENCES Siswa(ID_Siswa)
);
```

---

### 8.5. Klasemen Siswa

*Tujuan:*

- Menyusun klasemen siswa yang hanya memungkinkan siswa yang telah menyelesaikan porsi belajar untuk mengikuti ujian.

*Fitur:*

- *Kriteria Klasemen:* Berdasarkan penyelesaian porsi belajar dan performa.
- *Peringkat Siswa:* Siswa dengan performa terbaik ditempatkan di peringkat atas.
- *Seleksi Ujian:* Hanya siswa yang memenuhi kriteria yang boleh mengikuti ujian.

*Implementasi:*

- Klasemen dihitung berdasarkan data dari tabel belajar dan penilaian.

```sql
SELECT S.Nama, COUNT(B.ID_Belajar) AS Belajar_Selesai, AVG(P.Teori + P.Praktik) AS Skor
FROM Siswa S
JOIN Belajar B ON S.ID_Siswa = B.ID_Siswa
JOIN Penilaian P ON S.ID_Siswa = P.ID_Siswa
GROUP BY S.ID_Siswa
ORDER BY Skor DESC;
```

---

### 8.6. Manajemen Waktu Ujian

*Tujuan:*

- Mengatur jadwal ujian secara efisien.

*Fitur:*

- *Jadwal Ujian:* Tanggal, waktu, dan lokasi ujian.
- *Notifikasi:* Pengingat untuk siswa dan instruktur.
- *Pelaporan Hasil:* Input hasil ujian dan update klasemen.

*Implementasi:*

- Data ujian disimpan dalam tabel ujian.

```sql
	CREATE TABLE Ujian (
    ID_Ujian INT PRIMARY KEY AUTO_INCREMENT,
    Tanggal DATE,
    Lokasi VARCHAR(100),
    ID_Siswa INT,
    Hasil VARCHAR(50),
    FOREIGN KEY (ID_Siswa) REFERENCES Siswa(ID_Siswa)
);
```
