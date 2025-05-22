@extends('templates.base')
@section('title', 'observaciones')
@section('header', 'observaciones')
@section('content')
    
    <div class="row">
        <div class="col-lg-12 mb-4 d-grid gap-2 d-md-block">
            <a href="{{ route('order.create') }}" class="btn btn-primary">Crear</a>
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
                @foreach ($orders as $order)  
                <tr>
                <tr>
                    <td>{{ ordes['id'] }}</td>
                    <td>{{ ordes['legalization_date'] }}</td>
                    <td>{{ ordes['address'] }}</td>
                    <td>{{ ordes['city'] }}</td>
                    <td>{{ $order->causal->description }}</td>
                    <td>@if ($order->observation) {{ $order->observation->description }} @endif </td>
                    <td>
                        <a href="{{ route(order.edit, $order['id'])}}" class="btn btn-primary btn-circle btn-sm" title="Ver">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route(ordrer.destroy, $order['id'])}}" class="btn btn-primary btn-circle btn-sm" title="
                </tr>
                
                        <a href="#" class="btn btn-primary btn-circle btn-sm" title="Editar">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-circle btn-sm" title="Eliminar"
                            onclick="return remove();">
                            <i class="fas fa-trans"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
              </tbody>

            </table>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{ asset('js/general.js') }}"></script>
@endsection