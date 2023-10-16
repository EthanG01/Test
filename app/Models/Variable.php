<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Variable extends Model
{
    
    static $rules = [
		'nombreVariable' => 'required',
    ];

    protected $fillable = ['nombreVariable'];
    protected $table = 'variables';

    use HasFactory;
   
  
    

}
