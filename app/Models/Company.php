<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Files;
class Company extends Model
{
    use HasFactory;
    protected $table = 'company';

    protected $fillable = [
        'count',
        'work',
        'name',
        'money',
        'location',
        'attach',
        'email',
        'phone',
    ];

    public function files()
{
   return $this->hasMany(Files::class);
}

public function uploads()
{
   return $this->hasMany(Upload::class);
}
}
