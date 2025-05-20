<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Super Admin Create Page</h1>
    <form action="{{route('dashboards.superadmindashboard.post')}}" method="post">
        @csrf
        <label>Name</label><br>
        <input type="text" name="name" placeholder="Name" required>
        <label>Email</label><br>
        <input type="text" name="email" placeholder="Email" required>
        <label>Phone</label><br>
        <input type="text" name="phone" placeholder="Phone" required>
        <label><Address></Address></label><br>
        <input type="text" name="address" placeholder="Address" required>

        
        <button type="submit">Submit</button>
        <a href="{{route('dashboards.superadmindashboard.read')}}">View superadmindashboards</a>
    </form>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>