<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tawzeef extends Model
{
    use HasFactory;

    protected $table = 'tawzeef';


    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'details',
    ];
}
