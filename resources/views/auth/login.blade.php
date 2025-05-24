<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
    <a href="/signup">Signup</a>
</body>
</html>


































