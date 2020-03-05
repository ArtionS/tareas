@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Nueva Tarea</div>

                <div class="card-body">
                
                <a href="{{ action('TareaController@index')}}" class="btn btn-primary btn-ms">Lista Tareas</a>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(isset($tarea))


                    {!! Form::model($tarea, ['route' => ['tarea.update' , $tarea->id], 'method'=>'PATCH']) !!}

                    <!-- <form action="{{ route('tarea.update' , $tarea->id)}}" method="POST"> -->
                    <!-- @method('PATCH') -->
                @else

                    {!! Form::open(['route' => 'tarea.store']) !!}

                    <!-- <form action="{{ route('tarea.store')}}" method="POST"> -->
                @endif

                          
                    <!-- @csrf -->

                    <!-- Text Area -->
                        <div>
                            <!-- <label for="tarea">Titulo</label> -->
                            {!! Form::label('tarea', 'Tarea'); !!}
                            
                            {!! Form::text('tarea', null, ['class' => 'form-control', 'id'=> 'tarea', 'required', 'placeholder' => 'Nombre de Tarea']) !!}

                            <!-- <input value="{{$tarea->tarea ?? ''}}" class="form-control" type="text" placeholder="Titulo" name="tarea"> -->
                        </div>

                    <!-- Fecha -->
                        <div>
                            <label for="fecha">Fecha de Entrega</label>

                            {!! form::date('fecha_entrega', null, ['class'=>'form-control']) !!}

                            <!-- <input value="{{$tarea->fecha_entrega ?? ''}}" type="date" name="fecha_entrega"> -->
                        </div>

                    <!-- Prioridad -->
                        <div class="form-group">
                            <label for="prioridad">Prioridad</label>

                            {!! Form::select('prioridad', [
                                    '1' => 'Baja' , 
                                    '2' => 'Media' , 
                                    '3' => 'Alta'
                                    ], null, ['class' => 'form-control'] ) !!}


                            <!-- <select class="form-control" name="prioridad">
                                <option {{ isset($tarea) && $tarea->prioridad == 1 ? 'selected' :  ''}}>1</option>
                                <option {{ isset($tarea) && $tarea->prioridad == 2 ? 'selected' :  ''}}>2</option>
                                <option {{ isset($tarea) && $tarea->prioridad == 3 ? 'selected' :  ''}}>3</option>
                            </select> -->
                        </div>

                    <!-- Text Area -->
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            {!! Form::textarea('descripcion' , null, ['class' => 'form-control' , 'rows'=>'3']) !!}
                            <!-- <textarea class="form-control" name="descripcion" rows="3">{{$tarea->descripcion ?? ''}}</textarea> -->
                        </div>

                        {!! Form::submit('Guardar' , ['class'=>'btn btn-outline-primary']) !!}

                        <!-- <button type="submit" class="btn btn-outline-primary">Guardar</button> -->


                    <!-- </form> -->
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection