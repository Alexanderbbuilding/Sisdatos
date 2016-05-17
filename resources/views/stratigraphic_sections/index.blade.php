@extends('partials.app')

@section('title')
    Secciones estratográficas
@endsection

@section('css')
@endsection


@section('gestor')
    Gestor de Libros
@endsection

@section('content')


 
 <a href="{{url('/secciones_estratograficas/create')}}" class="btn btn-success">Crear Sección</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Descripcion</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($stratigraphic_sections as $stratigraphic_section)
         <tr>
             <td>{{ $stratigraphic_section->id }}</td>
             <td>{{ $stratigraphic_section->descripcion }}</td>
             <td><a href="{{url('secciones_estratograficas',$stratigraphic_section->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('secciones_estratograficas.edit',$stratigraphic_section->id)}}" class="btn btn-warning">Update</a></td>
             
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['secciones_estratograficas.destroy', $stratigraphic_section->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection