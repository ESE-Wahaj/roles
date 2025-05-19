<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin Dashboard Read page</h1>
    <table border=1 >
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Parent Name</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($admindashboards as $admindashboard)
                <tr>
                    <td>{{$admindashboard->name}}</td>
                    <td>{{$admindashboard->email}}</td>
                    <td>{{$admindashboard->phone}}</td>
                    <td>{{$admindashboard->address}}</td>
                    
                    <td>{{$admindashboard->primary->name}}</td>
                    
                    <td>
                        <form action="{{route('dashboards.admindashboard.edit')}}" method="post">
                            @csrf
                            <input type="hidden" name="edit" value="{{$admindashboard->id}}">
                            <input type="submit" value="Edit">
                        </form>
                        <br>
                        <form action="{{route('dashboards.admindashboard.delete')}}" method="post">
                            @csrf
                            <input type="hidden" name="delete" value="{{$admindashboard->id}}">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>