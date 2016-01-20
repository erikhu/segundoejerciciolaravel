@extends('welcome')
@section('content')
<div>
    <form action="{{url('auth/login')}}" method="POST">
        <label>Correo:</label>
        <input name="email" />
        <label>Clave</label>
        <input name="password">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <button type="submit">Enviar</button>
    </form>
</div>

@endsection    