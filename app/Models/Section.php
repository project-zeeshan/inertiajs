<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Section extends Model

{
    use HasFactory;

    protected $fillable = ['name', 'class_id'];

    public function student(){
        return $this->hasMany(Student::class); //maksudnya adalah setiap student memiliki banyak student
    }

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');  //maksudnya adalah setiap section memiliki 1 class
    }
}
