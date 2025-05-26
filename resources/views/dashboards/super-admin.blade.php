<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Super Admin Dashboard</h2>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html> -->










<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Super Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      background-color: white;
      color: black;
      font-family: Arial, sans-serif;
    }
    body > * {
      height: 100vh;
    }
  </style>
</head>
<body class="flex h-full">

  <!-- Sidebar -->
  <aside class="w-1/5 bg-gray-100 p-6 flex flex-col border-r border-gray-300">
    <h1 class="text-2xl font-bold mb-10">SuperAdmin</h1>
    <nav class="flex flex-col gap-5 text-base">
      <a href="#">Dashboard</a>
      <a href="#">Users</a>
      <a href="#">Reports</a>
      <a href="#">Settings</a>
      <form method="POST" action="/logout" class="mt-auto">
        @csrf
        <button type="submit" class="w-full bg-black text-white py-2">
          Logout
        </button>
      </form>
      
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="w-4/5 flex flex-col p-6 bg-white">
    <!-- Top Bar -->
    <header class="flex items-center justify-between bg-gray-200 px-4 py-3 mb-6">
      <h2 class="text-xl font-bold">Super Admin Dashboard</h2>
      <p>Welcome, SuperAdmin!</p>
    </header>

    <!-- Cards -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
      <div class="bg-gray-100 p-4 text-center">
        <h3 class="font-semibold mb-2">Total Users</h3>
        <p class="text-2xl font-bold">1,245</p>
      </div>
      <div class="bg-gray-100 p-4 text-center">
        <h3 class="font-semibold mb-2">Active Sessions</h3>
        <p class="text-2xl font-bold">321</p>
      </div>
      <div class="bg-gray-100 p-4 text-center">
        <h3 class="font-semibold mb-2">Pending Reports</h3>
        <p class="text-2xl font-bold">17</p>
      </div>
    </section>

    <!-- Second Row: Cards + Chart -->
    <section class="flex flex-col lg:flex-row gap-4">
      <div class="w-full lg:w-1/5 bg-gray-100 p-4 text-center">
        <h3 class="font-semibold mb-2">System Alerts</h3>
        <p class="text-2xl font-bold">5</p>
      </div>
      <div class="w-full lg:w-1/5 bg-gray-100 p-4 text-center">
        <h3 class="font-semibold mb-2">Server Load</h3>
        <p class="text-2xl font-bold">72%</p>
      </div>
      <div class="w-full lg:w-3/5 bg-gray-100 p-4">
        <h3 class="font-semibold mb-4">Visitors Analytics</h3>
        <canvas id="analyticsChart" height="160"></canvas>
      </div>
    </section>

    <!-- Footer -->
    <footer class="mt-auto text-center text-sm py-4 border-t border-gray-300">
      &copy; 2025 Super Admin Dashboard. All rights reserved.
    </footer>
  </main>

  <!-- Chart Script -->
  <script>
    const ctx = document.getElementById('analyticsChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'Visitors',
          data: [120, 190, 300, 500, 200, 300],
          backgroundColor: 'rgba(0,0,0,0.1)',
          borderColor: 'black',
          borderWidth: 2,
          tension: 0.3,
          fill: true,
          pointBackgroundColor: 'black',
          pointRadius: 4
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { position: 'top', labels: { color: 'black' } },
        },
        scales: {
          x: {
            ticks: { color: 'black' },
            grid: { color: '#ccc' }
          },
          y: {
            ticks: { color: 'black' },
            grid: { color: '#ccc' }
          }
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
    <title>Super Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-96">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Super Admin Dashboard</h2>
        <form method="POST" action="/logout" class="text-center">
            @csrf
            <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 transition duration-300">
                Logout
            </button>
        </form>
    </div>
</body>
</html> -->
