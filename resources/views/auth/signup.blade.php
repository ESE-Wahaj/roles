<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Signup</h2>
    <form method="POST" action="/signup">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <select name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="super-admin">Super Admin</option>
        </select>
        <button type="submit">Signup</button>
    </form>
    <a href="/login">Login</a>
</body>
</html>
