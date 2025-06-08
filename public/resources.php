<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gravity | Resources</title>

  
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to bottom right, #0f0f0f, #1a1a1a);
      color: #ffffff;
    }
    h1, h2, h3 {
      font-family: 'Poppins', sans-serif;
    }
    .heading-orange {
      background: linear-gradient(90deg, #ff8a4c, #ff4b2b);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
  </style>
</head>
<body class="font-inter">

  <header class="bg-[#1f1f1f] py-5 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
      <h1 class="text-2xl font-extrabold text-white">Gravity</h1>
      <nav class="space-x-6 text-sm font-medium text-white">
        <a href="javascript:history.back()" class="hover:text-[#ff8a4c] transition">Home</a>
        <!-- <a href="about.php" class="hover:text-[#ff8a4c] transition">About</a>
        <a href="contact.php" class="hover:text-[#ff8a4c] transition">Contact</a>
        <a href="resources.php" class="text-[#ff8a4c] font-semibold underline">Resources</a> -->
      </nav>
    </div>
  </header>

  <section class="py-20 text-center px-4" data-aos="zoom-in">
    <h2 class="text-5xl font-bold mb-4 heading-orange">Explore Our Resources</h2>
    <p class="text-gray-300 max-w-2xl mx-auto text-lg">
      Empower yourself with curated guides, tools, and content built for creators.
    </p>
  </section>

  <section class="pb-20 px-6">
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <div class="glass-card p-6 rounded-2xl shadow-lg hover:shadow-orange-500/30 hover:scale-105 transform transition duration-300" data-aos="fade-up">
        <h3 class="text-2xl font-semibold mb-2 text-white">Design Guidelines</h3>
        <p class="text-gray-400 mb-4">Our full design system, brand visuals, and layout standards.</p>
        <a href="#" class="text-[#ff8a4c] font-medium hover:underline">View Guidelines →</a>
      </div>

      <div class="glass-card p-6 rounded-2xl shadow-lg hover:shadow-orange-500/30 hover:scale-105 transform transition duration-300" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-2xl font-semibold mb-2 text-white">Developer Docs</h3>
        <p class="text-gray-400 mb-4">API references, SDKs, and integration walkthroughs.</p>
        <a href="#" class="text-[#ff8a4c] font-medium hover:underline">Open Docs →</a>
      </div>

      <div class="glass-card p-6 rounded-2xl shadow-lg hover:shadow-orange-500/30 hover:scale-105 transform transition duration-300" data-aos="fade-up" data-aos-delay="200">
        <h3 class="text-2xl font-semibold mb-2 text-white">Community Forum</h3>
        <p class="text-gray-400 mb-4">Get help, share knowledge, and grow with us.</p>
        <a href="form.php" class="text-[#ff8a4c] font-medium hover:underline">Join Forum →</a>
      </div>

      <div class="glass-card p-6 rounded-2xl shadow-lg hover:shadow-orange-500/30 hover:scale-105 transform transition duration-300" data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-2xl font-semibold mb-2 text-white">Brand Assets</h3>
        <p class="text-gray-400 mb-4">Download logos, fonts, and presentation kits.</p>
        <a href="#" class="text-[#ff8a4c] font-medium hover:underline">Get Assets →</a>
      </div>

      <div class="glass-card p-6 rounded-2xl shadow-lg hover:shadow-orange-500/30 hover:scale-105 transform transition duration-300" data-aos="fade-up" data-aos-delay="400">
        <h3 class="text-2xl font-semibold mb-2 text-white">Quick Tutorials</h3>
        <p class="text-gray-400 mb-4">Jumpstart your journey with step-by-step guides.</p>
        <a href="#" class="text-[#ff8a4c] font-medium hover:underline">Start Learning →</a>
      </div>

      <div class="glass-card p-6 rounded-2xl shadow-lg hover:shadow-orange-500/30 hover:scale-105 transform transition duration-300" data-aos="fade-up" data-aos-delay="500">
        <h3 class="text-2xl font-semibold mb-2 text-white">FAQs</h3>
        <p class="text-gray-400 mb-4">Common questions with detailed, useful answers.</p>
        <a href="#" class="text-[#ff8a4c] font-medium hover:underline">Browse FAQs →</a>
      </div>

    </div>
  </section>

  <section class="bg-[#292929] py-20 text-center">
    <h2 class="text-4xl sm:text-5xl font-bold text-white mb-8 heading-orange">What Creators Are Saying</h2>
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <div class="glass-card p-8 rounded-2xl shadow-lg hover:shadow-orange-500/30 transition duration-300">
        <p class="text-lg text-gray-300 mb-4">"Gravity has been a game-changer for me. The resources are incredibly helpful and the community is amazing!"</p>
        <p class="text-white font-semibold">Alex R., Music Producer</p>
      </div>

      <div class="glass-card p-8 rounded-2xl shadow-lg hover:shadow-orange-500/30 transition duration-300">
        <p class="text-lg text-gray-300 mb-4">"As a developer, the docs and tools here saved me so much time. I can't recommend it enough!"</p>
        <p class="text-white font-semibold">Mia S., Full Stack Developer</p>
      </div>

      <div class="glass-card p-8 rounded-2xl shadow-lg hover:shadow-orange-500/30 transition duration-300">
        <p class="text-lg text-gray-300 mb-4">"The tutorials helped me improve my skills in record time. I'm now creating content like never before!"</p>
        <p class="text-white font-semibold">Jordan M., Content Creator</p>
      </div>

    </div>
  </section>

  <section class="py-20 px-6 bg-[#1f1f1f]">
    <h2 class="text-4xl sm:text-5xl font-bold text-white text-center mb-8 heading-orange">Latest Updates & News</h2>
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- News Card -->
      <div class="glass-card p-6 rounded-2xl shadow-lg hover:shadow-orange-500/30 transition duration-300">
        <h3 class="text-2xl font-semibold mb-2 text-white">Gravity v2.0 Update</h3>
        <p class="text-gray-400 mb-4">We've just launched some exciting new features. Check them out now!</p>
        <a href="#" class="text-[#ff8a4c] font-medium hover:underline">Read More →</a>
      </div>

      <div class="glass-card p-6 rounded-2xl shadow-lg hover:shadow-orange-500/30 transition duration-300">
        <h3 class="text-2xl font-semibold mb-2 text-white">Community Feedback</h3>
        <p class="text-gray-400 mb-4">Your opinions matter! We're listening, and here's what's next based on your feedback.</p>
        <a href="#" class="text-[#ff8a4c] font-medium hover:underline">Read More →</a>
      </div>

      <div class="glass-card p-6 rounded-2xl shadow-lg hover:shadow-orange-500/30 transition duration-300">
        <h3 class="text-2xl font-semibold mb-2 text-white">Upcoming Events</h3>
        <p class="text-gray-400 mb-4">Join us for an exciting series of live webinars and events.</p>
        <a href="#" class="text-[#ff8a4c] font-medium hover:underline">See Events →</a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-[#1a1a1a] py-6">
    <div class="max-w-6xl mx-auto flex justify-between items-center px-6 text-sm text-gray-400">
      <p>© 2025 Gravity. All rights reserved.</p>
      <div class="space-x-4">
        <a href="#" class="hover:text-[#ff8a4c]">Privacy</a>
        <a href="#" class="hover:text-[#ff8a4c]">Terms</a>
      </div>
    </div>
  </footer>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });
  </script>
</body>
</html>
