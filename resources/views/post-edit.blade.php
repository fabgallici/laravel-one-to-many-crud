@extends('template.template')

@section('myMain')
    <form action=" {{ route('post.update', $post->id) }} " method="post">
        @csrf
        @method('POST')
        <label for="creation_time">Data</label>
        <input type="text" value="{{ $post->creation_time }}" name="creation_time">
        <label for="title">Titolo post</label>
        <input type="text" value="{{ $post->title }}" name="title">
        <label for="body">Tuo post</label>
        <input type="text" value="{{ $post->body }}" name="body">
        <button type="submit">Modifica il post</button>    
    </form>
@endsection