@extends('template.template')

@section('myMain')
    @foreach ($comments as $comment)

        {{-- <p>Commenti fratelli
            @foreach ($comment->post->comments as $comment)
                <p>
                    ID Post: {{ $comment->post_id }}
                    Data commento: {{ $comment->creation_time }} - 
                    Like totali commento: {{ $comment->like }} - 
                    ID commento: [{{ $comment->id }}]
                </p>
            @endforeach
        </p> --}}

        <div class="ms_post">
            <p>
                ID del post del commento: [{{ $comment->post ->id }}]
                Post del commento: {{ $comment->post ->title }} |  
                Data del post del commento: {{ $comment->post ->creation_time }} | 
                Contenuto del post del commento: {{ $comment->post ->body }}
            </p>
            <p>
                Data commento: {{ $comment->creation_time }} - 
                Like totali commento: {{ $comment->like }} - 
                ID commento: [{{ $comment->id }}]
            </p>
            <p>{{ $comment->body }}</p>
        </div>
    @endforeach
@endsection