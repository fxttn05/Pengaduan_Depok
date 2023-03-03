<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
        'pangaduan_date' => 'datetime:d-m-Y H:i:s',
        'end_date' => 'datetime:d-m-Y H:i:s',
    ];

    protected $guarded = [
        'id',
    ];
}
