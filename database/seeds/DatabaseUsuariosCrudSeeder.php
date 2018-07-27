<?php

use Illuminate\Database\Seeder;
use crudPersona\Usuarios;

class DatabaseUsuariosCrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [

            ['Usua_Nombre' => 'Cristian','Usua_Apellido' => 'Jojoa Cabrera','Usua_Correo' => 'cristianjojoa01@gmail.com','Usua_Telefono'=>'3195600375','Usua_Ocupacion'=>'Estudiante','Usua_Cedula'=>12345,'Usua_Edad'=>12,'Usua_Direccion'=>'carrea1'],
            ['Usua_Nombre' => 'Hector','Usua_Apellido' => 'Gonzales Gonzales','Usua_Correo' => 'Hector01@gmail.com','Usua_Telefono'=>'3195600999','Usua_Ocupacion'=>'Estudiante','Usua_Cedula'=>123456,'Usua_Edad'=>13,'Usua_Direccion'=>'carrea2'],
            ['Usua_Nombre' => 'Miguel','Usua_Apellido' => 'Caro Caro','Usua_Correo' => 'miguel2@gmail.com','Usua_Telefono'=>'3195600888','Usua_Ocupacion'=>'Estudiante','Usua_Cedula'=>123457,'Usua_Edad'=>14,'Usua_Direccion'=>'carrea3'],
            ['Usua_Nombre' => 'Fredy','Usua_Apellido' => 'Joya Cabrera','Usua_Correo' => 'fredy1@gmail.com','Usua_Telefono'=>'3195600777','Usua_Ocupacion'=>'Estudiante','Usua_Cedula'=>123458,'Usua_Edad'=>15,'Usua_Direccion'=>'carrea4'],
            ['Usua_Nombre' => 'James','Usua_Apellido' => 'Rivera Espejo','Usua_Correo' => 'james10@gmail.com','Usua_Telefono'=>'3195600111','Usua_Ocupacion'=>'Estudiante','Usua_Cedula'=>123459,'Usua_Edad'=>16,'Usua_Direccion'=>'carrea5'],
            ['Usua_Nombre' => 'laura','Usua_Apellido' => 'Gonzales Caro','Usua_Correo' => 'laura87@gmail.com','Usua_Telefono'=>'3195550375','Usua_Ocupacion'=>'Estudiante','Usua_Cedula'=>1234510,'Usua_Edad'=>17,'Usua_Direccion'=>'carrea6'],
            ['Usua_Nombre' => 'Karen','Usua_Apellido' => 'Lopez lopez','Usua_Correo' => 'karen22@gmail.com','Usua_Telefono'=>'3195600789','Usua_Ocupacion'=>'Estudiante','Usua_Cedula'=>1234511,'Usua_Edad'=>18,'Usua_Direccion'=>'carrea7'],

        ];

        foreach ($usuarios as $usuario) {
            $aux = new Usuarios();
            $aux->Usua_Nombre = $usuario['Usua_Nombre'];
            $aux->Usua_Apellido = $usuario['Usua_Apellido'];
            $aux->Usua_Correo = $usuario['Usua_Correo'];
            $aux->Usua_Telefono = $usuario['Usua_Telefono'];
            $aux->Usua_Ocupacion = $usuario['Usua_Ocupacion'];
            $aux->Usua_Cedula = $usuario['Usua_Cedula'];
            $aux->Usua_Direccion = $usuario['Usua_Direccion'];
            $aux->Usua_Edad = $usuario['Usua_Edad'];
            $aux->save();
        }
    }
}
