@extends('layout.template')
@section('title')
    Actualizar Libro
@endsection

@section('gestor')
   Actualizar libro
@endsection

@section('content')
     @include('partials.notificaciones')
    {!! Form::model($book,['method' => 'PATCH','route'=>['books.update',$book->id]]) !!}
    <div class="form-group col-md-6">
        {!! Form::label('ISBN', 'ISBN:') !!}
        {!! Form::text('isbn',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('Title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('Author', 'Author:') !!}
        {!! Form::text('author',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('Publisher', 'Publisher:') !!}
        {!! Form::text('publisher',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="clearfix"></div>
    <div class="form-group col-md-6">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop