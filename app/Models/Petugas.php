<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $guarded = ['id_petugas'];
    protected $primaryKey = 'id_petugas';
    protected $table = 'petugas';
    public $timestamps = false;
}