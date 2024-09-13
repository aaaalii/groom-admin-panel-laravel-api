<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<title>
    New Password
</title>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Left Image Section -->
        <div class="w-1/2 bg-cover bg-center bg-no-repeat"
             style="background-image: url('https://placehold.co/');">
             <img alt=""
                class="h-full w-full object-cover opacity-65"
                src="{{ asset('images\Rectangle 402.svg')}} " />
        </div>

        <!-- Right Form Section -->
        <div class="w-1/2 flex flex-col items-center justify-center">
            <!-- Logo and Title Section -->
            <div class="text-center mb-6">
                <img alt="Logo" class="mx-auto mb-4" height="200" src="{{ asset('images\Group 6225.svg') }}" width="200"/>
            </div>

            <!-- Login Form Section -->
            <div class="bg-white p-10 rounded-lg shadow-lg w-3/4"> 
                <h2 class="text-2xl font-bold mb-2">
                    Enter New Password
                </h2>
                <p class="text-gray-500 mb-6">
                    Verify contact for password reset
                </p>
                <form>
                    <div class="mb-4">
                        <label class="block relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fas fa-lock text-gray-400"></i>
                            </span>
                            <input class="pl-10 pr-3 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600"
                                   placeholder="Password" type="password" />
                            <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <i class="fas fa-eye text-gray-400"></i>
                            </span>
                        </label>
                    </div>
                    <div class="mb-6">
                        <label class="block relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fas fa-lock text-gray-400"></i>
                            </span>
                            <input class="pl-10 pr-3 py-2 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600"
                                   placeholder="Confirm Password" type="password" />
                            <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <i class="fas fa-eye text-gray-400"></i>
                            </span>
                        </label>
                    </div>
                    <button class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600"
                            type="submit">
                        Change Password
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
