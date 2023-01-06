<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_bank',
        'nama_bank_text',
        'nama_pemilik',
        'nominal',
        'foto',
        'status',
    ];
}
