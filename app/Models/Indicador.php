<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    
    static $rules = [
		'nombreIndicador' => 'required',
    ];

    protected $table = 'indicadors';
    protected $fillable = ['nombreIndicador'];


    use HasFactory;
   

   
  //   public function articulo(){
  //     return $this->hasMany('App\Models\Articulo');
  // }

  // public function scopefilter($query,$nombreIndicador){
  // return $query->where('nombreIndicador','=',$nombreIndicador);

  // }
}


