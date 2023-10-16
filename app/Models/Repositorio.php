<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Repositorio extends Model
{

    static $rules = [
    'autor_id' => 'required',
    'carrera_id' => 'required',
		'nombre' => 'required',
		'fecha' => 'required',
		'descripcion' => 'required',
		'tipo' => 'required',
    'documento' => 'required|mimes:pdf|max:10024',
		'estado' => 'required',
    
        
    ];
    protected $fillable = ['autor_id', 'carrera_id', 'nombre','fecha','descripcion','tipo','documento', 'estado','idUsuario'];

    use HasFactory;
    protected $stable="repositorios";

    public function autor(){
      return $this->belongsTo(Autor::class,'autor_id');
    } 
    public function carrera(){
      return $this->belongsTo(Carrera::class,'carrera_id');
    } 
}
