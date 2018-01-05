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
            </div>
        </div>
    </div>
@endsection