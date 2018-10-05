<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    protected $table= 'afiliados';
    protected $primaryKey="Id_Afiliado";
    public $timestamps=false;

    protected $fillable =[
        'Id_Afiliado',
        'Nombre',
        'Apellido1',
        'Apellido2',
        'Telefono',
        'Correo',
        'Direccion',
        'Fecha_Ingreso',
        'Num_Cuenta',
         'genero_id',
         'estado_civil_id',
         'Estado'
    ];

    public function Genero() 
    {
        return $this->belongsTo(Genero::class, 'genero_id');
    }
    public function Estado_Civil() 
    {
        return $this->belongsTo(Estado_Civil::class, 'estado_civil_id');
    }
}
