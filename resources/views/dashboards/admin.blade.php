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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50 min-h-screen flex">

    <!-- Sidebar -->
    <div class="w-1/5 bg-green-800 text-white min-h-screen p-6">
        <h1 class="text-2xl font-bold mb-10">ADMIN LOGO</h1>
        <ul class="space-y-6">
            <li class="hover:text-yellow-200 cursor-pointer">Home</li>
            <li class="hover:text-yellow-200 cursor-pointer">Tasks</li>
            <li class="hover:text-yellow-200 cursor-pointer">Messages</li>
            <li class="hover:text-yellow-200 cursor-pointer">Settings</li>
            <li class="hover:text-yellow-300 cursor-pointer">
                <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="w-4/5 flex flex-col">
        
        <!-- Top Bar -->
        <div class="bg-white shadow px-6 py-4 border-b">
            <h2 class="text-xl font-semibold">Admin Navigation</h2>
        </div>

        <!-- Content Area -->
        <div class="p-6 flex-1 overflow-auto space-y-6">
            
            <!-- First Row: 3 Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded shadow text-center">
                    <h3 class="text-lg font-semibold text-green-800">Overview 1</h3>
                    <p class="text-gray-500 mt-2">Info goes here</p>
                </div>
                <div class="bg-white p-4 rounded shadow text-center">
                    <h3 class="text-lg font-semibold text-green-800">Overview 2</h3>
                    <p class="text-gray-500 mt-2">Info goes here</p>
                </div>
                <div class="bg-white p-4 rounded shadow text-center">
                    <h3 class="text-lg font-semibold text-green-800">Overview 3</h3>
                    <p class="text-gray-500 mt-2">Info goes here</p>
                </div>
            </div>

            <!-- Second Row: 2 Cards + Chart -->
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Small Card 1 -->
                <div class="w-full lg:w-1/5 bg-white p-4 rounded shadow text-center">
                    <h3 class="text-lg font-semibold text-green-800">Widget A</h3>
                    <p class="text-gray-500 mt-2">Details</p>
                </div>

                <!-- Small Card 2 -->
                <div class="w-full lg:w-1/5 bg-white p-4 rounded shadow text-center">
                    <h3 class="text-lg font-semibold text-green-800">Widget B</h3>
                    <p class="text-gray-500 mt-2">Details</p>
                </div>

                <!-- Chart (60%) -->
                <div class="w-full lg:w-3/5 bg-white p-6 rounded shadow">
                    <h3 class="text-lg font-semibold mb-4 text-green-800">Performance Chart</h3>
                    <canvas id="adminChart" height="120"></canvas>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-green-800 text-white text-center py-3">
            &copy; 2025 Admin Dashboard. All rights reserved.
        </footer>
    </div>

    <!-- Chart Script -->
    <script>
        const ctx = document.getElementById('adminChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [{
                    label: 'Tasks Completed',
                    data: [5, 9, 3, 6, 2, 8],
                    backgroundColor: 'rgba(34, 197, 94, 0.5)',
                    borderColor: 'rgba(34, 197, 94, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    title: { display: false }
                }
            }
        });
    </script>

</body>
</html>





































<!-- <!DOCTYPE html>
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
</html> -->