<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    protected $table= 'afiliados';
    protected $primaryKey="Id_Afiliado";
    public $timestamps=true;

    protected $fillable =[
        'Direccion',
        'Nombre',
        'Apellido1',
        'Apellido2',
        'Telefono',
        'Id_Genero',
        'Id_Rol'

    ];
}
