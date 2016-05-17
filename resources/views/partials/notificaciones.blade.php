@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Error!</strong>
        <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (\Session::has('bien'))
    <div class="alert alert-success">
        <strong>Èxito!</strong>
        <br>
        <ul>
            @if(is_array($bien = \Session::get('bien')))
                @foreach ($bien as $ok)
                    {{ $ok }}
                @endforeach
            @else()
                {{\Session::get('bien')}}
            @endif
        </ul>
    </div>
@endif