<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    protected $fillable =['Gender','Name','Firstname','Nickname','Origin','section_id'];
}
