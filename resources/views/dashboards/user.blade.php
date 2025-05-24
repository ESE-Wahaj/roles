<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>User Dashboard</h2>
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
  <title>User Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    html, body {
      margin: 0; padding: 0; height: 100%;
      background-color: #121212; /* near black */
      color: #E0E0E0; /* light gray */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      overflow: hidden;
    }
  </style>
</head>
<body class="flex h-screen w-screen">

  <!-- Sidebar -->
  <aside class="bg-[#1e1e1e] w-56 p-6 flex flex-col space-y-10 border-r border-gray-800">
    <h1 class="text-3xl font-semibold tracking-wide text-white">Dashboard</h1>
    <nav class="flex flex-col space-y-5 text-gray-400 text-base">
      <a href="#" class="hover:text-white transition">Overview</a>
      <a href="#" class="hover:text-white transition">Orders</a>
      <a href="#" class="hover:text-white transition">Settings</a>
      <form method="POST" action="/logout" class="mt-auto">
        @csrf
        <button type="submit" 
          class="w-full bg-gray-800 hover:bg-gray-700 text-white py-2 rounded transition"
        >Logout</button>
      </form>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8 flex flex-col overflow-y-auto">
    <header class="mb-8">
      <h2 class="text-4xl font-bold text-white mb-1">User Dashboard</h2>
      <p class="text-gray-500 text-sm">Welcome back! Here's your activity summary.</p>
    </header>

    <!-- Cards Grid -->
    <section class="grid grid-cols-2 gap-6 mb-8">
      <div class="bg-[#242424] rounded-lg p-6 shadow-sm border border-gray-800">
        <h3 class="text-gray-400 font-medium mb-2">Total Orders</h3>
        <p class="text-white text-3xl font-bold">24</p>
      </div>
      <div class="bg-[#242424] rounded-lg p-6 shadow-sm border border-gray-800">
        <h3 class="text-gray-400 font-medium mb-2">Pending Tasks</h3>
        <p class="text-white text-3xl font-bold">6</p>
      </div>
      <div class="bg-[#242424] rounded-lg p-6 shadow-sm border border-gray-800">
        <h3 class="text-gray-400 font-medium mb-2">Messages</h3>
        <p class="text-white text-3xl font-bold">10</p>
      </div>
      <div class="bg-[#242424] rounded-lg p-6 shadow-sm border border-gray-800">
        <h3 class="text-gray-400 font-medium mb-2">Notifications</h3>
        <p class="text-white text-3xl font-bold">4</p>
      </div>
    </section>

    <!-- Chart Section -->
    <section class="bg-[#242424] rounded-lg p-6 shadow-sm border border-gray-800">
      <h3 class="text-gray-400 font-semibold mb-4">Activity Overview</h3>
      <canvas id="userChart" height="180" style="max-height: 240px;"></canvas>
    </section>
  </main>

  <!-- Chart JS -->
  <script>
    const ctx = document.getElementById('userChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        datasets: [{
          label: 'Activity',
          data: [3, 4, 2, 5, 3, 6, 4],
          borderColor: '#90caf9',  // subtle blue
          backgroundColor: 'rgba(144, 202, 249, 0.2)',
          fill: true,
          tension: 0.3,
          pointBackgroundColor: '#90caf9',
          pointRadius: 4,
          pointHoverRadius: 6,
          borderWidth: 2
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false }
        },
        scales: {
          x: {
            ticks: { color: '#a0aec0' },
            grid: { color: '#2d3748' }
          },
          y: {
            ticks: { color: '#a0aec0' },
            grid: { color: '#2d3748' }
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
    <title>User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-96">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">User Dashboard</h2>
        <form method="POST" action="/logout" class="text-center">
            @csrf
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Logout
            </button>
        </form>
    </div>
</body>
</html> -->
