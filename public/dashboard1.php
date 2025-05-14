<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravity Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659702c8b37cb3dce69dd8b9_Groootin%20Gradient%20BG%20(1)%201.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        .nav-link:hover {
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="min-h-screen text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white bg-opacity-90 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-blue-600">Gravity</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="dashboard.php" class="nav-link text-gray-700 hover:text-blue-600 transition">Home</a>
                    <!-- <a href="gallery.php" class="nav-link text-gray-700 hover:text-blue-600 transition">Gallery</a> -->
                    <a href="dashboard.php" class="nav-link text-blue-600 font-medium transition">Dashboard</a>
                    <a href="events.php" class="nav-link text-gray-700 hover:text-blue-600 transition">Upcoming Events</a>
                    <!-- <a href="suggestions.php" class="nav-link text-gray-700 hover:text-blue-600 transition">Suggestions</a> -->
                    <a href="profile.php" class="nav-link text-gray-700 hover:text-blue-600 transition">Profile</a>
                    <a href="logout.php" class="nav-link text-gray-700 hover:text-red-600 transition">Logout</a>
                </div>
                <div class="md:hidden flex items-center">
                    <!-- Mobile menu button -->
                    <button class="text-gray-700 focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Welcome Section -->
        <div class="glass-card p-8 mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Hey, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
            <p class="text-lg text-white mb-6">Welcome to the Gravity Dashboard.</p>
            <p class="text-white opacity-90">
                From here, you can register for upcoming events, view past events, access certificates, and more.
            </p>
            <div class="mt-6 bg-yellow-100 bg-opacity-30 border-l-4 border-yellow-400 p-4">
                <p class="text-yellow-100"><i class="fas fa-info-circle mr-2"></i> QR code will be available on the day of the event.</p>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- My Certificates -->
            <div class="glass-card p-6 hover:shadow-lg transition">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <i class="fas fa-certificate text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white">My Certificates</h3>
                </div>
                <p class="text-white opacity-80 mb-4">Access all your earned certificates from past events.</p>
                <a href="certificates.php" class="inline-flex items-center text-blue-300 hover:text-blue-100 transition">
                    View Certificates <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Notifications -->
            <div class="glass-card p-6 hover:shadow-lg transition">
                <div class="flex items-center mb-4">
                    <div class="bg-green-100 p-3 rounded-full mr-4">
                        <i class="fas fa-bell text-green-600 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white">Subscribe to Notifications</h3>
                </div>
                <p class="text-white opacity-80 mb-4">Get notified about upcoming events and important announcements.</p>
                <div class="flex items-center">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-white">Notifications On</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Upcoming Events Preview -->
        <div class="glass-card p-6 mb-8">
            <h2 class="text-2xl font-bold text-white mb-6">Upcoming Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Event Card 1 -->
                <div class="bg-white bg-opacity-20 rounded-lg p-4 hover:bg-opacity-30 transition">
                    <div class="bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded-full inline-block mb-3">New</div>
                    <h3 class="text-lg font-semibold text-white">Cloud Workshop</h3>
                    <p class="text-white opacity-80 text-sm mb-2">June 15, 2025</p>
                    <p class="text-white opacity-80 text-sm mb-4">Learn aws fundamentals with hands-on labs</p>
                    <a href="#" class="text-blue-300 text-sm hover:text-blue-100 transition">Register Now</a>
                </div>
                
                <!-- Event Card 2 -->
                <div class="bg-white bg-opacity-20 rounded-lg p-4 hover:bg-opacity-30 transition">
                    <h3 class="text-lg font-semibold text-white">AWS Certification Prep</h3>
                    <p class="text-white opacity-80 text-sm mb-2">July 5, 2025</p>
                    <p class="text-white opacity-80 text-sm mb-4">Prepare for your AWS certification exam</p>
                    <a href="#" class="text-blue-300 text-sm hover:text-blue-100 transition">Learn More</a>
                </div>
                
                <!-- Event Card 3 -->
                <div class="bg-white bg-opacity-20 rounded-lg p-4 hover:bg-opacity-30 transition">
                    <h3 class="text-lg font-semibold text-white">Hackathon</h3>
                    <p class="text-white opacity-80 text-sm mb-2">August 20, 2025</p>
                    <p class="text-white opacity-80 text-sm mb-4">24-hour cloud innovation challenge</p>
                    <a href="#" class="text-blue-300 text-sm hover:text-blue-100 transition">View Details</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 bg-opacity-80 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Gravity Cloud Club</h3>
                    <p class="text-gray-400">Empowering students with cloud computing knowledge and skills.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="home.php" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="contact.php" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Policies</h3>
                    <ul class="space-y-2">
                        <li><a href="privacy.php" class="text-gray-400 hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="terms.php" class="text-gray-400 hover:text-white transition">Terms of Service</a></li>
                        <li><a href="refund.php" class="text-gray-400 hover:text-white transition">Refund Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-discord fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>© 2025-26 Gravity. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>