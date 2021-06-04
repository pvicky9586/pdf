<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    
    protected $fillable = ['card', 'name', 'sex', 'email', 'age', 'direction'];
}
