<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table= 'Usuario';
    protected $primaryKey="Id_Usuario";
    
    public $timestamps=true;

    protected $fillable =
    [
        'Direccion',
        'Nombre',
        'Apellido1',
        'Apellido2',
        'Telefono',
        'Id_Genero',
        'Id_Rol'
    ];
    public function genero() 
    {
        return $this->hasOne(Genero::class, 'Id_Genero');
    }

    public function rol() 
    {
        return $this->hasOne(Rol::class, 'Id_Rol');
    }
}
