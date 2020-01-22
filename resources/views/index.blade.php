@extends('template.template')

@section('myMain')

    <p>
        <a href="{{ route('post.create') }}">Aggiungi post</a>
    </p>

    @foreach ($posts as $post)
        
        <div class="ms_post">

            <p>
                <a href="{{ route('post.edit', $post->id) }}">Modifica post</a>
                <a href="{{ route('post.destroy', $post->id) }}">Elimina post</a>
            </p>

            <p>{{ $post->title }} - {{ $post->creation_time }}</p>
            <p>{{ $post->body }}</p>

            <p>Numero commenti metodo 1: ( {{ count($post->comments) }} )</p>
            <p>Numero commenti metodo 2: ( {{ $post->comments()->count() }} )</p>

            {{-- $post->comments() QUERY --}}
            {{-- $post->comments ARRAY --}}

            {{-- @foreach ($post->comments as $comment)
                @if ($comment->like > 0)
                    <p>Commento: {{ $comment->body }} - Data: {{ $comment->creation_time }} - Like: {{ $comment->like }}</p>
                @endif
            @endforeach --}}

            @foreach ($post->comments() -> where('like', '>', 0)->get() as $comment)
                <p>Commento: {{ $comment->body }} - Data: {{ $comment->creation_time }} - Like: {{ $comment->like }}</p>
            @endforeach

        </div>

    @endforeach
    
@endsection