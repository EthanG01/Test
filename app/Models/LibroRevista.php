<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LibroRevista extends Model
{
    
    static $rules = [
		'edicion' => 'required',
    'editorial_id' => 'required',
    'tipolibro_id' => 'required',
    'autor_id' => 'required',
    'etiqueta_id' => 'required',
		'titulo' => 'required',
		'cant_pag' => 'required',
    'estado' => 'required',
		'documentoLR' => 'required|mimes:pdf|max:10024',
		'fechaPublicacionLR' => 'required',
    ];

    protected $fillable = ['editorial_id','tipolibro_id','estado','autor_id','etiqueta_id','edicion','titulo','cant_pag','documentoLR','idUsuario','fechaPublicacionLR'];

   
    use HasFactory;
    protected $stable="libro_revistas";
   
    public function autor(){
         return $this->belongsTo(Autor::class,'autor_id');
        // return $this->belongsTo('App\Models\Tema');
    } 
    public function etiqueta(){
      return $this->belongsTo(Etiqueta::class,'etiqueta_id');
     // return $this->belongsTo('App\Models\Tema');
 } 

    public function editorial(){
        return $this->belongsTo(Editorial::class,'editorial_id');
       // return $this->belongsTo('App\Models\Tema');
   } 
   public function tipoLibro(){
    return $this->belongsTo(TipoLibro::class,'tipolibro_id');
   // return $this->belongsTo('App\Models\Tema');
} 
   
    

}
