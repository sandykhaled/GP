<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    protected $fillable=['name','date_of_birth','father_id'];
    use HasFactory;
    public function father()
    {
      return $this->belongsTo(Father::class);
    }
}
