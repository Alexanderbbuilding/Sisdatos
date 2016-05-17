@extends('layout.template')
@section('title')
    Actualizar Sección Estratográfica
@endsection

@section('gestor')
   Actualizar Sección
@endsection

@section('content')
     @include('partials.notificaciones')
    {!! Form::model($stratigraphic_sections,['method' => 'PATCH','route'=>['secciones_estratograficas.update',$stratigraphic_sections->id]]) !!}
    <div class="form-group col-md-6">
        {!! Form::label('Descripción', 'Descripción:') !!}
        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
    </div>
    <div class="clearfix"></div>
    <div class="form-group col-md-6">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop