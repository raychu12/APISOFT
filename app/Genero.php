<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table= 'Genero';
    protected $primaryKey="Id_Genero";
    
    public $timestamps=true;

    protected $fillable =[
        'Descripcion'

    ];
  
}
