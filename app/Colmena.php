<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colmena extends Model
{
    
    protected $table= 'colmenas';
    protected $primaryKey="Id_Colmena";
    public $timestamps=true;

    protected $fillable =[
        'Descripcion',
        'Cantidad',
        'ubicacion_id'

    ];

    //en php los metodos se escriben en lowerCamelCase
    public function ubicacion() 
    {
        return $this->hasOne(Ubicacion::class, 'Id_Ubicacion');
    }
}
