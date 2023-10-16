<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tesi extends Model
{
    
  static $rules = [
		'nombreTes' => 'required',
		'descripcionTes' => 'required',
    'carrera_id' => 'required',
    'tipotesis_id' => 'required',
    'etiqueta_id' => 'required',
    'autor_id' => 'required',
    'estado' => 'required',
		'documentoTes' => 'required|mimes:pdf|max:10024',
		'fechaPublicacionTes' => 'required',
    ];

    protected $fillable = ['carrera_id','estado','tipotesis_id','autor_id','etiqueta_id','nombreTes','descripcionTes','documentoTes','fechaPublicacionTes','idUsuario'];
  

    use HasFactory;
    protected $table = 'tesis';
   
    public function autor(){
         return $this->belongsTo(Autor::class,'autor_id');
        // return $this->belongsTo('App\Models\Tema');
    } 
    public function etiqueta(){
      return $this->belongsTo(Etiqueta::class,'etiqueta_id');
     // return $this->belongsTo('App\Models\Tema');
 } 
    public function carrera(){
        return $this->belongsTo(Carrera::class,'carrera_id');
       // return $this->belongsTo('App\Models\Tema');
   } 
   public function tipoTesi(){
    return $this->belongsTo(TipoTesi::class,'tipotesis_id');
   // return $this->belongsTo('App\Models\Tema');
} 

}