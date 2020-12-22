<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelPendidikan extends Model
{
    use HasFactory;

    protected $table = 'level_pendidikan';
    public $timestamps = false;

    public function penduduks()
    {
        return $this->hasMany('App\Models\Penduduk');
    }
}
