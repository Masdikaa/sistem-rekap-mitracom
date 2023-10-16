<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori'; //camelcase
    protected $guarded = ['idKategori'];
    protected $primaryKey = 'idKategori';

    public $timestamps = false;
}