<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    try {
        $stmt->execute([$username, $password]);
        echo "<script>
            document.addEventListener('DOMContentLoaded', () => {
                const success = document.getElementById('success-msg');
                success.textContent = 'User registered successfully! Click to login.';
                success.classList.remove('hidden');
            });
        </script>";
    } catch (PDOException $e) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', () => {
                const error = document.getElementById('error-msg');
                error.textContent = 'Registration failed: " . $e->getMessage() . "';
                error.classList.remove('hidden');
            });
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Gravity</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659702c8b37cb3dce69dd8b9_Groootin%20Gradient%20BG%20(1)%201.png');">

    <div class="w-full max-w-md px-8 py-10 bg-white bg-opacity-20 backdrop-blur-xl rounded-2xl shadow-2xl border border-white border-opacity-20 transition-all duration-500">
        
        <!-- Brand Logo and Welcome -->
        <div class="text-center mb-6">
            <h1 class="text-4xl font-bold text-white tracking-wide drop-shadow-md">Welcome to <span class="text-pink-300">Gravity</span></h1>
            <p class="text-white text-opacity-90 mt-2 text-sm">Let’s create your account and start the journey 🚀</p>
        </div>

        <!-- Register Icon -->
        <div class="flex justify-center mb-6">
            <i class="ph ph-user-circle-plus text-white text-6xl drop-shadow-lg"></i>
        </div>

        <!-- Success & Error Message -->
        <div id="success-msg" class="text-green-700 bg-green-100 px-4 py-2 rounded-md mb-4 text-sm hidden text-center cursor-pointer" onclick="window.location.href='login.php'">
            User registered successfully! Click to login.
        </div>
        <div id="error-msg" class="text-red-700 bg-red-100 px-4 py-2 rounded-md mb-4 text-sm hidden text-center"></div>

        <!-- Register Form -->
        <form method="post" class="space-y-5">
            <div>
                <label class="block text-white text-sm mb-1">Username</label>
                <div class="relative">
                    <input type="text" name="username" required
                        class="w-full pl-10 pr-4 py-2 rounded-lg bg-white bg-opacity-10 text-white placeholder-white placeholder-opacity-70 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-pink-300 transition"
                        placeholder="Create your username">
                    <i class="ph ph-user absolute left-3 top-1/2 transform -translate-y-1/2 text-white text-opacity-70"></i>
                </div>
            </div>
            <div>
                <label class="block text-white text-sm mb-1">Email</label>
                <div class="relative">
                    <input type="email" name="email"  required
                        class="w-full pl-10 pr-4 py-2 rounded-lg bg-white bg-opacity-10 text-white placeholder-white placeholder-opacity-70 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-pink-300 transition"
                        placeholder="xyz@gmail.com">
                    <i class="ph ph-user absolute left-3 top-1/2 transform -translate-y-1/2 text-white text-opacity-70"></i>
                </div>
            </div>
            <div>
                <label class="block text-white text-sm mb-1">Mobile No</label>
                <div class="relative">
                    <input type="text" name="mobile" required
                        class="w-full pl-10 pr-4 py-2 rounded-lg bg-white bg-opacity-10 text-white placeholder-white placeholder-opacity-70 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-pink-300 transition"
                        placeholder="950####573">
                    <i class="ph ph-user absolute left-3 top-1/2 transform -translate-y-1/2 text-white text-opacity-70"></i>
                </div>
            </div>

            <div>
                <label class="block text-white text-sm mb-1">Password</label>
                <div class="relative">
                    <input type="password" name="password" required
                        class="w-full pl-10 pr-4 py-2 rounded-lg bg-white bg-opacity-10 text-white placeholder-white placeholder-opacity-70 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-pink-300 transition"
                        placeholder="Create a strong password">
                    <i class="ph ph-lock-key-open absolute left-3 top-1/2 transform -translate-y-1/2 text-white text-opacity-70"></i>
                </div>
            </div>

            <!-- Register Button -->
            <button type="submit"
                class="w-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 hover:from-blue-500 hover:via-pink-500 hover:to-purple-500 text-white font-semibold py-2 rounded-lg shadow-lg transition-all duration-500">
                Register
            </button>
        </form>

        <!-- Login Link -->
        <p class="text-center mt-6 text-sm text-white text-opacity-90">
            Already have an account? 
            <a href="login.php" class="text-white underline hover:text-blue-200 transition">Login here</a>
        </p>
    </div>

</body>
</html>
