<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    // public $incrementing = false;

    protected $table = 'jenis';

    public function tahapan()
    {
        return $this->hasMany('App\Models\Tahapan');
    }

    public function penertiban()
    {
        return $this->belongsTo('App\Models\Penertiban');
    }
}
