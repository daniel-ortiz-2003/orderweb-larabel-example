@extends('templates.base')
@section('title', 'Crear observación')
@section('header', 'Crear observación')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="legalization_date">Fecha de legalización</label>
                        <input type="date" class="form-control" id="legalization_date" required>
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
                            <option value="">Seleccione</option>
                            <option value="TULUA">TULUA</option>
                            <option value="CALI">CALI</option>
                            <option value="BUGA">BUGA</option>
                            <option value="PALMIRA">PALMIRA</option>
                        </select>
                    </div>
                    <div class="col-ig-6 mb-4">
                        <label for="causal_id">Tipo</label>
                        <select name="causal_id" id="causal_id" class="form-control">
                            <option value="">Seleccione</option>
                            <option value="TULUA">TULUA</option>
                            <option value="CALI">CALI</option>
                            <option value="BUGA">BUGA</option>
                            <option value="PALMIRA">PALMIRA</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="observation">Observación</label>
                        <input type="text" class="form-control" id="observation" required>
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
        </div>
    </div>
@endsection