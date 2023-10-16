<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Involucrado extends Model
{
    static $rules = [
		'descripcionInvolucrado' => 'required',
        'organizacion_id' => 'required',
        'nombrePersona' => 'required',
		'apellido1' => 'required',
		'apellido2' => 'required',
        'codigo' => 'required',
		'telefonoPersona' => 'required',
		'emailPersona' => 'required',
        'implicacion' => 'required',
        
        
    ];
    protected $fillable = ['implicacion','organizacion_id','descripcionInvolucrado','nombrePersona','apellido1','apellido2','codigo','telefonoPersona','emailPersona'];

    use HasFactory;
    protected $table = 'involucrados';
   
 
    public function organizacion(){
        return $this->belongsTo(Organizacion::class,'organizacion_id');
    }
 


}
