<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
     protected $fillable = ['nombreProvincia','nombreCanton'];
    static $rules = [
		'nombreCanton' => 'required',
    'nombreProvincia' => 'required',
  
    
    ];

    use HasFactory;
    protected $table = 'cantons';
   

}