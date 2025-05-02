<?php
$events = json_decode(file_get_contents('events.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Events</title>
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
<body class="min-h-screen p-6 text-white">

  <!-- Home Button -->
   <a href="dashboard.php"><div class="fixed top-4 right-6 z-50">
    <button onclick="scrollToTop()" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white font-semibold shadow-lg">Home</button>
  </div></a>
  

  <!-- Events Section -->
  <div class="max-w-7xl mx-auto pt-10">
    <h1 class="text-4xl font-bold text-center mb-10">Events</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php foreach ($events as $event): ?>
        <div class="bg-white/80 backdrop-blur-md rounded-lg shadow-lg overflow-hidden text-black hover:scale-105 transform transition cursor-pointer"
             data-event='<?= htmlspecialchars(json_encode($event), ENT_QUOTES, 'UTF-8') ?>'
             onclick="handleCardClick(this)">
          <img src="<?= htmlspecialchars($event['image']) ?>" alt="Event Image" class="w-full h-48 object-cover">
          <div class="p-4">
            <h2 class="text-xl font-bold mb-1"><?= htmlspecialchars($event['name']) ?></h2>
            <p class="text-sm text-gray-700"><?= htmlspecialchars($event['type']) ?> | <?= htmlspecialchars($event['date']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Event Modal -->
  <div id="eventModal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
    <div class="bg-white text-black p-6 rounded-lg w-11/12 max-w-2xl relative overflow-y-auto max-h-[90vh] shadow-xl">
      <button onclick="closeModal()" class="absolute top-2 right-4 text-gray-700 hover:text-black text-3xl font-bold">&times;</button>

      <!-- Modal Content -->
      <img id="modalImage" src="" alt="Event" class="w-full h-64 object-cover rounded-lg mb-4">
      <h2 id="modalName" class="text-2xl font-bold"></h2>
      <p id="modalTypeDate" class="text-sm text-gray-600 mb-2"></p>
      <p id="modalDescription" class="mb-4 text-gray-700"></p>
      <p class="text-sm text-gray-500 mb-6">Uploaded by: <span id="modalUploader"></span></p>

      <!-- Participation Form -->
      <div class="bg-gray-50 p-4 rounded-lg shadow-inner">
        <h3 class="text-lg font-semibold mb-2">Participate in this Event</h3>
        <form id="participationForm" action="https://formspree.io/f/mgvkveob" method="POST" class="space-y-3">
          <input type="hidden" name="event_name" id="formEventName">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
            <input type="text" name="name" required class="border rounded px-4 py-2 w-full">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name="email" required class="border rounded px-4 py-2 w-full">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
            <textarea name="message" rows="3" placeholder="Your message or reason for joining..." class="border rounded px-4 py-2 w-full"></textarea>
          </div>
          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script>
    function handleCardClick(card) {
      const eventData = JSON.parse(card.getAttribute('data-event'));
      showModal(eventData);
    }

    function showModal(event) {
      document.getElementById('modalImage').src = event.image;
      document.getElementById('modalName').textContent = event.name;
      document.getElementById('modalTypeDate').textContent = `${event.type} | ${event.date}`;
      document.getElementById('modalDescription').textContent = event.description;
      document.getElementById('modalUploader').textContent = event.uploader || "Anonymous";
      document.getElementById('formEventName').value = event.name;
      document.getElementById('eventModal').classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('eventModal').classList.add('hidden');
    }

    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  </script>

</body>
</html>
