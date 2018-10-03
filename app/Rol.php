<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table= 'Rol';
    protected $primaryKey="Id_Rol";
    public $timestamps=true;

    protected $fillable =[
        'Descripcion'

    ];

    public function usuarios() 
    {
        return $this->hasmany('App/Usuario', 'Id_Usuario');
    }
    //
}
