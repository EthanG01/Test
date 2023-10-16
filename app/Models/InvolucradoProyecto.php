<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvolucradoProyecto extends Model
{

    protected $fillable = ['inv1','inv2','inv3','inv4','inv5','inv6','inv7','inv8','inv9','inv10','involucrados_id','proyecto_id'];
    static $rules = [
		
        'involucrados_id' => 'required',
        'proyecto_id' => 'required',
        'inv1',
        'inv2',
        'inv3',
        'inv4',
        'inv5',
        'inv6',
        'inv7',
        'inv8',
        'inv9',
        'inv10',


    ];

    use HasFactory;
    protected $table = 'involucrado_proyectos';
    public function involucrado(){
        return $this->belongsTo(Involucrado::class,'involucrados_id');
    }
    public function involucrados(){
        return $this->belongsTo(Involucrado::class,'inv1');
    }
    public function invo2(){
        return $this->belongsTo(Involucrado::class,'inv2');
    }
    public function invo3(){
        return $this->belongsTo(Involucrado::class,'inv3');
    }
    public function invo4(){
        return $this->belongsTo(Involucrado::class,'inv4');
    }
    public function invo5(){
        return $this->belongsTo(Involucrado::class,'inv5');
    }
    public function invo6(){
        return $this->belongsTo(Involucrado::class,'inv6');
    }
    public function invo7(){
        return $this->belongsTo(Involucrado::class,'inv7');
    }
    public function invo8(){
        return $this->belongsTo(Involucrado::class,'inv8');
    }
    public function invo9(){
        return $this->belongsTo(Involucrado::class,'inv9');
    }
    public function invo10(){
        return $this->belongsTo(Involucrado::class,'inv10');
    }
    public function proyecto(){
        return $this->belongsTo(Proyecto::class,'proyecto_id');
    }
}