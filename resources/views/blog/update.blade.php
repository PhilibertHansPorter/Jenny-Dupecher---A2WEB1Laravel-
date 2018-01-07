@extends('layouts.app')




@section('content')
    <div class="card">
        <div class="card-block">
            <form method="POST" action="{{action('CommentsController@update', $id = $comment->id)}}">

                {{ csrf_field() }}

                <div class="form-group">
                                <textarea name="body" class="form-control" placeholder="{{ $comment->body }}">

                                </textarea>
                </div>
                <div class="card-block">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection