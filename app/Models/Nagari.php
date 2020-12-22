<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nagari extends Model
{
    use HasFactory;

    protected $table = 'nagari';
    public $timestamps = false;

    public function jorongs()
    {
        return $this->hasMany('App\Models\Jorong');
    }
}
