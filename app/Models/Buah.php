<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{

    protected $table = 'buahs';

    protected $fillable = [
        'nama',
        'harga',
        'stok',
    ];
}
