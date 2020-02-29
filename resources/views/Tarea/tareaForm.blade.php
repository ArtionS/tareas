@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Nueva Tarea</div>

                <div class="card-body">
                    
                    <form action="{{ route('tarea.store')}}" method="POST">
                          
                    @csrf

                    <!-- Text Area -->
                        <div>
                            <label for="tarea">Titulo</label>
                            <input class="form-control" type="text" placeholder="Titulo" name="tarea">
                        </div>

                    <!-- Fecha -->
                        <div>
                            <label for="fecha">Fecha de Entrega</label>
                            <input type="date" name="fecha_entrega">
                        </div>

                    <!-- Prioridad -->
                        <div class="form-group">
                            <label for="prioridad">Prioridad</label>
                            <select class="form-control" name="prioridad">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                    <!-- Text Area -->
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" name="descripcion" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-outline-primary">Submit</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection