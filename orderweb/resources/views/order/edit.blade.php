@extends('templates.base')
@section('title', 'Editar observación')
@section('header', 'Editar observación')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('order.update', $order['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="legalization_date">Fecha de legalización</label>
                        <input type="date" class="form-control" id="legalization_date" required
                        value="{{ $order['address'] }}">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="address">Dirección</label>
                        <input type="text" class="form-control" id="address" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-ig-6 mb-4">
                        <label for="city">Ciudad</label>
                        <select name="city" id="city" class="form-control">
                            @foreach ($cities as $city) 
                                <option value="{{ $city['value'] }}" @if ($city['value'] == $order['city']) selected @endif>
                                    {{ city['nme'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-ig-6 mb-4">
                        <label for="causal_id">Causal</label>
                        <select name="causal_id" id="causal_id" class="form-control">
                            <option value="">Seleccione</option>
                                @foreach ($causals as $causal) 
                                    <option value="{{ $causal['id'] }}" @if ($causal('id') == $order['causal_id']) selected @endif>
                                        {{ $causal['description'] }}
                                </option>      
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="observation">Observación</label>
                        <select name="observation_id" id="observation_id" class="form-control">
                            <option value="">Seleccione</option>
                                @foreach ($observations as $observation) 
                                    <option value="{{ $observation['id'] }}" @if ($observation['id'] == $order['observation_id']) selected @endif>
                                        {{ $observation['description'] }}
                                    </option>                 
                            @endforeach
                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('observation.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
            <hr>

            <div class="row">
                <div class="colo-lg-12 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary m-0">Añadir/Retirar actividades</h6>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <label for="table-data">Actividades disponibles</label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="table-data">Actividades agregadas</label>
                                </div>                            
                                </div>
                                 </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection