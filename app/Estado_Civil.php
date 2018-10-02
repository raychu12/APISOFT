<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado_Civil extends Model
{
    //
    protected $table= 'Estado_Civil';
    protected $primaryKey="Id_Estado_Civil";
    
    public $timestamps=true;

    protected $fillable =[
        'Descripcion'
    ];
}
