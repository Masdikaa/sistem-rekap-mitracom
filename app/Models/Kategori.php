<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori'; //camelcase
    protected $guarded = ['idKategori'];
    protected $primaryKey = 'idKategori';

    protected $fillable = [
        'kategori'
    ];

    public $timestamps = false;

    public function barang()
    {
        return $this->hasMany(Barang::class, 'idKategori');
    }
}