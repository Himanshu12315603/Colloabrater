<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Gravity</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <style>
    body {
      background-image: url('https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659702c8b37cb3dce69dd8b9_Groootin%20Gradient%20BG%20(1)%201.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
    }

    .highlight-gravity {
      color: #FF7F32;
    }

    .highlight-btn {
      background-color: #FF7F32;
      color: white;
    }
  </style>
</head>

<body class="font-sans text-white">

  <!-- Header -->
  <header class="bg-black bg-opacity-80 py-4 px-8 md:px-16 lg:px-24 xl:px-32 flex items-center justify-between">
    <div class="text-xl font-bold"><span class="highlight-gravity">GRAVITY</span></div>
    <nav class="hidden md:flex space-x-6">
      <a href="about.php" class="hover:text-gray-300">About</a>
      <a href="resources.php" class="hover:text-gray-300">Resources</a>
      <a href="dashboard.php" class="hover:text-gray-300">Community</a>
      <a href="contact.php" class="hover:text-gray-300">Contact Us</a>
    </nav>
    <div class="space-x-4">
      <a href="dashboard.php"> <button class="hidden md:inline-block text-gray-300  hover:text-white" >Home</button></a>
     
    </div>
    <div class="md:hidden">
      <button class="text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-400">Menu</button>
    </div>
  </header>

  <!-- Main Content -->
  <main>

    <!-- Contact Intro -->
    <section class="py-20 px-8 md:px-16 lg:px-24 xl:px-32 bg-black bg-opacity-70 text-center" data-aos="fade-up" data-aos-duration="800">
      <h2 class="text-orange-500 text-lg font-semibold mb-2">Get in Touch</h2>
      <h1 class="text-5xl lg:text-6xl font-bold mb-6">We'd Love to Hear From You</h1>
      <p class="text-lg text-gray-300 mb-8">Whether you have questions, feedback, or want to discuss a partnership, feel free to reach out to us!</p>
    </section>

    <!-- Contact Info -->
    <section class="py-16 px-8 md:px-16 lg:px-24 xl:px-32 bg-black bg-opacity-70 text-center" data-aos="fade-up" data-aos-duration="1000">
      <h2 class="text-3xl lg:text-4xl font-bold mb-8"><span class="highlight-gravity">Contact</span> Information</h2>
      <div class="max-w-3xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-8">
        <div class="bg-gray-900 rounded-lg p-6 flex items-center" data-aos="fade-left" data-aos-duration="1000">
          <div class="highlight-btn rounded-md py-2 px-4 mr-4 font-semibold">Email</div>
          <p class="text-gray-300 text-sm">contact@gravity.com</p>
        </div>
        <div class="bg-gray-900 rounded-lg p-6 flex items-center" data-aos="fade-right" data-aos-duration="1000">
          <div class="highlight-btn rounded-md py-2 px-4 mr-4 font-semibold">Phone</div>
          <p class="text-gray-300 text-sm">+0195084817u3</p>
        </div>
        <div class="bg-gray-900 rounded-lg p-6 flex items-center" data-aos="fade-left" data-aos-duration="1200">
          <div class="highlight-btn rounded-md py-2 px-4 mr-4 font-semibold">Address</div>
          <p class="text-gray-300 text-sm">Main street, DakBanglo road, Bengluru</p>
        </div>
        <div class="bg-gray-900 rounded-lg p-6 flex items-center" data-aos="fade-right" data-aos-duration="1200">
          <div class="highlight-btn rounded-md py-2 px-4 mr-4 font-semibold">Social Media</div>
          <div class="text-gray-300 text-sm space-x-4">
            <a href="https://facebook.com" class="hover:text-gray-300">Facebook</a>
            <a href="https://x.com" class="hover:text-gray-300">Twitter</a>
            <a href="https://Instagram.com" class="hover:text-gray-300">Instagram</a>
            <a href="https://LinkedIn.com" class="hover:text-gray-300">LinkedIn</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Meet the Team -->
<section class="py-20 px-8 md:px-16 lg:px-24 xl:px-32 bg-black bg-opacity-70 text-center" data-aos="fade-up" data-aos-duration="1000">
  <h2 class="text-3xl lg:text-4xl font-bold mb-16"><span class="highlight-gravity">Meet</span> the Team</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 max-w-5xl mx-auto">

    <!-- Member 1: Nitish Kumar -->
    <div class="relative bg-gray-900 rounded-xl p-8 shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-duration="800">
      <img src="Images/ck.jpeg" alt="Nitish Kumar" class="w-24 h-24 mx-auto rounded-full object-cover -mt-16 border-4 border-black">
      <h3 class="text-xl font-semibold text-white mt-6">Nitish Kumar</h3>
      <p class="text-orange-400 mb-4">Cheif Technical Officer  <br>Frontend Developer <br>UI/UX Designer</p>
      <div class="flex justify-center space-x-4 text-gray-400">
        <a href="https://linkedin.com" class="hover:text-orange-400 transition"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-twitter"></i></a>
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <!-- Member 2: Himanshu -->
    <div class="relative bg-gray-900 rounded-xl p-8 shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-duration="900">
      <img src="Images/hk.jpg" alt="Himanshu" class="w-24 h-24 mx-auto rounded-full object-cover -mt-16 border-4 border-black">
      <h3 class="text-xl font-semibold text-white mt-6">Himanshu</h3>
      <p class="text-orange-400 mb-4">Designer</p>
      <div class="flex justify-center space-x-4 text-gray-400">
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-twitter"></i></a>
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <!-- Member 3: Shanta Manan -->
    <div class="relative bg-gray-900 rounded-xl p-8 shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-duration="1000">
      <img src="Images/sk.jpeg" alt="Shanta Manan" class="w-24 h-24 mx-auto rounded-full object-cover -mt-16 border-4 border-black">
      <h3 class="text-xl font-semibold text-white mt-6">Shanta Manan</h3>
      <p class="text-orange-400 mb-4">Backend Engineer</p>
      <div class="flex justify-center space-x-4 text-gray-400">
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-twitter"></i></a>
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <!-- Member 4: Abhishek -->
    <div class="relative bg-gray-900 rounded-xl p-8 shadow-lg transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl" data-aos="fade-up" data-aos-duration="1100">
      <img src="Images/ak.jpeg" alt="Abhishek" class="w-24 h-24 mx-auto rounded-full object-cover -mt-16 border-4 border-black">
      <h3 class="text-xl font-semibold text-white mt-6">Abhishek</h3>
      <p class="text-orange-400 mb-4">Frontend Manager</p>
      <div class="flex justify-center space-x-4 text-gray-400">
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-twitter"></i></a>
        <a href="#" class="hover:text-orange-400 transition"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

  </div>
</section>


    <!-- Contact Form -->
    <section 
  class="py-20 px-6 md:px-16 lg:px-24 xl:px-32 bg-black bg-opacity-80 text-center backdrop-blur-sm" 
  data-aos="fade-up" 
  data-aos-duration="1200">

  <h2 class="text-4xl lg:text-5xl font-extrabold text-white mb-12">
    <span class="highlight-gravity text-pink-400">Send</span> Us a Message
  </h2>

  <div class="w-full max-w-2xl mx-auto px-6 py-10 bg-white bg-opacity-10 backdrop-blur-lg rounded-3xl shadow-2xl border border-white border-opacity-30">
    <form action="https://formspree.io/f/mgvkveob" method="POST" class="space-y-6">
      
      <div>
        <label for="name" class="block text-white text-sm font-medium mb-2">Your Name</label>
        <input type="text" id="name" name="name" required
               class="w-full px-4 py-3 rounded-xl border border-white border-opacity-20 bg-white bg-opacity-10 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-pink-400">
      </div>

      <div>
        <label for="email" class="block text-white text-sm font-medium mb-2">Your Email</label>
        <input type="email" id="email" name="email" required
               class="w-full px-4 py-3 rounded-xl border border-white border-opacity-20 bg-white bg-opacity-10 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-purple-400">
      </div>

      <div>
        <label for="message" class="block text-white text-sm font-medium mb-2">Message</label>
        <textarea id="message" name="message" rows="4" required
                  class="w-full px-4 py-3 rounded-xl border border-white border-opacity-20 bg-white bg-opacity-10 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
      </div>

      <button type="submit"
              class="w-full py-3 px-6 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 
                     text-white font-semibold text-lg rounded-xl shadow-lg 
                     hover:from-pink-500 hover:via-purple-500 hover:to-indigo-500 
                     transition-all duration-500 transform hover:scale-105">
        ✉️ Send Message
      </button>
    </form>
  </div>

</section>

  </main>

  <!-- Footer -->
  <footer class="bg-black bg-opacity-80 py-12 px-8 md:px-16 lg:px-24 xl:px-32 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-gray-400 text-sm">
    <div>
      <div class="text-xl font-bold text-white mb-4">GRAVITY</div>
      <p class="text-gray-500">Studio to Stage, Simplified.</p>
    </div>
    <div>
      <h6 class="font-semibold text-white mb-4">Pages</h6>
      <ul class="space-y-2">
        <li><a href="#" class="hover:text-orange-400">About Us</a></li>
        <li><a href="#" class="hover:text-orange-400">Contact</a></li>
        <li><a href="#" class="hover:text-orange-400">Blog</a></li>
        <li><a href="#" class="hover:text-orange-400">Careers</a></li>
      </ul>
    </div>
    <div>
      <h6 class="font-semibold text-white mb-4">Follow Us</h6>
      <div class="flex space-x-4">
        <a href="#" class="hover:text-orange-400">Facebook</a>
        <a href="#" class="hover:text-orange-400">Twitter</a>
        <a href="#" class="hover:text-orange-400">Instagram</a>
        <a href="#" class="hover:text-orange-400">LinkedIn</a>
      </div>
    </div>
    <div>
      <h6 class="font-semibold text-white mb-4">Newsletter</h6>
      <p class="text-gray-500 mb-4">Stay updated with our latest news and offers.</p>
      <form class="space-x-4 flex">
        <input type="email" class="bg-gray-800 text-white p-3 rounded-lg w-2/3" placeholder="Your email" required />
        <button type="submit" class="bg-orange-500 text-white py-3 px-6 rounded-lg hover:bg-orange-600">Subscribe</button>
      </form>
    </div>
  </footer>

  <!-- AOS Script -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
