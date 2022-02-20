<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estsharat extends Model
{
    use HasFactory;

    protected $table = 'estsharat';


    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'details',
    ];
}
