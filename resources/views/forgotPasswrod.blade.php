<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Forget Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />
  <style>
   body {
     font-family: 'Montserrat', sans-serif;
   }
  </style>
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <!-- Left Image Section -->
    <div class="w-1/2 h-full bg-cover bg-center">
        <img alt=""
            class="h-full w-full object-cover opacity-65"
            src="{{ asset('images/Rectangle 402.png')}} " />
    </div>
    <!-- Right Form Section -->
    <div class="w-1/2 flex flex-col items-center justify-center">
      <!-- Logo Section -->
      <div class="text-center mb-6">
          <img alt="" class="mx-auto mb-4" height="200" src="{{ asset('images/Group 6225.png') }}" width="200"/>
      </div>

      <!-- Forget Password Form -->
      <div class="bg-white p-10 rounded-lg shadow-lg w-3/4">
        <h2 class="text-2xl font-bold mb-2">Forget Password</h2>
        <p class="text-gray-600 mb-6">Verify contact for password reset</p>
        <form>
          <div class="relative mb-4">
            <input class="w-full px-4 py-2 pl-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600"
                   placeholder="Enter Email" type="email"/>
            <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
          </div>
          <button class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600" type="submit">
            Send OTP
          </button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
