@extends('layout/template')
@section('title')
    {{$stratigraphic_sections->descripcion}}
@endsection

@section('gestor')
    Detalle Sección estratográfica
@endsection

@section('content')
    

    <form class="form-horizontal">
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Id</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder={{$stratigraphic_sections->id}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Descripción</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder={{$stratigraphic_sections->descripcion}} readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('secciones_estratograficas')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop