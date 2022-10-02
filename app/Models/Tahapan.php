<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahapan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    // public $incrementing = false;

    protected $table = 'tahapan';

    public function jenis()
    {
        return $this->belongsTo('App\Models\Jenis');
    }

    public function penertiban()
    {
        return $this->belongsTo('App\Models\Penertiban');
    }
}
