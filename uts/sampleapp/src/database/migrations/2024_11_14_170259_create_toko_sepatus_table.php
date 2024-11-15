<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabel Toko Sepatu
        Schema::create('toko_sepatus', function (Blueprint $table) {
            $table->id();
            $table->string('Tipe');
            $table->string('Size');
            $table->decimal('Harga', 10, 2);
            $table->timestamps(); // Tambahkan ini untuk kolom created_at dan updated_at
        });

        // Tabel Pelanggan
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Alamat');
            $table->string('Telepon');
            $table->timestamps();
        });

        // Tabel Transaksi
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelanggan_id')->constrained('pelanggans')->onDelete('cascade');
            $table->foreignId('sepatu_id')->constrained('toko_sepatus')->onDelete('cascade');
            $table->integer('Jumlah');
            $table->decimal('Total_Harga', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
        Schema::dropIfExists('pelanggans');
        Schema::dropIfExists('toko_sepatus');
    }
};
