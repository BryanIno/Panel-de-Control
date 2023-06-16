@extends('layouts.layouts')

@section('titulo','Graficos')

<h2 class="text-xl font-semibold leading-tight text-gray-800">
    @section('Principal','Graficos de los usuarios creados')
</h2>


@section('contenido')

<div class="container mb-3">
    <div class="row">
        <div class="shadow col">
            <div class="card">
                <!--<div class="card-header">Usuarios creados en el Mes</div> -->

                <div class="card-body">

                    <h1>{{ $chart->options['chart_title'] }}</h1>
                    {!! $chart->renderHtml() !!}
                    
                </div>
            </div>

        </div>
        <div class="shadow col">
            <div class="card">
                <!--<div class="card-header">Usuarios creados en el Mes</div> -->

                <div class="card-body">

                    <h1>{{ $chart2->options['chart_title'] }}</h1>
                    {!! $chart2->renderHtml() !!}

                </div>

            </div>
        </div>
    </div>
</div>
    

@endsection

@section('grafico')
    {!! $chart->renderChartJsLibrary() !!}
    {!! $chart->renderJs() !!}
    {!! $chart2->renderJs() !!}
@endsection