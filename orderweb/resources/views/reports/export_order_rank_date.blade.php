@extends('templates.base_reports')
@section('header', 'Reporte de ordenes por rango de tiempo')
@section('content')
    <section id="result">
        @if (count($orders) != 0)

            <p style="font-size: 14px">
                <strong>Fecha de legalización desde:</strong> {{ $start_date }}
                <br>
                <strong>Fecha de legalización hasta:</strong> {{ $end_date }}
            </p>
            <br><hr>

            <table id="reportTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha de legalización</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Causal</th>
                        <th>Observación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order['id'] }}</td>
                            <td>{{ date('d/m/Y', strtotime($order['legalization_date'])) }}</td>
                            <td>{{ $order['address'] }}</td>
                            <td>{{ $order['city'] }}</td>
                            <td>{{ $order->causal->description }}</td>
                            <td>@if ($order->observation) 
                                {{ $order->observation->description }}
                            @endif</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p><strong>No existen resultados en el reporte.</strong></p>
        @endif
    </section>

@endsection