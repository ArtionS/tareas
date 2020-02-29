@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Descripción Tarea
                </div>
                    
                <div class="card-body">

                    <a href="{{ action('TareaController@index')}}" class="btn btn-primary btn-ms">Lista Tareas</a>

                    <br>   
                    <br>   

                     <table class="table">
                       <thead class="thead-dark">
                       </thead>
                       <tbody>
                         <tr>
                           <td>ID</td>
                           <td>{{$tarea->id}}</td>
                         </tr>

                         <tr>
                           <td>Tarea</td>
                           <td>{{$tarea->tarea}}</td>
                         </tr>
                         <tr>
                           <td>Prioridad</td>
                           <td>{{$tarea->prioridad}}</td>
                         </tr>
                         <tr>
                           <td>Fecha de Entrega</td>
                           <td>{{$tarea->fecha_entrega}}</td>
                         </tr>
                         <tr>
                           <td>Descripción</td>
                           <td>{{$tarea->descripcion}}</td>
                         </tr>
                         <tr>
                           <td>Fecha de Cración</td>
                           <td>{{$tarea->created_at}}</td>
                         </tr>
                         <tr>
                           <td>Fecha de Actualización</td>
                           <td>{{$tarea->updated_at}}</td>
                         </tr>
                       </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection