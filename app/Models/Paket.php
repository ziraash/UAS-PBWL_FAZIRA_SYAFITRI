<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'tb_paket';
    protected $primaryKey = 'paket_id';
    protected $guarded = '[]';
    protected $fillable = [
        'paket_id',
        'paket_nama',
        'paket_harga',
        'paket_berat'
    ];
    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'transaksi_id_paket', 'paket_id');    
    }
}
