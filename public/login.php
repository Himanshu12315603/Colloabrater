<?php
require 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // $_SESSION["user_id"] = $user['id'];        // Store user ID
        $_SESSION["username"] = $user['username']; // Already good
        // $_SESSION["email"] = $user['email'];        // (Optional) If you want email too
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<script>
            document.addEventListener('DOMContentLoaded', () => {
                const errorMsg = document.getElementById('error-msg');
                errorMsg.textContent = 'Invalid username or password!';
                errorMsg.classList.remove('hidden');
            });
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Gravity</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('https://cdn.prod.website-files.com/647dc8f9284342c55bc86dad/659702c8b37cb3dce69dd8b9_Groootin%20Gradient%20BG%20(1)%201.png');">

    <div class="w-full max-w-md px-8 py-10 bg-white bg-opacity-20 backdrop-blur-xl rounded-2xl shadow-2xl border border-white border-opacity-20 transition-all duration-500">
        
        <!-- Gravity Title -->
        <div class="text-center mb-8">
            <h1 class="text-5xl font-extrabold text-white tracking-wide drop-shadow-lg">Gravity</h1>
            <p class="text-white text-opacity-80 mt-2 text-sm">Welcome back! Login to explore.</p>
        </div>

        <!-- Error Message -->
        <div id="error-msg" class="text-red-700 bg-red-100 px-4 py-2 rounded-md mb-4 text-sm hidden text-center">
            Invalid username or password!
        </div>

        <!-- Login Form -->
        <form method="post" class="space-y-6">
            <div>
                <label class="block text-white text-sm mb-1">Username</label>
                <input type="text" name="username" required 
                    class="w-full px-4 py-2 rounded-lg bg-white bg-opacity-10 text-white placeholder-white placeholder-opacity-70 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-pink-300 transition" 
                    placeholder="Enter your username">
            </div>

            <div>
                <label class="block text-white text-sm mb-1">Password</label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-2 rounded-lg bg-white bg-opacity-10 text-white placeholder-white placeholder-opacity-70 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-pink-300 transition"
                    placeholder="Enter your password">
            </div>

            <!-- Login Button -->
            <button type="submit" 
                class="w-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 hover:from-blue-500 hover:via-pink-500 hover:to-purple-500 text-white font-semibold py-2 rounded-lg shadow-lg transition-all duration-500">
                Login
            </button>
        </form>

        <!-- Register Link -->
        <p class="text-center mt-6 text-sm text-white text-opacity-90">
            Don’t have an account? 
            <a href="register.php" class="text-white underline hover:text-blue-200 transition">Register here</a>
        </p>
    </div>

</body>
</html>
