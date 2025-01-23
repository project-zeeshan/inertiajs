<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; //maksudnya adalah setiap student memiliki model
use Illuminate\Database\Eloquent\Factories\HasFactory; //maksudnya adalah setiap student memiliki factory

class Student extends Model //maksudnya adalah setiap student memiliki model
{
    use HasFactory; //maksudnya adalah setiap student memiliki factory

    protected $fillable = ['name', 'email', 'class_id', 'section_id']; //maksudnya adalah setiap student memiliki name, email, class_id, dan section_id

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id'); //maksudnya adalah setiap student memiliki 1 class
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id'); //maksudnya adalah setiap student memiliki 1 section
    }
}

