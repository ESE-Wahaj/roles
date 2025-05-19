<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin Dashboard Create Page</h1>
    <form action="{{route('dashboards.admindashboard.post')}}" method="post">
        @csrf
        <label>Name</label><br>
        <input type="text" name="name" placeholder="Name" required>
        <br>
        <label>Email</label><br>
        <input type="text" name="email" placeholder="Email" required>
        <br>
        <label>Phone</label><br>
        <input type="text" name="phone" placeholder="Phone" required>
        <br>
        <label>Address</label><br>
        <input type="text" name="address" placeholder="Address" required>
        <br>
        @foreach($pList as $list)
        <input type="radio" name="primary_id" value="{{$list->id}}" checked>{{$list->name}}
        @endforeach
        <br>
        <select name="choose" id="choose">
            @foreach($pList as $list)
            <option value="{{$list->id}}" name="primary_id">{{$list->name}}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
        <br>
        <a href="{{route('admindashboard.read')}}">View admindashboards</a>
    </form>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>