@extends('layouts.master')

@section('title', 'Login')

@section('content')

    <div class="row">

        <div class="col-md-4 col-md-offset-4">

            <form method="POST" action="/auth/login" class="form-group">
                {!! csrf_field() !!}

                <div>
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
            </form>

        </div>

    </div>

@stop