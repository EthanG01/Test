<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{

  static $rules = [
		'nombreOrganizacion' => 'required',
        'fotoOrganizacion' => 'required|image|mimes:jpeg,png,svg|max:1024',
        'tipo' => 'required',
        'canton_id' => 'required',
        'direccion' => 'required',
    ];
   
    protected $fillable = ['direccion','canton_id','tipo','nombreOrganizacion','fotoOrganizacion',];

    use HasFactory;
    protected $table = 'organizacions';
   
    public function canton(){
        return $this->belongsTo(Canton::class,'canton_id');
    }
    
}
