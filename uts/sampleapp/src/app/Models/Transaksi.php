<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['pelanggan_id', 'sepatu_id', 'Jumlah', 'Total_Harga'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function sepatu()
    {
        return $this->belongsTo(TokoSepatu::class);
    }
}