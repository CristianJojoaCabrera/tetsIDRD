<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/miestilo.css">
</head>
<body>
        <div class="container">
            @yield('content')
        </div>

</body>
</html>
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        var table = $('#tblUser').DataTable({
            'proccesing':true,
            'serverSide':true,
            'ajax': "{{ route('listarUser')}}",
            'columns' : [
                {data: 'Usua_Cedula'},
                {data: 'Usua_Nombre'},
                {data: 'Usua_Apellido'},
                {data: 'Usua_Edad'},
                {data: 'Usua_Correo'},
                {data: 'Usua_Telefono'},
                {data: 'Usua_Ocupacion'},
                {data: 'Usua_Direccion'},
                {
                    defaultContent:
                    '<div class="align-content-center"><a title="Editar Articulo" href="javascript:;" class="btn btn-warning edit"><i class="glyphicon glyphicon-pencil"></i></a>' +
                    '<a title="Eliminar Articulo" href="javascript:;" class="btn btn-danger remove"><i class="glyphicon glyphicon-trash"></i></a></div>',
                    data: 'action',
                    name: 'action',
                    title: 'Acciones',
                    orderable: false,
                    searchable: false,
                    exportable: false,
                    printable: false,
                    className: 'text-center',
                    render: null,
                    responsivePriority: 2
                }
            ]
            });
            table.on('click', '.remove', function (e) {
                e.preventDefault();
                $tr = $(this).closest('tr');
                var dataTable = table.row($tr).data();
                console.log(dataTable);
                var route ='{{route('elimarUsuario') }}'+'/'+dataTable.id;
                $.ajax({
                    url:  route,
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        _token: '{!! csrf_token() !!}',
                    },
                    success: function (data) {
                        console.log(data);
                        table.ajax.reload();
                    }
                });
            });
            table.on('click', '.edit', function (e) {

                e.preventDefault();
                $tr = $(this).closest('tr');
                var dataTable = table.row($tr).data();
                console.log(dataTable);
                $('input[name=id_Usuario]').val(dataTable.id);
                $('input[name=Usua_Nombre_edit]').val(dataTable.Usua_Nombre);
                $('input[name=Usua_Apellido_edit]').val(dataTable.Usua_Apellido);
                $('input[name=Usua_Correo_edit]').val(dataTable.Usua_Correo);
                $('input[name=Usua_Telefono_edit]').val(dataTable.Usua_Telefono);
                $('input[name=Usua_Ocupacion_edit]').val(dataTable.Usua_Ocupacion);

                $('input[name=Usua_Cedula_Edit]').val(dataTable.Usua_Cedula);
                $('input[name=Usua_Direccion_Edit]').val(dataTable.Usua_Direccion);
                $('input[name=Usua_Edad_Edit]').val(dataTable.Usua_Edad);
                $('select[name=selectGenero_Edit]').val(dataTable.Usua_genero);
                //$("selectGenero_Edit").val("val2");
                $('#modalModificarUsuario').modal('toggle');

            });
            $('.create').on('click',function(){
                $('#form-usuarios')[0].reset();
                $('#modalRegistrarUsuario').modal('toggle');
            });


    } );
</script>
