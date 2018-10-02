<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
   
    protected $table= 'ubicacions';
    protected $primaryKey="Id_Ubicacion";
    public $timestamps=true;

    protected $fillable =[
        'Descripcion'

    ];

    

    public function Colmena() 
    {
        return $this->hasOne('App/Colmena', 'Id_Colmena');
    }
}
