<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jorong extends Model
{
    use HasFactory;

    protected $table = 'jorong';
    public $timestamps = false;

    public function kartu_keluargas()
    {
        return $this->hasMany('App\Models\KartuKeluarga');
    }

    public function nagari()
    {
        return $this->belongsTo('App\Models\Nagari');
    }
}

