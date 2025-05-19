<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Superadmin Dashboards Read Page</h1>
    <a href="{{route('dashboards.superadmindashboard.create')}}">View Create Page for Super Admin</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superadmindashboards as $superadmindashboard)
                <tr>
                    <td>{{$superadmindashboard->name}}</td>
                    <td>{{$superadmindashboard->email}}</td>
                    <td>{{$superadmindashboard->phone}}</td>
                    <td>{{$superadmindashboard->address}}</td>
                    <td>
                        <form action="{{route('dashboards.superadmindashboard.edit')}}" method="post">
                            @csrf
                            <input type="hidden" name="edit" value="{{$superadmindashboard->id}}">
                            <input type="submit" value="Edit">
                        </form>
                        <br>
                        <form action="{{route('dashboards.superadmindashboard.delete')}}" method="post">
                            @csrf
                            <input type="hidden" name="delete" value="{{$superadmindashboard->id}}">
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