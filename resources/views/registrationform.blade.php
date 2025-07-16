<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SerendibMade - Register</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'serendib-teal': '#004D40',
                            'serendib-gold': '#B88A42',
                            'serendib-gray': '#B0B0B0'
                        }
                    }
                }
            }
        </script>
        <style>
            .cinzel-decorative {
                font-family: 'Cinzel Decorative', serif;
            }
            .raleway {
                font-family: 'Raleway', sans-serif;
            }
            .input-focus:focus {
                border-color: #C8A165 !important;
                box-shadow: 0 0 0 3px rgba(200, 161, 101, 0.1) !important;
            }
            .input-hover:hover {
                border-color: #C8A165 !important;
            }
            .btn-gradient {
                background: linear-gradient(135deg, #C8A165 0%, #004D40 100%);
            }
            .btn-gradient:hover {
                box-shadow: 0 10px 25px rgba(200, 161, 101, 0.3);
            }
            .fade-in {
                animation: fadeIn 0.6s ease-out;
            }
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </head>

    <body class="min-h-screen flex items-center justify-center p-4 bg-[#004D40] overflow-hidden">
        <div class="bg-white bg-opacity-95 backdrop-blur-lg rounded-xl shadow-lg px-5 py-12 w-full max-w-lg relative z-10 transition-all duration-500 hover:scale-105 fade-in">
            
            <div class="flex flex-col items-center space-y-1 mb-5">
                <a href="/" class="flex items-center space-x-2">
                    <div class="text-xl font-bold">
                        <span class="cinzel-decorative" style="color: #007D7D;">SERENDIB</span>
                        <span class="raleway" style="color: #7b8b8e;">MADE</span>
                    </div>
                </a>
                <p class="text-gray-600 text-xs text-center">Create your account below</p>
            </div>

            <!-- Registration Form -->
            <div class="space-y-3">
                <div>
                    <label class="block text-gray-1000 font-medium mb-1 text-xs">Username</label>
                    <input type="text" id="username" class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg bg-gray-50 focus:outline-none input-focus input-hover" placeholder="Choose a username" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1 text-xs">Email</label>
                    <input type="email" id="email" class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg bg-gray-50 focus:outline-none input-focus input-hover" placeholder="you@example.com" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1 text-xs">Password</label>
                    <input type="password" id="password" class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg bg-gray-50 focus:outline-none input-focus input-hover" placeholder="Create a password" required>
                </div>

                <!--<div>
                    <label class="block text-gray-700 font-medium mb-1 text-xs">Confirm Password</label>
                    <input type="password" id="confirmPassword" class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg bg-gray-50 focus:outline-none input-focus input-hover" placeholder="Re-enter your password" required>
                </div>-->

                <div>
                    <label class="block text-gray-700 font-medium mb-1 text-xs">Role</label>
                    <select id="role" class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg bg-gray-50 focus:outline-none input-focus input-hover" required>
                        <option value="">Select a role</option>
                        <option value="customer">Customer</option>
                        <option value="artisan">Artisan</option>
                    </select>
                </div>

                <button
                    id="registerBtn"
                    class="w-full py-2 text-sm text-white font-semibold rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl btn-gradient"
                >
                    Register
                </button>
            </div>

            <!-- Login Redirect -->
            <div class="text-center mt-4">
                <p class="text-xs text-gray-600">
                    Already have an account? 
                    <a href="/login" class="text-serendib-gold hover:underline font-semibold">Sign in here</a>
                </p>
            </div>
        </div>

        <script>
            const registerBtn = document.getElementById('registerBtn');

            registerBtn.addEventListener('click', function () {
                const username = document.getElementById('username').value.trim();
                const email = document.getElementById('email').value.trim();
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirmPassword').value;
                const role = document.getElementById('role').value;

                if (!username || !email || !password || !confirmPassword || !role) {
                    alert("Please fill out all fields.");
                    return;
                }

                if (password !== confirmPassword) {
                    alert("Passwords do not match.");
                    return;
                }

                registerBtn.innerHTML = `
                    <div class="flex items-center justify-center">
                        <div class="animate-spin rounded-full h-4 w-4 border-b-2 border-white mr-2"></div>
                        Registering...
                    </div>
                `;
                registerBtn.disabled = true;

                setTimeout(() => {
                    alert(`Account created successfully for ${username} as a ${role}.`);
                    registerBtn.innerHTML = "Register";
                    registerBtn.disabled = false;

                    document.getElementById('username').value = '';
                    document.getElementById('email').value = '';
                    document.getElementById('password').value = '';
                    document.getElementById('confirmPassword').value = '';
                    document.getElementById('role').value = '';
                }, 1500);
            });
        </script>
    </body>

</html>
