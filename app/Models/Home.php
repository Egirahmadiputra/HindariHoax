<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    
    protected $table = 'humas_foh';
    protected $fillable = ['judul_hoax', 'detail_hoax', 'gambar_hoax', 'judul_fakta', 'detail_fakta', 'gambar_fakta', 'bukti'];
}
