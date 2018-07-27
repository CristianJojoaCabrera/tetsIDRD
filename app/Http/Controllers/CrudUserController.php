<?php

namespace crudPersona\Http\Controllers;

use crudPersona\Usuarios;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class CrudUserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexCrudUsers()
    {
        $usuarios = Usuarios::all();
        return view('users.indexCrud',
            ['usuarios' => $usuarios]);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function listUser(Request $request)
    {
        $usuarios = Usuarios::all();
        return DataTables::of($usuarios)
            ->removeColumn('created_at')
            ->removeColumn('updated_at')
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createUser(Request $request)
    {

        //return $request;
        Usuarios::create([

            'Usua_Nombre' => $request->get('Usua_Nombre'),
            'Usua_Apellido' => $request->get('Usua_Apellido'),
            'Usua_Correo' => $request->get('Usua_Correo'),
            'Usua_Telefono' => $request->get('Usua_Telefono'),
            'Usua_Ocupacion' => $request->get('Usua_Ocupacion'),
            'Usua_Cedula' => $request->get('Usua_Cedula'),
            'Usua_Direccion' => $request->get('Usua_Direccion'),
            'Usua_Edad' => $request->get('Usua_Edad'),
            //'Usua_genero' => $request->get('selectGenero')

        ]);

        $usuarios = Usuarios::all();
        return view('users.indexCrud',
            ['usuarios' => $usuarios]);
        //return 'holaaa';
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function elimarUsuario(Request $request, $id)
    {
        $usuario = Usuarios::find($id);
        $usuario->delete();
        return new JsonResponse('bien', 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function modificarUsuario(Request $request)
    {
        $usuario = Usuarios::find($request->get('id_Usuario'));


        $usuario->Usua_Nombre = $request->get('Usua_Nombre_edit');
        $usuario->Usua_Apellido = $request->get('Usua_Apellido_edit');
        $usuario->Usua_Correo = $request->get('Usua_Correo_edit');
        $usuario->Usua_Telefono = $request->get('Usua_Telefono_edit');
        $usuario->Usua_Ocupacion = $request->get('Usua_Ocupacion_edit');
        $usuario->Usua_Cedula = $request->get('Usua_Cedula_Edit');
        $usuario->Usua_Edad = $request->get('Usua_Edad_Edit');
        $usuario->Usua_Direccion = $request->get('Usua_Direccion_Edit');
        $usuario->Usua_genero = $request->get('selectGenero_Edit');

        $usuario->save();
        $usuarios = Usuarios::all();
        return view('users.indexCrud',
            ['usuarios' => $usuarios]);
    }
}
