<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $guarded = ['id_keluhan'];
    protected $primaryKey = 'id_keluhan';
    protected $table = 'keluhan';
    public $timestamps = false;
}