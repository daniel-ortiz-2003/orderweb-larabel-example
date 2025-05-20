@extends('templates.base')
@section('title', 'observaciones')
@section('header', 'observaciones')
@section('content')
    
    <div class="row">
        <div class="col-lg-12 mb-4 d-grid gap-2 d-md-block">
            <a href="{{ route('observation.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                
              <thead>
                <tr>
                    <th>Id</th>
                    <th>fecha de legalización</th>
                    <th>Dirección</th>
                    <th>ciudad</th>
                    <th>Causal</th>
                    <th>Observación</th>
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>Orden de prueba</td>
                    <td>2025/02/15</td>
                    <td>tulua</td>
                    <td>causal de prueba</td>
                    <td>observación de prueba</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-circle btn-sm" title="Editar">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-circle btn-sm" title="Eliminar"
                            onclick="return remove();">
                            <i class="fas fa-trans"></i>
                        </a>
                    </td>
                </tr>
              </tbody>

            </table>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{ asset('js/general.js') }}"></script>
@endsection