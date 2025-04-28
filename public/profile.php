<?php
session_start();
require_once 'config.php'; // Ensure you have this file correctly!

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// Fetch user profile data
$username = $_SESSION["username"];

$stmt = $pdo->prepare("SELECT * FROM profiles WHERE username = ?");
$stmt->execute([$username]);
$profile = $stmt->fetch();

// If no profile exists yet, set empty defaults
$full_name = $profile['full_name'] ?? '';
$linkedin = $profile['linkedin'] ?? '';
$instagram = $profile['instagram'] ?? '';
$bio = $profile['bio'] ?? '';
$interests = $profile['interests'] ?? '';
$story = $profile['story'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-image: url('https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659702c8b37cb3dce69dd8b9_Groootin%20Gradient%20BG%20(1)%201.png');
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
      min-height: 100vh;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      border-radius: 1rem;
      border: 1px solid rgba(255, 255, 255, 0.18);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    }
    .glass-nav, .glass-footer {
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(12px);
    }
    input, textarea {
      background: rgba(255, 255, 255, 0.8) !important;
      transition: all 0.3s ease;
    }
    input:focus, textarea:focus {
      background: rgba(255, 255, 255, 0.95) !important;
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3);
    }
    .profile-img {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .profile-img:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body class="min-h-screen flex flex-col">

<!-- Navbar -->
<nav class="glass-nav p-4 text-white flex justify-between items-center">
  <h1 class="text-xl font-bold">Profile</h1>
  <a href="dashboard.php" class="hover:text-gray-300 transition-colors duration-300">Home</a>
</nav>

<!-- Main Content -->
<main class="flex-1 flex items-center justify-center p-6">
  <div class="glass-card w-full max-w-3xl p-8 space-y-8 text-black">
    
    <!-- Profile Header -->
    <div class="text-center">
      <img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" alt="Profile" class="w-24 h-24 rounded-full mx-auto border-4 border-blue-400 mb-4 profile-img">
      <h2 class="text-2xl font-bold"><?php echo htmlspecialchars($username); ?></h2>
      <p class="text-blue-100"><?php echo htmlspecialchars($_SESSION["email"] ?? 'abhi@gmail.com'); ?></p>
    </div>

    <?php if (isset($_GET['success'])): ?>
      <div class="bg-green-100 text-green-800 p-3 rounded mb-4 text-center">
        Profile updated successfully!
      </div>
    <?php endif; ?>

    <!-- Update Profile Form -->
    <form action="update_profile.php" method="POST" class="space-y-6">
      
      <div>
        <label class="block text-blue-100 mb-1">Full Name</label>
        <input name="full_name" type="text" value="<?php echo htmlspecialchars($full_name); ?>" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-blue-100 mb-1">LinkedIn Profile URL</label>
        <input name="linkedin" type="url" value="<?php echo htmlspecialchars($linkedin); ?>" placeholder="LinkedIn Profile URL" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-blue-100 mb-1">Instagram Profile URL</label>
        <input name="instagram" type="url" value="<?php echo htmlspecialchars($instagram); ?>" placeholder="Instagram Profile URL" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-pink-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-blue-100 mb-1">Short Bio</label>
        <textarea name="bio" placeholder="Write a short bio..." class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none h-24"><?php echo htmlspecialchars($bio); ?></textarea>
      </div>

      <div>
        <label class="block text-blue-100 mb-1">Interests</label>
        <input name="interests" type="text" value="<?php echo htmlspecialchars($interests); ?>" placeholder="e.g. Music, Coding, Sports" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-green-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-blue-100 mb-1">Your Story</label>
        <textarea name="story" placeholder="Tell your story..." class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-purple-400 focus:outline-none h-32"><?php echo htmlspecialchars($story); ?></textarea>
      </div>

      <div class="flex gap-4">
        <button type="submit" class="flex-1 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition hover:shadow-lg">Update Profile</button>
        <a href="dashboard.php" class="flex-1 bg-gray-600 text-white py-3 rounded-lg hover:bg-gray-700 text-center transition hover:shadow-lg">Dashboard</a>
      </div>

    </form>
  </div>
</main>

<!-- Footer -->
<footer class="glass-footer text-blue-100 text-center py-6 text-sm">
  &copy; <?php echo date("Y"); ?> Gravity - All rights reserved
</footer>

</body>
</html>
