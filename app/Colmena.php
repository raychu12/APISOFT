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
    public function ubicacion() 
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id');
    }
}
