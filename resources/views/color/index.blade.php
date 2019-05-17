@extends('layouts.home')

@section('content')
<div class="content">
        <div class="animated fadeIn">
            <div class="row">
                 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div><br/>
                @endif
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Colores</strong>
                        </div>
                        <div class="card-body">
                                <button type="button" class="btn btn-info mb-1 col-lg-3" data-toggle="modal" data-target="#modal-add">
                                        Añadir
                                </button>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>ID</th>
                                        <th>Color</th>
                                        <th colspan="2">Acción </th>
                                    </tr>
                                </thead>
                                <tbody>

                                        @foreach ($colors as $color)
                                    <tr>
                                        <td class="serial"></td>
                                        <td> {{$color->id}}</td>
                                        <td>  <span class="name">{{$color->color}}</span> </td>
                                        <td >
                                            <button href ="#" type="button" class="btn btn-info edit show-modal modal-ml" data-target="#modal-show"

                                                data-id={{$color->id}}
                                                data-color ={{$color->color}}

                                                >

                                                <i class="fa fa-pencil-square-o"></i>&nbsp; Editar</button>

                                        </td>
                                        <td>
                                                <form action="{{ route('Color.destroy', $color->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Borrar</button>
                                                </form>
                                        </td>
                                    </tr>
                                        @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <div id="borrar" class="modal fade confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Confirmar Borrado</h4>
                    </div>

                    <div class="modal-body">
                        <p>Estas seguro de eliminar este registro? Este procedimiento es irreversible.</p>
                        <p>Deseas continuar?</p>
                        <p class="debug-url"></p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-danger btn-ok">Borrar</a>
                    </div>
                </div>
            </div>
        </div>

    {{-- Modal añadir --}}
<div class="modal inmodal" id="modal-add" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                  <h4 class="modal-title">Añadir color</h4>
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                    <form action="{{route('Color.store')}}" method="POST">
                        @csrf
                        <label class=" form-control-label" for="color">Color input</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-magic"></i></div>
                            <input class="form-control" name="color" type="text">
                        </div>
                        <small class="form-text text-muted">ex. Verde</small>

                        <button type="submit" class="btn btn-primary" ><i class="fa fa-envolve-0"></i>&nbsp; Guardar</button>


                    </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

     {{-- Modal Editar --}}
<div class="modal inmodal" id="modal-show" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
              <h4 class="modal-title">Editar Color</h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                            <form action="" method="POST" name="form-edit">
                                <label class=" form-control-label" for="color">Color input</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-magic"></i></div>
                                    <input class="form-control" name="color" id="color">
                                </div>
                                <small class="form-text text-muted">ex. Verde</small>

                                <button type="submit" class="btn btn-primary" ><i class="fa fa-envolve-0"></i>&nbsp; Guardar</button>


                            </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
        $('.show-modal').click(function() {
          let acumulador;
          let id = $(this).data('id');
          $('#color').val($(this).data('color'));
          $('#modal-show').modal('show');
        });

      </script>

@endsection
