<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer'; //camelcase
    protected $guarded = ['idCustomer'];
    protected $primaryKey = 'idCustomer';

    protected $fillable = [
        'namaCustomer',
        'noHP',
        'alamat'
    ];

    public $timestamps = false;

    public function barang()
    {
        return $this->hasMany(Barang::class, 'idCustomer');
    }
}