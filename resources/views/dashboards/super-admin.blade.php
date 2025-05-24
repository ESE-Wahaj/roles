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
      background-color: #1a1a1a; /* very dark */
      color: #fbbf24; /* golden yellow */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      overflow: hidden; /* remove scrolling */
    }
    /* Remove scrollbar */
    ::-webkit-scrollbar {
      display: none;
    }
    /* Sidebar and main fixed height, no scroll */
    body > * {
      height: 100vh;
    }
  </style>
</head>
<body class="flex h-full">

  <!-- Sidebar -->
  <aside class="w-1/5 bg-[#3b2f1a] p-6 flex flex-col text-yellow-400 border-r border-yellow-700">
    <h1 class="text-3xl font-extrabold mb-12 tracking-wide">SuperAdmin</h1>
    <nav class="flex flex-col gap-7 text-lg">
      <a href="#" class="hover:text-yellow-300 transition font-semibold">Dashboard</a>
      <a href="#" class="hover:text-yellow-300 transition">Users</a>
      <a href="#" class="hover:text-yellow-300 transition">Reports</a>
      <a href="#" class="hover:text-yellow-300 transition">Settings</a>
      <form method="POST" action="/logout" class="mt-auto">
        @csrf
        <button 
          type="submit" 
          class="w-full bg-yellow-600 hover:bg-yellow-500 rounded py-2 font-semibold text-black transition"
        >
          Logout
        </button>
      </form>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="w-4/5 flex flex-col bg-[#1a1a1a] p-8">
    <!-- Top Bar -->
    <header class="flex items-center justify-between bg-[#3b2f1a] rounded-lg px-6 py-4 shadow-sm mb-8 border border-yellow-700">
      <h2 class="text-2xl font-bold text-yellow-400">Super Admin Dashboard</h2>
      <p class="text-yellow-300 font-semibold">Welcome, SuperAdmin!</p>
    </header>

    <!-- First Row: 3 Cards -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 flex-grow">
      <div class="bg-[#3b2f1a] rounded-lg p-6 shadow-md border border-yellow-700 text-center">
        <h3 class="font-semibold text-lg mb-2">Total Users</h3>
        <p class="text-3xl font-bold">1,245</p>
      </div>
      <div class="bg-[#3b2f1a] rounded-lg p-6 shadow-md border border-yellow-700 text-center">
        <h3 class="font-semibold text-lg mb-2">Active Sessions</h3>
        <p class="text-3xl font-bold">321</p>
      </div>
      <div class="bg-[#3b2f1a] rounded-lg p-6 shadow-md border border-yellow-700 text-center">
        <h3 class="font-semibold text-lg mb-2">Pending Reports</h3>
        <p class="text-3xl font-bold">17</p>
      </div>
    </section>

    <!-- Second Row: 2 Small Cards + Chart -->
    <section class="flex flex-col lg:flex-row gap-6">
      <div class="w-full lg:w-1/5 bg-[#3b2f1a] rounded-lg p-6 shadow-md border border-yellow-700 text-center mb-6 lg:mb-0">
        <h3 class="font-semibold text-lg mb-2">System Alerts</h3>
        <p class="text-3xl font-bold">5</p>
      </div>
      <div class="w-full lg:w-1/5 bg-[#3b2f1a] rounded-lg p-6 shadow-md border border-yellow-700 text-center mb-6 lg:mb-0">
        <h3 class="font-semibold text-lg mb-2">Server Load</h3>
        <p class="text-3xl font-bold">72%</p>
      </div>
      <div class="w-full lg:w-3/5 bg-[#3b2f1a] rounded-lg p-6 shadow-md border border-yellow-700">
        <h3 class="font-semibold text-lg mb-4">Visitors Analytics</h3>
        <canvas id="analyticsChart" height="160"></canvas>
      </div>
    </section>

    <!-- Footer -->
    <footer class="mt-auto text-center text-yellow-600 text-sm py-4 border-t border-yellow-700">
      &copy; 2025 Super Admin Dashboard. All rights reserved.
    </footer>
  </main>

  <!-- Chart JS Script -->
  <script>
    const ctx = document.getElementById('analyticsChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'Visitors',
          data: [120, 190, 300, 500, 200, 300],
          backgroundColor: 'rgba(251, 191, 36, 0.2)', // golden transparent
          borderColor: 'rgba(251, 191, 36, 1)', // golden
          borderWidth: 2,
          tension: 0.3,
          fill: true,
          pointBackgroundColor: '#fbbf24',
          pointRadius: 5,
          pointHoverRadius: 7,
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { position: 'top', labels: { color: '#fbbf24' } },
          title: { display: false }
        },
        scales: {
          x: {
            ticks: { color: '#fbbf24' },
            grid: { color: '#5c4d1a' }
          },
          y: {
            ticks: { color: '#fbbf24' },
            grid: { color: '#5c4d1a' }
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
