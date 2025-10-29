<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
        <form action="{{ route('register.handleForm') }}" method="POST">
            @csrf
            <label for="">name</label>
            <input type="text" name="name"><br>
            @error('name')
               <p class="">{{ $message }}</p>
            @enderror
            <label for="">email</label>
            <input type="email" name="email"><br>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
            <label for="">password</label>
            <input type="password" name="password"><br>
            @error('password')
                <p>{{ $message }}</p>
            @enderror
            <label for="">confirme password</label>
            <input type="password" name="confirmer"><br>
            @error('name')
               <p>{{ $message }}</p>
            @enderror
            <input type="submit" value="submit">
        </form>
</body>
</html>
