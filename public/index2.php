<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Event Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-image: url('https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659702c8b37cb3dce69dd8b9_Groootin%20Gradient%20BG%20(1)%201.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
  </style>
</head>
<body class="bg-gray-100 p-4">
  <div class="text-right mb-4">
    <a href="logout.php" class="text-sm text-blue-600 hover:underline">Logout</a>
  </div>
  <div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold text-center mb-6" style="color: white;">Community Event Dashboard</h1>

    <!-- Event Form -->
    <div class="bg-white p-6 rounded shadow mb-6">
      <form id="eventForm" class="space-y-4" enctype="multipart/form-data">
        <div>
          <label class="block font-semibold">Event Name</label>
          <input type="text" name="name" class="w-full p-2 border rounded" required />
        </div>
        <div>
          <label class="block font-semibold">Event Type</label>
          <select name="type" class="w-full p-2 border rounded" required>
            <option value="All">All</option>
            <option value="Hackathon">Hackathon</option>
            <option value="Codathon">Codathon</option>
            <option value="Dance">Dance</option>
            <option value="Workshop">Workshop</option>
            <option value="Music">Music</option>
            <option value="Freelancing">Freelancing</option>
            <option value="Cooking">Cooking</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div>
          <label class="block font-semibold">Date</label>
          <input type="date" name="date" class="w-full p-2 border rounded" required />
        </div>
        <div>
          <label class="block font-semibold">Description</label>
          <textarea name="description" class="w-full p-2 border rounded" required></textarea>
        </div>
        <div>
          <label class="block font-semibold">Image URL</label>
          <input type="url" name="image" class="w-full p-2 border rounded" placeholder="https://example.com/image.jpg" />
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Event</button>
      </form>
    </div>

    <!-- Filter -->
    <div class="mb-4">
      <label class="block font-semibold mb-1" style="color: white">Filter by Type:</label>
      <select id="filterType" class="p-2 border rounded w-full">
        <option value="All">All</option>
        <option value="Hackathon">Hackathon</option>
        <option value="Codathon">Codathon</option>
        <option value="Dance">Dance</option>
        <option value="Workshop">Workshop</option>
        <option value="Music">Music</option>
        <option value="Freelancing">Freelancing</option>
        <option value="Cooking">Cooking</option>
        <option value="Other">Other</option>
      </select>
    </div>

    <!-- Event List -->
    <!-- <div id="eventList" class=" flex flex-row space-y-4"></div> -->


<!--// I can change this part of the code -->

      <!-- Events Container -->
      <div id="eventList" class="flex flex-col-reverse gap-4 max-w-xl mx-auto p-4">

        <!-- Event Card -->
        <div class="event-card bg-white shadow-md rounded-2xl p-4">
          <h3 class="text-xl font-bold text-gray-800 mb-2">Event Title 1</h3>
          <p class="text-gray-600">This is the latest event description.</p>
        </div>

        <div class="event-card bg-white shadow-md rounded-2xl p-4">
          <h3 class="text-xl font-bold text-gray-800 mb-2">Event Title 2</h3>
          <p class="text-gray-600">This is an older event with its description.</p>
        </div>

      </div>





  </div>

  <script>
    const form = document.getElementById('eventForm');
    const eventList = document.getElementById('eventList');
    const filterType = document.getElementById('filterType');

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(form);
      const data = Object.fromEntries(formData.entries());

      const res = await fetch('backend.php', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {
          'Content-Type': 'application/json'
        }
      });

      if (res.ok) {
        form.reset();
        loadEvents();
      }
    });

    filterType.addEventListener('change', () => {
      loadEvents();
    });

    async function loadEvents() {
      const res = await fetch('backend.php');
      const events = await res.json();
      const typeFilter = filterType.value;

      eventList.innerHTML = '';
      events.filter(event => typeFilter === 'All' || event.type === typeFilter).forEach((event, index) => {
        const div = document.createElement('div');
        div.className = 'bg-white p-4 rounded shadow relative flex items-center space-x-4';

        div.innerHTML = `
          <button onclick="deleteEvent(${index})" class="absolute top-2 right-2 text-red-500 hover:text-red-700">&times;</button>
          ${event.image ? `<img src="${event.image}" alt="Event Image" class="w-32 h-32 object-cover rounded">` : ''}
          <div>
            <h2 class="text-xl font-bold">${event.name} (${event.type})</h2>
            <p class="text-sm text-gray-600">Date: ${event.date}</p>
            <p>${event.description}</p>
          </div>
        `;
        eventList.appendChild(div);
      });
    }

    async function deleteEvent(index) {
      if (confirm('Are you sure you want to delete this event?')) {
        await fetch('backend.php', {
          method: 'DELETE',
          headers: {'Content-Type': 'application/json'},
          body: JSON.stringify({ index })
        });
        loadEvents();
      }
    }

    loadEvents();
  </script>
</body>
</html>
