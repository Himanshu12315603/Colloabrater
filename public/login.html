<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <meta name="description" content="Login to your account" />
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Configure tailwind with our custom colors -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            animation: {
              'fade-in': 'fadeIn 0.5s ease-out',
              'pulse-glow': 'pulseGlow 3s ease-in-out infinite'
            },
            keyframes: {
              fadeIn: {
                '0%': { opacity: '0', transform: 'translateY(10px)' },
                '100%': { opacity: '1', transform: 'translateY(0)' }
              },
              pulseGlow: {
                '0%, 100%': { boxShadow: '0 0 20px rgba(255, 255, 255, 0.15)' },
                '50%': { boxShadow: '0 0 30px rgba(255, 255, 255, 0.3)' }
              }
            }
          }
        }
      }
    </script>
    
    <!-- Additional Styles -->
    <style>
      .animate-fade-in {
        animation: fadeIn 0.5s ease-out;
      }
      .animate-pulse-glow {
        animation: pulseGlow 3s ease-in-out infinite;
      }
    </style>
  </head>

  <body class="min-h-screen w-full flex items-center justify-center bg-gradient-to-r from-[#9f3737] via-[#b94747] to-[#e05a5a] p-4 sm:p-6 md:p-8">
    <div class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg transition-all duration-300">
      <div class="relative backdrop-blur-sm bg-white/10 shadow-xl rounded-2xl border border-white/20 p-5 sm:p-6 md:p-8 animate-fade-in animate-pulse-glow">
        <div class="absolute inset-0 rounded-2xl bg-white/5 z-0"></div>
        
        <div class="relative z-10">
          <div class="text-center mb-6 md:mb-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-white mb-1 sm:mb-2">Welcome back</h2>
            <p class="text-sm sm:text-base text-gray-200">Enter your credentials to access your account</p>
          </div>
          
          <div id="error-message" class="hidden bg-red-500/20 border border-red-500/50 text-white px-3 py-2 rounded-lg mb-4 text-sm sm:text-base"></div>
          
          <form id="login-form" class="space-y-4 sm:space-y-5 md:space-y-6">
            <div class="space-y-1 sm:space-y-2">
              <label for="email" class="block text-white text-sm sm:text-base">Email</label>
              <input
                id="email"
                type="email"
                placeholder="name@example.com"
                class="flex h-9 sm:h-10 w-full rounded-md border border-white/30 bg-white/10 px-3 py-2 text-sm sm:text-base text-white placeholder:text-gray-300 focus:border-white focus:outline-none"
                required
              />
            </div>
            
            <div class="space-y-1 sm:space-y-2">
              <div class="flex justify-between items-center">
                <label for="password" class="text-white text-sm sm:text-base">Password</label>
                <a 
                  href="#" 
                  class="text-xs sm:text-sm font-medium text-gray-200 hover:text-white transition-colors"
                >
                  Forgot password?
                </a>
              </div>
              <div class="relative">
                <input
                  id="password"
                  type="password"
                  placeholder="••••••••"
                  class="flex h-9 sm:h-10 w-full rounded-md border border-white/30 bg-white/10 px-3 py-2 text-sm sm:text-base text-white placeholder:text-gray-300 focus:border-white pr-10 focus:outline-none"
                  required
                />
                <button 
                  type="button"
                  id="toggle-password"
                  class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-200 hover:text-white"
                  aria-label="Show password"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-4 w-4 sm:h-5 sm:w-5">
                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                    <circle cx="12" cy="12" r="3"/>
                  </svg>
                </button>
              </div>
            </div>
            
            <div class="flex items-center space-x-2">
              <input type="checkbox" id="remember" class="rounded border-white/30 bg-white/10 text-red-600 focus:ring-red-600" />
              <label for="remember" class="text-xs sm:text-sm font-medium text-white">Remember me</label>
            </div>
            
            <button 
              type="submit" 
              id="submit-button"
              class="w-full flex justify-center items-center h-9 sm:h-10 rounded-md bg-white text-red-600 hover:bg-gray-100 transition-all text-sm sm:text-base py-2 sm:py-2.5"
            >
              Sign In
            </button>
            
            <div class="text-center mt-4 sm:mt-5">
              <p class="text-xs sm:text-sm text-gray-200">
                Don't have an account?
                <a href="index.html" class="font-semibold text-white hover:underline transition-all ml-1">Sign up</a>
              </p>
            </div>
          </form>
        </div>
      </div>
      
      <div class="mt-6 sm:mt-8 text-center text-white/60 text-xs sm:text-sm">
        <p>© 2025 YourCompany. All rights reserved.</p>
      </div>
    </div>

    <!-- JavaScript -->
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const loginForm = document.getElementById('login-form');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('toggle-password');
        const submitButton = document.getElementById('submit-button');
        const errorMessage = document.getElementById('error-message');
        
        // Toggle password visibility
        togglePasswordButton.addEventListener('click', () => {
          const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
          passwordInput.setAttribute('type', type);
          
          // Change the icon based on password visibility
          if (type === 'text') {
            togglePasswordButton.innerHTML = `
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-off h-4 w-4 sm:h-5 sm:w-5">
                <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
                <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
                <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
                <line x1="2" x2="22" y1="2" y2="22"/>
              </svg>
            `;
            togglePasswordButton.setAttribute('aria-label', 'Hide password');
          } else {
            togglePasswordButton.innerHTML = `
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-4 w-4 sm:h-5 sm:w-5">
                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                <circle cx="12" cy="12" r="3"/>
              </svg>
            `;
            togglePasswordButton.setAttribute('aria-label', 'Show password');
          }
        });
        
        // Handle form submission
        loginForm.addEventListener('submit', (e) => {
          e.preventDefault();
          
          // Reset error message
          errorMessage.classList.add('hidden');
          errorMessage.textContent = '';
          
          // Disable submit button and show loading state
          submitButton.disabled = true;
          submitButton.textContent = 'Signing in...';
          
          // Get form values
          const email = emailInput.value;
          const password = passwordInput.value;
          
          // Simulate API call with a timeout
          setTimeout(() => {
            console.log('Login attempt with:', { email, password });
            
            // For demo purposes, we're just logging the credentials
            // In a real app, you would make an API call to validate credentials
            
            // Re-enable submit button
            submitButton.disabled = false;
            submitButton.textContent = 'Sign In';
            
            // Optional: Show success message or redirect
            // window.location.href = 'dashboard.html';
          }, 1500);
        });
      });
    </script>
  </body>
</html>