<!-- resources/views/auth/register.blade.php -->
@extends('layouts.master')

@section('title', 'Login')

@section('content')

    <div class="row">

        <div class="col-md-4 col-md-offset-4">

            <h1>Register</h1>
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}

                <div>
                    <label for="name">Name</label>
                    <input class="form-control" type="name" name="name" value="{{ old('name') }}">
                </div>

                <div>
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password_confirmation" class="form-control" name="password_confirmation" id="password_confirmation">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary form-control">Register</button>
                </div>
            </form>

        </div>

    </div>

@stop