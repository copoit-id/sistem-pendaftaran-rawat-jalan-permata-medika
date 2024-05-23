<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    use HasFactory;
    protected $guarded = ['id_jadwal_dokter'];
    protected $primaryKey = 'id_jadwal_dokter';
    protected $table = 'jadwal_dokter';
    public $timestamps = false;

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
