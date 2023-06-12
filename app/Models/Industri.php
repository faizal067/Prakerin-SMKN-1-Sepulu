<?php

namespace App\Models;

use App\Models\Industri;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Industri extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'lokasi', 'deskripsi', 'kebutuhan'];
}
