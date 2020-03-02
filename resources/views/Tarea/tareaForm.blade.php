@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Nueva Tarea</div>

                <div class="card-body">
                
                @if(isset($tarea))
                    <form action="{{ route('tarea.update' , $tarea->id)}}" method="POST">
                    @method('PATCH')
                @else
                    <form action="{{ route('tarea.store')}}" method="POST">
                @endif

                          
                    @csrf

                    <!-- Text Area -->
                        <div>
                            <label for="tarea">Titulo</label>
                            <input value="{{$tarea->tarea ?? ''}}" class="form-control" type="text" placeholder="Titulo" name="tarea">
                        </div>

                    <!-- Fecha -->
                        <div>
                            <label for="fecha">Fecha de Entrega</label>
                            <input value="{{$tarea->fecha_entrega ?? ''}}" type="date" name="fecha_entrega">
                        </div>

                    <!-- Prioridad -->
                        <div class="form-group">
                            <label for="prioridad">Prioridad</label>
                            <select class="form-control" name="prioridad">
                                <option {{ isset($tarea) && $tarea->prioridad == 1 ? 'selected' :  ''}}>1</option>
                                <option {{ isset($tarea) && $tarea->prioridad == 2 ? 'selected' :  ''}}>2</option>
                                <option {{ isset($tarea) && $tarea->prioridad == 3 ? 'selected' :  ''}}>3</option>
                            </select>
                        </div>

                    <!-- Text Area -->
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" name="descripcion" rows="3">{{$tarea->descripcion ?? ''}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-outline-primary">Guardar</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection