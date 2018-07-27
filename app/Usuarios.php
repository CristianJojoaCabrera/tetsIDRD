<?php

namespace crudPersona;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table = "TBL_Usuarios";
    protected $fillable = [
        'Usua_Cedula',
        'Usua_Nombre',
        'Usua_Apellido',
        'Usua_Edad',
        'Usua_Correo',
        'Usua_Telefono',
        'Usua_Ocupacion',
        'Usua_Direccion',
    ];
}
