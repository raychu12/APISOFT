<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table= 'usuarios';
    protected $primaryKey="Id_Usuario";
    
    public $timestamps=false;

    protected $fillable =
    [
        'Id_Usuario',
        'Nombre',
        'Apellido1',
        'Apellido2',
        'Telefono',
        'Direccion',
        'Correo',
        'Direccion',
        'Fecha_Ingreso',
        'Clave',
        'Genero_Id',
        'Rol_Id'
    ];
    public function Genero() 
    {
        return $this->hasOne(Genero::class ,'Id_Genero');
    }

    public function Rol() 
    {
        return $this->hasOne(Rol::class,'Id_Rol');
    }
}
