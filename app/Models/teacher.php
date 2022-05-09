<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    protected $fillable =['Gender','Name','Firstname','Nickname','Origin','section_id'];

    //relation 1-N
    function section(){
        return $this->belongsTo(section::class,'section_id');
    }
}
