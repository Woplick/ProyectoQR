@extends('layouts.home')

@section('content')

<div class="content">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Proveedores</strong>
            </div>

            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>CI</th>
                            <th>Celular</th>
                            <th>Acción</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="serial">1.</td>
                            <td> #5469 </td>
                            <td>  <span class="name">Julian Martinez</span> </td>
                            <td>  <span class="name">8564489</span> </td>
                            <td>  <span class="name">789445656</span> </td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-pencil-square-o"></i>&nbsp; Editar</button>
                                <button type="button" class="btn btn-danger" ><i class="fa fa-trash"></i>&nbsp; Eliminar</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div> <!-- /.table-stats -->
            <button type="button" class="btn btn-info mb-1 col-lg-3" data-toggle="modal" data-target="#modal-add">
                Añadir
            </button>
        </div>
</div>

    {{-- Modal añadir --}}
<div class="modal inmodal" id="modal-add" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                  <h4 class="modal-title">Añadir Proveedor</h4>
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label class=" form-control-label">Nombre input</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-magic"></i></div>
                            <input class="form-control">
                        </div>
                        <small class="form-text text-muted">ex. Alex Chura</small>

                        <label class=" form-control-label">CI input</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-magic"></i></div>
                            <input class="form-control">
                        </div>
                        <small class="form-text text-muted">ex. 8363799</small>

                        <label class=" form-control-label">Celuar input</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-magic"></i></div>
                            <input class="form-control">
                        </div>
                        <small class="form-text text-muted">ex. 6977842</small>

                        <button type="button" class="btn btn-primary" ><i class="fa fa-envolve-0"></i>&nbsp; Guardar</button>


                    </div>
                </div>
            </div>
        </div>
    </div>

     {{-- Modal Editar --}}
     <div class="modal inmodal" id="modal-edit" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                  <h4 class="modal-title">Editar Proveedor</h4>
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label class=" form-control-label">Nombre input</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-magic"></i></div>
                            <input class="form-control">
                        </div>
                        <small class="form-text text-muted">ex. Alex Chura</small>

                        <label class=" form-control-label">CI input</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-magic"></i></div>
                            <input class="form-control">
                        </div>
                        <small class="form-text text-muted">ex. 8363799</small>

                        <label class=" form-control-label">Celuar input</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-magic"></i></div>
                            <input class="form-control">
                        </div>
                        <small class="form-text text-muted">ex. 6977842</small>

                        <button type="button" class="btn btn-primary" ><i class="fa fa-envolve-0"></i>&nbsp; Guardar</button>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
