<!DOCTYPE html>
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
</html>