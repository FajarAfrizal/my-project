<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'nis',
        'class_id',
        'saldo',
        'withdraw',
        'deposit',
    ];
    public  function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
