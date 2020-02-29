@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Targetasa
                </div>
                    
                <div class="card-body">

                    <a href="{{ action('TareaController@create')}}" class="btn btn-primary btn-ms">Nueva Tarea</a>

                    <br>   
                    <br>                    

                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Tarea</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Prioridad</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tareas as $tarea)

                        <tr>
                          <td>{{$tarea->id}}</td>
                          <td>
                            <a href="{{route('tarea.show' , $tarea->id)}}">{{$tarea->tarea}} </a>
                          </td>
                          <td>{{$tarea->descripcion}}</td>
                          <td>{{$tarea->prioridad}}</td>
                        </tr>
    
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection