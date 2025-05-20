<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin Dashboard Update Page</h1>
    <form action="{{route('dashboards.admindashboard.update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$admindashboard->id}}">
        <label>Name</label><br>
        <input type="text" name="name" placeholder="Name" value="{{$admindashboard->name}}" required>
        <label>Email</label><br>
        <input type="text" name="email" placeholder="Email" value="{{$admindashboard->email}}" required>
        <label>Phone</label><br>
        <input type="text" name="phone" placeholder="Phone" value="{{$admindashboard->phone}}" required>
        <label>Address</label><br>
        <input type="text" name="address" placeholder="Address" value="{{$admindashboard->address}}" required>
        <label>Parent Name</label><br>
        <select name="choose" required>
            @foreach($pList as $list)
                <option value="{{$list->id}}" name="primary_id">{{$list->name}}</option>
            @endforeach
        </select>
        
        <button type="submit">Submit</button>
        <a href="{{route('dashboards.admindashboard.read')}}">View admindashboards</a>
    </form>
    
    
</body>
</html>