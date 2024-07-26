<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notulensi extends Model
{
    use HasFactory;
    protected $fillable= [
        'judul', 
        'tanggal', 
        'ttd',
        'isi'
    ];
}
