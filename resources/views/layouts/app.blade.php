<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SuperAdmin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
        }
        .sidebar {
            width: 20%;
            background-color: #343a40;
            color: white;
            padding: 20px;
        }
        .sidebar h2 {
            margin-bottom: 30px;
        }
        .sidebar ul {
            list-style: none;
            padding-left: 0;
        }
        .sidebar ul li {
            margin-bottom: 15px;
        }
        .main-content {
            width: 80%;
            display: flex;
            flex-direction: column;
        }
        .topbar {
            background-color: #f8f9fa;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f1f1f1;
        }
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>LOGO</h2>
        <ul>
            <li>Dashboard</li>
            <li>Users</li>
            <li>Settings</li>
            <li>Reports</li>
        </ul>
    </div>

    <div class="main-content">
        <div class="topbar">
            <h4>Top Nav Bar</h4>
        </div>

        <div class="content">
            @yield('content')
        </div>

        <div class="footer">
            <p>&copy; 2025 SuperAdmin Dashboard</p>
        </div>
    </div>

</body>
</html>
