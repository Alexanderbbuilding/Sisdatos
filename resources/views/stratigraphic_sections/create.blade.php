@extends('layout.template')

@section('title')
    Nueva Sección Estratográfica
@endsection

@section('gestor')
   Crear Sección Estratográfica
@endsection

@section('content')   
   
    @include('partials.notificaciones')

    {!! Form::open(['url' => 'secciones_estratograficas']) !!}
    <div class="form-group col-md-6">
        {!! Form::label('Descripción', 'Descripción:') !!}
        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
    </div>
    <div class="clearfix"></div>
    <div class="form-group col-md-6">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop