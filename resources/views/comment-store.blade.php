@extends('template.template')

@section('myMain')
    <form action=" {{ route('comment.store') }} " method="post">
        @csrf
        @method('POST')
        <label for="id">ID del post da commentare</label>
        <input type="text" value="1" name="post_id">
        <label for="creation_time">Data</label>
        <input type="text" value="2020-02-20 06:21:20" name="creation_time">
        <label for="like">Like</label>
        <input type="text" value="0" name="like">
        <label for="body">Tuo commento</label>
        <input type="text" value="body" name="body">
        <button type="submit">Commenta il post</button>    
    </form>
@endsection