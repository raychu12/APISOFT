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
        return $this->belongsTo(Genero::class ,'Genero_Id');
    }

    public function Rol() 
    {
        return $this->BelongsTo(Rol::class,'Rol_Id');
    }
}
