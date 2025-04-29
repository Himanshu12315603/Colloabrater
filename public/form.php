<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Join Our Community</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659702c8b37cb3dce69dd8b9_Groootin%20Gradient%20BG%20(1)%201.png');
      background-size: cover;
      background-position: center;
    }

    .glass {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center text-white font-sans px-4">
<a href="resources.php" class="absolute top-4 right-4">
  <button class="px-4 py-2 bg-white bg-opacity-20 border border-white text-white font-semibold rounded-2xl backdrop-blur-md hover:bg-white hover:text-black transition duration-300 shadow-md">
    ← Back to Resources
  </button>
</a>

  <div class="glass rounded-xl shadow-xl max-w-lg w-full p-8">
    <h1 class="text-4xl font-bold mb-2 text-white text-center">🌱 Join Our Community</h1>
    <p class="text-gray-200 text-center mb-6">Let's grow together — fill in your details below!</p>
    
    <form action="https://formspree.io/f/mgvkveob" method="POST" class="space-y-5">
      <div>
        <label class="block text-sm font-semibold mb-1">Full Name</label>
        <input type="text" name="name" required class="w-full px-4 py-2 rounded-lg bg-white bg-opacity-20 text-white placeholder-white border border-white focus:outline-none focus:ring-2 focus:ring-white" placeholder="John Doe">
      </div>

      <div>
        <label class="block text-sm font-semibold mb-1">Email Address</label>
        <input type="email" name="email" required class="w-full px-4 py-2 rounded-lg bg-white bg-opacity-20 text-white placeholder-white border border-white focus:outline-none focus:ring-2 focus:ring-white" placeholder="you@example.com">
      </div>

      <div>
        <label class="block text-sm font-semibold mb-1">Instagram Handle</label>
        <input type="text" name="instagram" class="w-full px-4 py-2 rounded-lg bg-white bg-opacity-20 text-white placeholder-white border border-white focus:outline-none focus:ring-2 focus:ring-white" placeholder="@yourhandle">
      </div>

      <div>
        <label class="block text-sm font-semibold mb-1">Why do you want to join?</label>
        <textarea name="reason" rows="4" required class="w-full px-4 py-2 rounded-lg bg-white bg-opacity-20 text-white placeholder-white border border-white focus:outline-none focus:ring-2 focus:ring-white" placeholder="I want to connect and contribute..."></textarea>
      </div>

      <div>
        <button type="submit" class="w-full bg-white text-indigo-600 font-bold py-2 rounded-lg hover:bg-indigo-100 transition">🚀 Submit</button>
      </div>
    </form>
  </div>
</body>
</html>
