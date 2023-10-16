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

    public $timestamps = false;
}