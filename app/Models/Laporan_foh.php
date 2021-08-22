<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan_foh extends Model
{
    use HasFactory;
    
    protected $table = 'laporan_hoax';
    protected $fillable = ['nama_pelapor', 'email_pelapor', 'judul_laporan', 'detail_laporan', 'gambar1', 'gambar2'];
}
