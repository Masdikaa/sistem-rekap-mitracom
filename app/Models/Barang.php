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

    // protected $fillable = [
    //     'namaUser',
    //     'password',
    //     'level',
    //     'status'
    // ];

    public $timestamps = false;
}