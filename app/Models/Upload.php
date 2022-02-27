<?php

namespace App\Models;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    protected $table = 'uploads';
    protected $fillable = [
      'company_id',
        'filename',
        'file_path'
      ];

      public function user()
    {
      return $this->belongsTo(Company::class);
    }
}
