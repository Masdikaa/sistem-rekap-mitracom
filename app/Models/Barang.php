<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang'; //camelcase
    protected $guarded = ['idBarang'];
    protected $primaryKey = 'idBarang';

    protected $fillable = [
        'namaBarang',
        'kerusakan',
        'kelengkapan',
        'estimasiBiaya',
        'tanggalMasuk',
        'tanggalEstimasi',
        'tanggalAmbil',
        'biayaPerbaikan',
        'alasanBatal',
        'status'
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'idCustomer');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'idKategori');
    }

    public function scopeFilter($query, array $filters)
    {
        // Existing filter scope logic for 'kategori' and 'status'
        
        // Add a new scope or modify existing scope for 'tanggalMasuk'
        $query->when($filters['tanggalMasuk'] ?? false, function ($query, $month) {
            return $query->whereMonth('tanggalMasuk', $month);
        });
    }
}