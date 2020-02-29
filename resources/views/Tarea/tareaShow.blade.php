@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Targetasa
                </div>
                    
                <div class="card-body">

                    <a href="{{ action('TareaController@index')}}" class="btn btn-primary btn-ms">Lista Tareas</a>

                    <br>   
                    <br>       

                    <label></label>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection