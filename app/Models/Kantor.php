<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kantor extends Model
{
    protected $table = 'kantors';

    protected $fillable = [
        'id_kantor', 'nama', 'telepon','provinsi','kota_kabupaten','kecamatan','desa','alamat'
    ];

    use HasFactory;
}
