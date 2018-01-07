@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" >
                        <h1>Mes articles</h1>
                    </div>

                    <div class="panel-body" style="background-color: darkgrey !important;">
                        @foreach($articles as $article)
                            <div class="col-sm-6 col-md-4" >
                                <h3>Titre: {{ $article->title }}</h3>
                                <hr>
                                <p>
                                    {{ $article->body }}
                                </p>
                                <a href="{{ route('blog.show', $article->slug) }}" class="btn btn-primary">
                                    Voir
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection