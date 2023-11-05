<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    protected $fillable=['name','email','username','password','phone_number','location'];
    use HasFactory;
    public function kids(){
        return $this->hasMany(Kid::class);
    }
}
