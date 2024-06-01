<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorAntrian extends Model
{
    use HasFactory;
    protected $guarded = ['id_antrian'];
    protected $primaryKey = 'id_antrian';
    protected $table = 'antrian';
}