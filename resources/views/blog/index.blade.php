@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Liste des articles</h1>
                    </div>

                    <div class="panel-body">
                        @foreach($posts as $post)
                            <div class="col-sm-6 col-md-4">
                                <h3>{{ $post->title }}</h3>
                                <p>
                                    {{ $post->body }}
                                </p>
                                <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-primary">
                                    Voir
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
                <a class="btn btn-primary" href="blog/create" role="button">Créer un article</a>
            </div>

        </div>

    </div>
@endsection