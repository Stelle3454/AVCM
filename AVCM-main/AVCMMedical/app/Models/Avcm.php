<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avcm extends Model
{
    use HasFactory;
    protected $table = "doctors";
    protected $fillable = ["firstname", "middlename","lastname"];

}
