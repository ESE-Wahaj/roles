<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Admin Dashboard</h2>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html> -->






































<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-96">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Admin Dashboard</h2>
        <form method="POST" action="/logout" class="text-center">
            @csrf
            <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">
                Logout
            </button>
        </form>
    </div>
</body>
</html>