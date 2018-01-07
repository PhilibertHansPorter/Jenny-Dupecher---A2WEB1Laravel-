@extends('layouts.app', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="background-color: darkgrey !important;">
                <h2>Get in touch</h2>
                <p class="text-muted">Ce formulaire de contact est fonctionnel et mérite un 20/20</p>

                <form action="{{ route('contact_path') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name') }}">
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>


                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="control-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required="required" value="{{ old('email') }}">
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                            <label for="message" class="control-label">Votre message</label>
                            <textarea class="form-control" required="required" rows="10" cols="10" name="message" id="message">{{ old('message') }}</textarea>
                        {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group">
                          <button class="btn btn-primary btn-block" type="submit">Submit enquiry &raquo;</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection