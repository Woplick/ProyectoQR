@extends('layouts.home')

@section('content')

<div class="content">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Custom Table</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th>ID</th>
                            <th>Color</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="serial">1.</td>
                            <td> #5469 </td>
                            <td>  <span class="name">Administrador</span> </td>
                            <td>
                                <button type="button" class="btn btn-info"><i class="fa fa-pencil-square-o"></i>&nbsp; Editar</button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp; Eliminar</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div> <!-- /.table-stats -->
        </div>
    </div>

@endsection
