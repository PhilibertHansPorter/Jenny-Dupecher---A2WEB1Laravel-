@extends('templates.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h2>{{ $post->title }}</h2>
                        @if($post->user)

                            <h3>Auteur: {{ $post->user->name }}</h3>

                        @endif

                    </div>

                    <div class="panel-body">

                        <p>
                            {{ $post->body }}
                        </p>
                    </div>
                </div>
                <div class="comments">
                    <ul class="list-group">
                        @foreach($post->comments as $comment)
                            <li class="list-group-item">
                                {{ $comment->body }}

                                @if(Auth::user()->id === $comment->user_id)
                                    <a href=" {{ action('CommentsController@showUpdateCommentForm', $id = $comment->id) }}">Modify</a>
                                @endif
                            </li>

                        @endforeach
                    </ul>

                </div>
                <hr>
                <div class="card">
                    <div class="card-block">
                        <form method="POST" action="{{ action('CommentsController@store', $id = $post->id) }}">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <textarea name="body" class="form-control">

                                </textarea>
                            </div>
                            <div class="card-block">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Publish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection