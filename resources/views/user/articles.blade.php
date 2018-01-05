@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Mes articles</h1>
                    </div>

                    <div class="panel-body">
                        @foreach($articles as $article)
                            <div class="col-sm-6 col-md-4">
                                <h3>Titre: {{ $article->title }}</h3>
                                <hr>
                                <p>
                                    {{ $article->body }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection