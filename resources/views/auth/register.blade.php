@extends('welcome')
@section('content')
<div>
    <form action="{{url("auth/register")}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <label>Nombre:</label>
        <input name="name" />
        <label>Email: </label>
        <input name="email"/>
        <label>Clave</label>
        <input type="password" name="password"/>
        <label>Confirmar clave</label>
        <input type="password" name="password_confirmation"/>
        <button type="submit">
            Enviar
        </button>
    </form>
</div>
@endsection