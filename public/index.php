<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gravity</title>
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <link href="/src/output.css" rel="stylesheet"> -->
  <style>
    /* Custom Scrollbar */
    
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }
    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
    
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }
    
    .floating {
      animation: float 3s ease-in-out infinite;
    }
    
    .transition-all {
      transition: all 0.3s ease;
    }
    
    body {
      font-family: 'Inter', sans-serif;
    }
    
    .font-bebas {
      font-family: 'Bebas Neue', sans-serif;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-[#121212] to-[#2a1f1f] relative overflow-x-hidden text-white min-h-screen">
  <div class="page-wrapper">
    <!-- Navigation + Hero Section -->
    <div class="nav_plus-hero-section w-full py-4 bg-[url('https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659702c8b37cb3dce69dd8b9_Groootin%20Gradient%20BG%20(1)%201.png')] bg-cover bg-center">
      <div class="w-full py-4">
        <!-- Mobile-friendly Header -->
        <header class="max-w-3xl mx-auto flex flex-row md:flex-row justify-between items-center px-4 md:px-4 py-4 bg-gradient-to-r from-[#9f3737] via-[#b94747] to-[#e05a5a] text-white rounded-2xl shadow-md">
          <!-- Logo Section -->
          <div class="flex items-center space-x-4 mt-4 mb-4 md:mb-0">
            <img src="Images/logo2.svg" alt="Logo" class="h-16 w-24 md:h-20 md:w-28" />
          </div>

          <!-- Mobile Menu Button -->
          <button id="mobile-menu-button" class="md:hidden flex items-center px-3 py-2 border rounded text-white border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>

          <!-- Navigation Links -->
          <nav id="nav-menu" class="hidden md:flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 text-lg font-medium w-full md:w-auto">
            <a href="/about" class="hover:text-gray-200 transition">About</a>
            <a href="/Resources" class="hover:text-gray-200 transition">Resources</a>
            <a href="/public/index.php" aria-current="page" class="text-white underline underline-offset-4 font-semibold">Community</a>
            <a href="/blogs/" class="hover:text-gray-200 transition">Contact</a>
            
            <!-- Login Button - Show in mobile nav but separate on desktop -->
            <div class="md:hidden mt-4">
              <a href="classProject/public/login.php"
                class="border border-white px-4 py-2 rounded-xl hover:bg-white hover:text-[#9f3737] transition font-semibold block text-center">
                Login
              </a>
            </div>
          </nav>

          <!-- Optional Login Button - Desktop Only -->
          <div class="hidden md:block">
            <a href="login.php"
              class="border border-white px-4 py-2 rounded-xl hover:bg-white hover:text-[#9f3737] transition font-semibold">
              Login
            </a>
          </div>
        </header>
      </div>

      <!-- Hero Section -->
      <section class="relative max-w-5xl mx-auto my-6 md:my-10 p-6 md:p-8 rounded-2xl bg-gradient-to-r from-[#9f3737] via-[#b94747] to-[#e05a5a] text-white"
        style="box-shadow: 0 10px 25px rgba(101, 67, 33, 0.4);">

        <!-- Content -->
        <div class="flex flex-col items-center">
          <div class="text-[#faff11] items-center font-medium text-xl md:text-3xl">Community</div>
          <h1 class="text-center mt-4 mb-4 font-bebas text-4xl md:text-5xl lg:text-[3rem] font-bold leading-tight md:leading-[68.6px]">
            Unite, Create and Inspire:
            <br>
            <span class="text-orange-500">India's Biggest Creative Network </span>
            is Here!
          </h1>
          <div class="msg text-base md:text-lg text-center leading-relaxed max-w-3xl mx-auto">
            Connect with fellow artists, showcase your work, collaborate on projects, and grow
            together. Whether you're a painter, musician, designer, or storyteller—this is your space to shine.
          </div>
        </div>
        
        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row justify-center items-center w-full mt-6 gap-4">
          <a href="" class="w-full sm:w-auto main-button-new justify-center self-auto pb-[10px] text-base
            flex items-center bg-[#ff682c] text-white text-center border-4 border-[#0000] px-6 py-2 font-medium rounded-2xl
            hover:shadow-lg hover:bg-[#ff5a1f] transition-all duration-200">
            Join Community
          </a>
          <a href="/about"
            class="w-full sm:w-auto button flex justify-center items-center gap-2 text-white font-medium px-6 py-2 border border-white/30 rounded-2xl
            hover:bg-white/10 transition-all">
            Know More
            <span class="fa-icon-arrow">→</span>
          </a>
        </div>
      </section>
    </div>

    <!-- Join Section -->
    <div class="section_join py-12 md:py-16 relative">
      <div class="px-4 md:px-6">
        <div class="max-w-[1238px] mx-auto">
          <div class="py-8 md:py-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">
              
              <!-- Left Content -->
              <div class="flex-1 space-y-6 z-10 relative">
                <div class="text-orange-100 text-lg font-semibold">Connect, Collaborate, and Grow</div>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">
                  Join the Community of Music Makers Across India!
                </h1>
                <p class="text-white/90 text-lg max-w-lg">
                  Learn, Share, and Inspire - Where Artists Unite to Create Magic Together!
                </p>
                <div>
                  <a href="" target="_blank"
                     class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-md shadow-md transition">
                    Join Community
                  </a>
                </div>
              </div>

              <!-- Right Image Section -->
              <div class="flex-1 relative w-full h-[300px] md:h-[400px] z-10">
                <!-- Background Image -->
                <img src="https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/65d07229ff8b1322e204cbbe_image%20join%20back.webp"
                     alt="Background" class="w-full max-w-sm mx-auto md:mx-0" />

                <!-- Music Icon Group -->
                <div class="absolute top-[20%] left-[10%] transform scale-75 md:scale-100 floating">
                  <img src="https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/65d079e643966a2439cd89aa_music%20back.svg"
                       alt="Music Back" class="w-20" />
                  <img src="https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/65d07b5031a45a262ab6590d_%F0%9F%8E%B5.webp"
                       alt="Music Icon" class="w-12 absolute top-2 left-2" />
                </div>

                <!-- Chutki Icon Group -->
                <div class="absolute bottom-[10%] right-[10%] transform scale-75 md:scale-100 floating" style="animation-delay: 0.5s;">
                  <img src="https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/65d0737129bc0885104b5411_chutki.svg"
                       alt="Chutki Back" class="w-24" />
                  <img src="https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/65d07c9a86ea7998ef0b44c9_chuttkki.webp"
                       alt="Chutki" class="w-16 absolute top-3 left-3" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Background Ellipse -->
      <img src="https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659715d117f7f98fa5c81992_Ellipse%20799.png"
           alt="Ellipse" class="absolute -top-20 -right-20 w-[300px] md:w-[600px] opacity-30 pointer-events-none" />
    </div>

    <!-- Profit Section -->
    <div class="section_profit font-sans py-12 md:py-20 px-4">
      <div class="px-4 sm:px-8 max-w-screen-xl mx-auto">
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">

          <!-- Left Image -->
          <div class="left_profit order-2 md:order-1">
            <img src="https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/65ca41801a2b5c6abdb32da8_learn%20music.webp" 
                 loading="lazy" 
                 alt="Learn Music"
                 class="w-full rounded-lg shadow-xl">
          </div>

          <!-- Right Content -->
          <div class="right_profit space-y-6 order-1 md:order-2">
            <div class="text-sm uppercase tracking-wider text-pink-400 font-semibold">Connect, Collaborate, and Grow</div>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">Learn How to Monetize, Distribute, and Navigate Music Industry!</h1>
            <p class="text-lg text-gray-300">Effortlessly track, collect, and manage your royalties. We ensure that you're fairly compensated for your creative work, so you can focus on what you do best – making music.</p>
            <a href="https://www.artists.grootin.in/" 
               class="inline-block bg-pink-600 hover:bg-pink-700 text-white font-medium text-lg px-6 py-3 rounded-lg transition duration-300">
              Join Community
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Community Section -->
    <div class="font-sans bg-gradient-to-r from-[#121212] to-[#2f1736] py-12 md:py-20 px-4">
      <div class="px-4 sm:px-8 max-w-screen-xl mx-auto">
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">

          <!-- Left Text Content -->
          <div class="space-y-6">
            <div class="text-sm uppercase tracking-wider text-pink-400 font-semibold">Together We Thrive</div>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">Find Mentorship and a Creative Tribe in Our Community!</h1>
            <p class="text-lg text-gray-300">Learn, Share, and Inspire - Where Artists Unite to Create Magic Together!</p>
            <a href="" 
               class="inline-block bg-pink-600 hover:bg-pink-700 text-white font-medium text-lg px-6 py-3 rounded-lg transition duration-300">
              Join Community
            </a>
          </div>

          <!-- Right Image and Decorative Elements -->
          <div class="relative mt-8 md:mt-0">
            <img src="https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/65d041359b5d8d4dd1be85e5_map.webp" 
                 loading="lazy" 
                 alt="Mentorship Map"
                 class="w-full rounded-lg shadow-xl">

            <!-- Decorative Circles (Representing People) -->
            <div class="absolute top-0 left-0 w-4 h-4 bg-pink-500 rounded-full animate-pulse"></div>
            <div class="absolute top-10 right-5 w-3 h-3 bg-purple-500 rounded-full animate-ping"></div>
            <div class="absolute bottom-10 left-5 w-5 h-5 bg-pink-700 rounded-full animate-bounce"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Horizontal Scroll Activities Section -->
    <div class="w-full max-w-7xl mx-auto px-4 py-12 md:py-16 overflow-hidden relative">
      <h2 class="text-3xl md:text-5xl font-bold text-center text-white mb-8">Our Activities</h2>

      <!-- Gradient Fade -->
      <div class="absolute left-0 top-32 bottom-20 w-20 bg-gradient-to-r from-[#121212] to-transparent z-10 pointer-events-none"></div>
      <div class="absolute right-0 top-32 bottom-20 w-20 bg-gradient-to-l from-[#121212] to-transparent z-10 pointer-events-none"></div>

      <div id="carousel" 
           class="flex overflow-x-scroll space-x-6 p-6 scrollbar-hide">
        <!-- Cards inserted by JS -->
      </div>

      <!-- Navigation Controls for Mobile -->
      <div class="flex justify-center mt-6 gap-4 md:hidden">
        <button id="scroll-left" class="px-4 py-2 bg-white/10 rounded-full hover:bg-white/20 transition-all">
          ← Prev
        </button>
        <button id="scroll-right" class="px-4 py-2 bg-white/10 rounded-full hover:bg-white/20 transition-all">
          Next →
        </button>
      </div>
    </div>

    <!-- Email Signup Section -->
    <div class="bg-gradient-to-r from-[#121212] to-[#2f1736] rounded-2xl p-6 md:p-12 border border-white/10 my-12 mx-4 md:mx-8 lg:mx-auto lg:max-w-6xl">
      <div class="max-w-4xl mx-auto text-center">
        <h3 class="text-2xl md:text-3xl font-bold text-white mb-6">Join Our Creative Community</h3>
        <p class="text-white/80 text-base md:text-lg mb-8">
          Become part of a growing network of artists, musicians, and creators. Share your work, get feedback, and collaborate on exciting projects with like-minded individuals.
        </p>
        <form class="flex flex-col sm:flex-row gap-4 justify-center">
          <input 
            type="email" 
            placeholder="Your email address" 
            class="flex-1 max-w-md px-4 md:px-6 py-3 md:py-4 bg-white/5 border border-white/20 rounded-full text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-purple-500"
          >
          <button class="px-6 md:px-8 py-3 md:py-4 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full text-white font-semibold hover:opacity-90 transition-opacity whitespace-nowrap">
            Get Started
          </button>
        </form>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#2c3e50] text-white py-10 md:py-16 px-4">
      <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Logo Section -->
        <div class="space-y-4">
          <img src="Images/logo2.svg" alt="Company Logo" class="h-16 md:h-20">
          <p class="text-gray-300 text-sm md:text-base max-w-xs">
            Your company description or tagline goes here. Inspire creativity and innovation.
          </p>
        </div>
        
        <!-- Social Media Links -->
        <div class="text-center">
          <h3 class="text-lg md:text-xl font-bold mb-4 md:mb-6">FOLLOW US</h3>
          <div class="flex justify-center gap-6">
            <!-- LinkedIn Logo -->
            <a href="https://linkedin.com/yourprofile" target="_blank" class="hover:scale-110 transition-transform">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="#0077B5">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
              </svg>
            </a>
            
            <!-- Instagram Logo -->
            <a href="https://instagram.com/yourprofile" target="_blank" class="hover:scale-110 transition-transform">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="#E1306C">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </a>
            
            <!-- WhatsApp Logo -->
            <a href="https://wa.me/yournumber" target="_blank" class="hover:scale-110 transition-transform">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="#25D366">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
              </svg>
            </a>
          </div>
        </div>
        
        <!-- Contact Info -->
        <div class="text-center md:text-right">
          <h3 class="text-lg md:text-xl font-bold mb-4 md:mb-6">CONTACT US</h3>
          <p class="text-gray-300 mb-2 flex items-center justify-center md:justify-end gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#bdc3c7">
              <path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z"/>
            </svg>
            himanshu@gmail.com
          </p>
          <p class="text-gray-300 mb-2 flex items-center justify-center md:justify-end gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#bdc3c7">
              <path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-1.622.845-2.298 2.627-2.632 3.958-.506 2.448-.301 7.591 3.403 12.379 3.701 4.785 9.611 6.256 12.049 5.723 1.328-.347 3.096-1.146 3.943-2.725l1.038-2.085z"/>
            </svg>
            +91 95084815y3
          </p>
        </div>
      </div>
      
      <!-- Copyright -->
      <div class="w-full text-center mt-8 pt-6 border-t border-gray-700 text-sm text-gray-400">
        <p>© 2023 Your Company Name. All Rights Reserved.</p>
      </div>
    </footer>
  </div>

  <!-- Add scrolling music images -->
  <div class="fixed bottom-0 left-0 w-full overflow-hidden h-20 z-20 pointer-events-none">
    <div id="scrolling-media" class="flex gap-4 animate-scroll">
      <!-- Scrolling images will be added by JS -->
    </div>
  </div>

  
  <script>
    // Mobile Menu Toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const menu = document.getElementById('nav-menu');
      menu.classList.toggle('hidden');
    });

    // Activities Carousel
    const activities = [
      { name: "Networking", image: "https://images.unsplash.com/photo-1520110120835-c96534a4c984?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fG5ldHdvcmtpbmd8ZW58MHx8MHx8fDA%3D" },
      { name: "Podcasting", image: "https://media.istockphoto.com/id/1409652124/photo/two-young-stylish-radio-show-hosts-record-fresh-podcast-episode-in-home-loft-studio-apartment.webp?a=1&b=1&s=612x612&w=0&k=20&c=E6KBWCpQOwCQ8kZ96pa1X_dD6EpjXUFvddawq5vjyLw=" },
      { name: "Music Critique", image: "https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bXVzaWN8ZW58MHx8MHx8fDA%3D" },
      { name: "Workshops", image: "https://plus.unsplash.com/premium_photo-1705882846961-c6b31413927a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHdvcmtzaG9wfGVufDB8fDB8fHww" },
      { name: "Tech Talks", image: "https://images.unsplash.com/photo-1733222765056-b0790217baa9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHRlY2glMjB0YWxrfGVufDB8fDB8fHww" },
      { name: "Gaming Events", image: "https://images.unsplash.com/photo-1654398958781-e868227bfb5d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGdhbWluZyUyMGV2ZW50fGVufDB8fDB8fHww" },
      { name: "Debates", image: "https://images.unsplash.com/photo-1724690683864-b33a5eaeda79?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8ZGViYXRlc3xlbnwwfHwwfHx8MA%3D%3D" },
      { name: "Hackathons", image: "https://media.istockphoto.com/id/1788156316/photo/pet-friendly-coworking-space.webp?a=1&b=1&s=612x612&w=0&k=20&c=eqMSCQ9rth3JqOPALrcR4fDcKsIEzGMNk8hkWN9jQm4=" },
      { name: "Open Mic", image: "https://media.istockphoto.com/id/1197537243/photo/female-singer-performing-on-the-stage.webp?a=1&b=1&s=612x612&w=0&k=20&c=zy4th22-HrH6JVE0QS1SVORV02vc-jBitVcyhpi4Cnc=" },
      { name: "Art Exhibits", image: "https://media.istockphoto.com/id/1603191573/photo/diverse-group-of-teenagers-looking-at-abstract-art-in-art-gallery.webp?a=1&b=1&s=612x612&w=0&k=20&c=sYYbjOeewEG5DYMAwrc797GT-fNR_ZA0rpDgYdVh0Bk=" }
    ];

    const carousel = document.getElementById("carousel");

    const createCard = (activity) => {
      const container = document.createElement("div");
      container.className = "flex-none w-72 md:w-80 bg-white/5 backdrop-blur-sm rounded-xl shadow-md overflow-hidden border border-white/10 hover:border-white/30 transition-all hover:scale-105";

      // Add image
      const imageDiv = document.createElement("div");
      imageDiv.className = "w-full h-32 overflow-hidden";
      
      const image = document.createElement("img");
      image.src = activity.image;
      image.alt = activity.name;
      image.className = "w-full h-full object-cover";
      
      imageDiv.appendChild(image);

      // Add content
      const contentDiv = document.createElement("div");
      contentDiv.className = "p-4";
      
      const title = document.createElement("div");
      title.className = "text-lg font-bold text-white mb-1";
      title.textContent = activity.name;

      const subtitle = document.createElement("div");
      subtitle.className = "text-sm text-gray-300";
      subtitle.textContent = `Explore ${activity.name.toLowerCase()} like never before.`;

      contentDiv.appendChild(title);
      contentDiv.appendChild(subtitle);
      
      container.appendChild(imageDiv);
      container.appendChild(contentDiv);
      return container;
    };

    // Create cards
    activities.forEach(activity => {
      carousel.appendChild(createCard(activity));
      // Create duplicate cards for infinite scroll effect
      const duplicate = createCard(activity);
      duplicate.setAttribute('aria-hidden', 'true');
      carousel.appendChild(duplicate);
    });

    // Scrolling functionality
    let isScrolling = false;
    let scrollAmount = 0;
    const scrollSpeed = 1;
    let isPaused = false;

    carousel.addEventListener("mouseenter", () => isPaused = true);
    carousel.addEventListener("mouseleave", () => isPaused = false);
    carousel.addEventListener("touchstart", () => isPaused = true);
    carousel.addEventListener("touchend", () => setTimeout(() => isPaused = false, 3000));

    // Manual scroll buttons (mobile)
    document.getElementById('scroll-left').addEventListener('click', () => {
      carousel.scrollBy({ left: -300, behavior: 'smooth' });
    });
    
    document.getElementById('scroll-right').addEventListener('click', () => {
      carousel.scrollBy({ left: 300, behavior: 'smooth' });
    });

    // Auto-scroll animation
    const autoScroll = () => {
      if (!isPaused) {
        scrollAmount += scrollSpeed;
        
        // Reset when we're halfway through (since we have duplicate cards)
        const halfwayPoint = carousel.scrollWidth / 2;
        if (scrollAmount >= halfwayPoint) {
          scrollAmount = 0;
          carousel.scrollLeft = 0;
        } else {
          carousel.scrollLeft = scrollAmount;
        }
      }
      requestAnimationFrame(autoScroll);
    };

    autoScroll();

   

    // Add styles for scrolling animation
    document.head.insertAdjacentHTML('beforeend', `
      <style>
        @keyframes scroll {
          0% { transform: translateX(0); }
          100% { transform: translateX(-${mediaItems.length * 112}px); }
        }
        .animate-scroll {
          animation: scroll 30s linear infinite;
        }
      </style>
    `);

  

    
  </script>
</body>
</html>
