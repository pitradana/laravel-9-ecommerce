@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="cold-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        @if ($errors->any())
                            @foreach ($errors-all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        @endif

                        <form action="{{ route('edit_profile') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $user->name }}">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="">Roles</label>
                                <input type="role" class="form-control" value="{{ $user->is_admin ? 'Admin' : 'Member' }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Confirm password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Change profile details</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Role: {{ $user->is_admin ? 'Admin' : 'Member' }}</p>

    <form action="{{ route('edit_profile') }}" method="post">
        @csrf
        <br>
        <label>Name</label>
        <br>
        <input type="text" name="name" value="{{$user->name}}">
        <br>
        <label for="">Password</label>
        <br>
        <input type="password" name="password">
        <br>
        <label for="">Confirm password</label>
        <br>
        <input type="password" name="password_confirmation">
        <br>
        <button type="submit">Chane profil detail</button>
    </form>
</body>
</html> --}}