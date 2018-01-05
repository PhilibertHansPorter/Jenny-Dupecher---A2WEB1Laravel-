@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Création d'un article</h1>
                    </div>

                    <div class="panel-body">
                        @if(count($errors) > 0)
                            <ul class="bg-danger">
                                @foreach($errors->all() as $error)
                                    <li><b>{{ $error }}</b></li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{ route('blog.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                                <input class="form-control" type="text" name="title" placeholder="Titre"
                                       value="{{ old('title') }}">
                            </div>
                            <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                                <textarea class="form-control" name="body" cols="30" rows="10"
                                          placeholder="Texte">{{ old('body') }}</textarea>
                            </div>
                            <div class="form-group">
                                <select name="status" id="" class="form-control">
                                    <option value="1">Brouillon</option>
                                    <option value="2">Publié</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button class="btn">Sauvegarder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection