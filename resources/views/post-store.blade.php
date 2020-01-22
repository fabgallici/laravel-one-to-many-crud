@extends('template.template')

@section('myMain')
    <form action=" {{ route('post.store') }} " method="post">
        @csrf
        @method('POST')
        <label for="creation_time">Data</label>
        <input type="text" value="2020-02-20 06:21:20" name="creation_time">
        <label for="title">Titolo post</label>
        <input type="text" value="0" name="title">
        <label for="body">Tuo post</label>
        <input type="text" value="body" name="body">
        <button type="submit">Crea il post</button>    
    </form>
@endsection