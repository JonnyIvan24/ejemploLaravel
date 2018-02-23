@extends('mivistaretorno)

@section('miseccion')
    <h1>Mi contenido </h1>

    @for($i=0;$i<=10;$i++)
        iteracion {{$i}}<br>
    @endfor
    <form action="formulario" method="post">
<p>
    <input type="text" name="nombre">
    {{$errors->first('nombre')}}
</p>
    <p>
        <input type="text" name="apellido">
    </p>
    <p>
        <input type="submit" value="Enviar">
        {{csrf_field()}}//"token" se tiene que poner al final de los formularios
    </p>
    </form>
@stop