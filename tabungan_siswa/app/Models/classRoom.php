<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classRoom extends Model
{
    use HasFactory;

    protected $table = 'class';

    public function tabungan()
    {
        return $this->hasMany(Tabungan::class, 'class_id', 'id');
    }

}
