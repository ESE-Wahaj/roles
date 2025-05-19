<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Super Admin Update Page</h1>
    <form action="{{route('dashboards.superadmindashboard.update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$superadmindashboard->id}}">
        <label>Name</label><br>
        <input type="text" name="name" placeholder="Name" value="{{$superadmindashboard->name}}" required>
        <label>Email</label><br>
        <input type="text" name="email" placeholder="Email" value="{{$superadmindashboard->email}}" required>
        <label>Phone</label><br>
        <input type="text" name="phone" placeholder="Phone" value="{{$superadmindashboard->phone}}" required>
        <label><Address></Address></label><br>
        <input type="text" name="address" placeholder="Address" value="{{$superadmindashboard->address}}" required>
        <button type="submit">Submit</button>
        <a href="{{route('dashboards.superadmindashboard.read')}}">View superadmindashboards</a>
    </form>
    
</body>
</html>