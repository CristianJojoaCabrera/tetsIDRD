@extends('layouts.app')
@section('content')
    <div class="modal fade" id="modalRegistrarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Registrar Usurario</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route'=>array('createUser'),'method'=>'POST','id'=>'form-usuarios']) !!}
                        {!!  Form::label('Cedula','Cedula :');
                                            !!}
                        {!!  Form::text('Usua_Cedula',null,
                             ['class'=>'form-control','required']);
                        !!}
                        {!!  Form::label('Nombre','Nombre :');
                        !!}
                        {!!  Form::text('Usua_Nombre',null,
                             ['class'=>'form-control','required' ]);
                        !!}

                        {!!  Form::label('Apellido','Apellido :');
                            !!}
                        {!!  Form::text('Usua_Apellido',null,
                             ['class'=>'form-control','required']);
                        !!}
                        {!!  Form::label('Usua_Telefono','Correo :');
                                                        !!}
                        {!!  Form::email('Usua_Correo',null,
                             ['class'=>'form-control','required']);
                        !!}
                        {!!  Form::label('Usua_Telefono','Telefono :');
                                !!}
                        {!!  Form::text('Usua_Telefono',null,
                             ['class'=>'form-control','required']);
                        !!}
                        {!!  Form::label('Usua_Ocupacion','Ocupacion :');
                                    !!}
                        {!!  Form::text('Usua_Ocupacion',null,
                             ['class'=>'form-control','required']);
                        !!}
                        {!!  Form::label('Edad','Edad :');
                                                !!}
                        {!!  Form::text('Usua_Edad',null,
                             ['class'=>'form-control','required']);
                        !!}
                        {!!  Form::label('Direccion','Dirección :');
                                                    !!}
                        {!!  Form::text('Usua_Direccion',null,
                             ['class'=>'form-control','required']);
                        !!}


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Registrar',
                           ['class'=>'btn btn-primary']);
                       !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalModificarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Modificar Usurario</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route'=>array('modificarUsuario'),'method'=>'PUT','id'=>'form-editar-usuarios']) !!}
                    {!!  Form::text('id_Usuario',null,
                         ['class'=>'form-control','required','style'=>"display:none" ]);
                    !!}
                    <div class="col-md-12">
                        <br><br>
                        <div class="col-md-6">
                            {!!  Form::label('Cedula','Cedula :');
                            !!}
                            {!!  Form::text('Usua_Cedula_Edit',null,
                                 ['class'=>'form-control','required']);
                            !!}

                            {!!  Form::label('Nombre','Nombre :');
                            !!}

                            {!!  Form::text('Usua_Nombre_edit',null,
                                 ['class'=>'form-control','required' ]);
                            !!}

                            {!!  Form::label('Apellido','Apellido :');
                                !!}
                            {!!  Form::text('Usua_Apellido_edit',null,
                                 ['class'=>'form-control','required']);
                            !!}
                            {!!  Form::label('Edad','Edad :');
                                !!}
                            {!!  Form::text('Usua_Edad_Edit',null,
                                 ['class'=>'form-control','required']);
                            !!}
                        </div>
                        <div class="col-md-6">
                            {!!  Form::label('Correo','Correo :');
                         !!}
                            {!!  Form::text('Usua_Correo_edit',null,
                                 ['class'=>'form-control','required']);
                            !!}
                            {!!  Form::label('Usua_Telefono','Telefono :');
                                    !!}
                            {!!  Form::text('Usua_Telefono_edit',null,
                                 ['class'=>'form-control','required']);
                            !!}
                            {!!  Form::label('Usua_Ocupacion','Ocupacion :');
                                        !!}
                            {!!  Form::text('Usua_Ocupacion_edit',null,
                                 ['class'=>'form-control','required']);
                            !!}
                            {!!  Form::label('Direccion','Direccion :');
                                !!}
                            {!!  Form::text('Usua_Direccion_Edit',null,
                                 ['class'=>'form-control','required']);
                            !!}

                        </div>

                    </div>
                </div>
                <div>

                    <div class="modal-footer">
                        <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6">
                                <br>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                {!! Form::submit('Modificar',
                                       ['class'=>'btn btn-primary']);
                                   !!}
                                {!! Form::close() !!}
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class = 'col-md-12'>
        <h1>Usuarios</h1>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="actions">
                    <a href="javascript:;" class="btn btn-simple btn-success btn-icon create"><i
                                class="glyphicon glyphicon-plus"></i> Registrar Usuario</a>

                </div>
            </div>
        </div>
        <br>
        <table class="table" id="tblUser">
            <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Ocupacion</th>
                <th>Direccion</th>
                <th>Acciones</th>

            </tr>
            </thead>

        </table>
    </div>
@endsection

