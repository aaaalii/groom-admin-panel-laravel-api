<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <title>
        Login
    </title>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Left Image Section -->
        <div class="w-1/2 bg-cover bg-center">
            <img alt=""
                class="h-full w-full object-cover opacity-65"
                src="{{ asset('images/loginImage.png') }}" />
        </div>
        <!-- Right Form Section -->
        <div class="w-1/2 flex flex-col items-center justify-center">
            <!-- Logo and Title Section -->
            <div class="text-center mb-6">
                <img alt="Logo" class="mx-auto mb-4" height="200" src="{{ asset('images/Group 6225.png') }}" width="200"/>
            </div>

            <!-- Login Form Section -->
            <div class="bg-white p-10 rounded-lg shadow-lg w-3/4">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold mb-2">Login</h2>
                    <p class="text-gray-600">Log in to your account</p>
                </div>
                <form>
                    <div class="mb-4">
                        <div class="relative">
                            <input
                                class="w-full px-4 py-2 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600"
                                placeholder="Enter Email" type="email" />
                            <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        </div>
                    </div>
                    <div class="mb-4 relative">
                        <label class="block text-gray-700 relative">
                            <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                            <input
                                class="w-full px-10 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600"
                                placeholder="Password" type="password" />
                            <i class="fas fa-eye absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        </label>
                    </div>
                    <button
                        class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition duration-200"
                        type="submit">
                        Log in
                    </button>
                </form>
                <div class="text-center mt-4">
                    <a class="text-purple-600 hover:underline" href="ForgotPassword.html">
                        Forgot your password?
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
