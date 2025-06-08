<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gravity Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

  <style>
    body {
      background-image: url('https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659702c8b37cb3dce69dd8b9_Groootin%20Gradient%20BG%20(1)%201.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
    }

    
    .highlight-gravity {
      color: #FF7F32; /* Orange color */
    }
    .highlight-btn {
      background-color: #FF7F32; /* Orange background for buttons */
      color: white;
    }
  </style>
</head>

<body class="font-sans text-white">

  <header class="bg-black bg-opacity-80 py-4 px-8 md:px-16 lg:px-24 xl:px-32 flex items-center justify-between">
    <div class="text-xl font-bold"><span class="highlight-gravity">GRAVITY</span></div>

    <nav class="hidden md:flex space-x-6">
      <a href="about.php" class="hover:text-gray-300">About</a>
      <a href="resources.php" class="hover:text-gray-300">Resources</a>
      <a href="events.php" class="hover:text-gray-300">Community</a>
      <a href="contact.php" class="hover:text-gray-300">Contact Us</a>
    </nav>

    <div class="space-x-4">
      <a href="javascript:history.back()"><button class="hidden md:inline-block text-gray-300 hover:text-white">Home</button></a>
      
    </div>

    <div class="md:hidden">
      <button class="text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-400">Menu</button>
    </div>
  </header>

  <main>
    <section class="py-20 px-8 md:px-16 lg:px-24 xl:px-32 bg-black bg-opacity-70 text-center">
      <h2 class="text-orange-500 text-lg font-semibold mb-2">About Us</h2>
      <h1 class="text-5xl lg:text-6xl font-bold mb-6">What brought <span class="highlight-gravity">gravity</span> here</h1>
      <p class="text-lg text-gray-300 mb-8">Gravity Entertainment is revolutionizing the worlds of gaming, music, and live events. We empower creators, from BGMI players to music artists and podcast hosts, to take charge of their content and connect with their audience like never before.</p>
      <p class="text-lg text-gray-300 mb-8">In the fast-paced digital world, we simplify the journey by offering cutting-edge tools to manage, monetize, and distribute content seamlessly. Whether it’s hosting a gaming podcast, competing in BGMI tournaments, or performing at live concerts, <span class="highlight-gravity">Gravity</span> gives creators the platform they need to succeed and thrive.</p>
    </section>

    <section class="py-20 px-8 md:px-16 lg:px-24 xl:px-32 bg-black bg-opacity-70 text-center">
      <h2 class="text-4xl lg:text-5xl font-bold mb-6">We <span class="highlight-gravity">specialise</span> in</h2>
      <p class="text-lg text-gray-300 mb-8">There are some things that we are really good at...</p>
    </section>

    <section class="py-16 px-8 md:px-16 lg:px-24 xl:px-32 bg-black bg-opacity-70 grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-gray-800 rounded-xl p-8 text-center">
        <h3 class="text-xl font-semibold mb-2"><span class="highlight-btn">Music Creation</span></h3>
        <p class="text-gray-300 text-sm">AI-powered tools help artists compose and produce music effortlessly with Gravity.</p>
      </div>
      <div class="bg-gray-800 rounded-xl p-8 text-center">
        <h3 class="text-xl font-semibold mb-2"><span class="highlight-btn">Content Collaboration</span></h3>
        <p class="text-gray-300 text-sm">Connect and collaborate with fellow creators across music, gaming, and podcasts.</p>
      </div>
      <div class="bg-gray-800 rounded-xl p-8 text-center">
        <h3 class="text-xl font-semibold mb-2"><span class="highlight-btn">Fan Engagement</span></h3>
        <p class="text-gray-300 text-sm">Use interactive tools and community features to build stronger fan relationships.</p>
      </div>
      <div class="bg-gray-800 rounded-xl p-8 text-center">
        <h3 class="text-xl font-semibold mb-2"><span class="highlight-btn">Podcast Production</span></h3>
        <p class="text-gray-300 text-sm">Record, edit, and publish your podcast with studio-quality tools from Gravity.</p>
      </div>
      <div class="bg-gray-800 rounded-xl p-8 text-center">
        <h3 class="text-xl font-semibold mb-2"><span class="highlight-btn">Gaming (BGMI)</span></h3>
        <p class="text-gray-300 text-sm">Support for BGMI creators to stream, monetize, and grow their gaming communities.</p>
      </div>
      <div class="bg-gray-800 rounded-xl p-8 text-center">
        <h3 class="text-xl font-semibold mb-2"><span class="highlight-btn">Live Events</span></h3>
        <p class="text-gray-300 text-sm">Host or join live music and gaming events powered by Gravity’s platform.</p>
      </div>
      <div class="bg-gray-800 rounded-xl p-8 text-center">
        <h3 class="text-xl font-semibold mb-2"><span class="highlight-btn">Talent Discovery</span></h3>
        <p class="text-gray-300 text-sm">We scout and spotlight emerging creators across music, games, and podcasts.</p>
      </div>
      <div class="bg-gray-800 rounded-xl p-8 text-center">
        <h3 class="text-xl font-semibold mb-2"><span class="highlight-btn">Monetization</span></h3>
        <p class="text-gray-300 text-sm">From subscriptions to brand deals, we help creators turn passion into profit.</p>
      </div>
      <div class="bg-gray-800 rounded-xl p-8 text-center">
        <h3 class="text-xl font-semibold mb-2"><span class="highlight-btn">Creator Tools</span></h3>
        <p class="text-gray-300 text-sm">Analytics, content management, AI enhancements—all in one dashboard.</p>
      </div>
    </section>
    

    <section class="py-16 px-8 md:px-16 lg:px-24 xl:px-32 bg-black bg-opacity-70 text-center">
      <h2 class="text-3xl lg:text-4xl font-bold mb-8"><span class="highlight-gravity">We</span> promote local talents and fresh music across the globe.</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-8">
        <div class="bg-gray-900 rounded-lg p-6 flex items-center">
          <div class="highlight-btn rounded-md py-2 px-4 mr-4 font-semibold">Mission</div>
          <p class="text-gray-300 text-sm">To enable 1 million artists across the world.</p>
        </div>
        <div class="bg-gray-900 rounded-lg p-6 flex items-center">
          <div class="highlight-btn rounded-md py-2 px-4 mr-4 font-semibold">Vision</div>
          <p class="text-gray-300 text-sm">To become a global music tech company enabling the best of the talents.</p>
        </div>
        <div class="bg-gray-900 rounded-lg p-6 flex items-center">
          <div class="highlight-btn rounded-md py-2 px-4 mr-4 font-semibold">Purpose</div>
          <p class="text-gray-300 text-sm">Gravity will never stop until under-represented talents exist in the world.</p>
        </div>
        <div class="bg-gray-900 rounded-lg p-6 flex items-center">
          <div class="highlight-btn rounded-md py-2 px-4 mr-4 font-semibold">Values</div>
          <p class="text-gray-300 text-sm">People. Passion. Perseverance.</p>
        </div>
      </div>
    </section>

    <section class="py-24 px-8 md:px-16 lg:px-24 xl:px-32 bg-black bg-opacity-70 text-center">
      <h2 class="text-4xl lg:text-5xl font-bold mb-6">Join the <span class="highlight-gravity">Gravity</span> Cult Today!</h2>
      <p class="text-lg text-gray-300 mb-8">Don't miss out on the chance to monetize your music globally...</p>
      <div class="max-w-md mx-auto flex rounded-full overflow-hidden">
        <input type="email" class="bg-gray-800 text-white py-3 px-6 w-full focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-offset-2" placeholder="Enter your email" />
        <button class="bg-orange-500 text-white py-3 px-6 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-offset-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M3.42 3.42a.75.75 0 00-1.06 1.06L8.94 12l-6.58 7.52a.75.75 0 001.06 1.06L12 13.06l7.52 6.58a.75.75 0 001.06-1.06L13.06 12l6.58-7.52a.75.75 0 00-1.06-1.06L12 10.94 3.42 3.42z" />
          </svg>
        </button>
      </div>
    </section>
  </main>

  <footer class="bg-black bg-opacity-80 py-12 px-8 md:px-16 lg:px-24 xl:px-32 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-gray-400 text-sm">
    <div>
      <div class="text-xl font-bold text-white mb-4">GRAVITY</div>
      <p class="text-gray-500">Studio to Stage, Simplified.</p>
    </div>
    <div>
      <h6 class="font-semibold text-white mb-4">Pages</h6>
      <ul class="space-y-2">
        <li><a href="about.php" class="hover:text-gray-300">About</a></li>
        <li><a href="resources.php" class="hover:text-gray-300">Resources</a></li>
        <li><a href="events.php" class="hover:text-gray-300">Community</a></li>
        <li><a href="contact.php" class="hover:text-gray-300">Contact Us</a></li>
      </ul>
    </div>
    <div>
      <h6 class="font-semibold text-white mb-4">Legal</h6>
      <ul class="space-y-2">
        <li><a href="#" class="hover:text-gray-300">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-gray-300">Terms of Service</a></li>
      </ul>
    </div>
    <div>
      <h6 class="font-semibold text-white mb-4">Follow Us</h6>
      <ul class="space-y-2">
        <li><a href="https://facebook.com" class="hover:text-gray-300">Facebook</a></li>
        <li><a href="https://x.com" class="hover:text-gray-300">Twitter</a></li>
        <li><a href="https://instagram.com" class="hover:text-gray-300">Instagram</a></li>
        <li><a href="https://linkedin.com" class="hover:text-gray-300">LinkedIn</a></li>
      </ul>
    </div>
  </footer>

</body>
</html>
