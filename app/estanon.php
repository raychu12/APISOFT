<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estanon extends Model
{
    protected $table= 'estanons';
    protected $primaryKey="Id_Estanon";
    
    public $timestamps=true;
    protected $casts = [
        'Fecha' => 'Y-m-d H:i:s'
    ];
    protected $fillable =[
        'Peso',
        'Fecha'

    ];
}
