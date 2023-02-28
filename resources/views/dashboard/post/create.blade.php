<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1>Crear Post</h1>
    <form action="{{ route('post.store')}}" method='post'>
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="title">
        <label for="">Slug</label>
        <input type="text" name="slug">
        <label for="">Categoria</label>
        <select name="category_id" id="">
            <option value=""></option>
                @foreach ($categories as $c)
                    <option value="{{ $c->id}}">{{$c->title}} </option>
                @endforeach
                </select>
                <label for="">Posteado</label>
                <select name="posted">
                    <option value="yes">si</option>
                    <option value="not">no</option>

                </select>

        <label for="">Contenido</label>
        <input type="text" name="contenido">
        <label for="">Descripcion</label>
        <input type="text" name="descripcion">
        <button type="submit">Enviar</button>

    </body>
</html>