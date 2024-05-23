<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $guarded = ['id_pasien'];
    protected $primaryKey = 'id_pasien';
    protected $table = 'pasien';
    public $timestamps = false;
}