<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penertiban extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    // public $incrementing = false;

    protected $table = 'penertiban';

    public function jenis()
    {
        return $this->hasMany('App\Models\Jenis');
    }

    public function tahapan()
    {
        return $this->hasMany('App\Models\Tahapan');
    }
}
