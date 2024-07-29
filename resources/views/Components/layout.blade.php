<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #6b73ff 0%, #000dff 100%);
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
<nav class="gradient-bg shadow-lg">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-200 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <!-- Company Logo and Name -->
          <img class="h-14 w-auto" src="{{ asset('images/logo-no-background.png') }}" alt="Job Listings Logo">
          
        </div>
        <div class="hidden sm:ml-6 sm:flex sm:items-center sm:space-x-4 sm:flex-1">
          <div class="flex space-x-4">
            <a href="/" class="{{ request()->is('/') ? 'bg-blue-900 text-white' : 'text-gray-200 hover:bg-blue-600 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Dashboard</a>
            <a href="/jobs" class="{{ request()->is('jobs') ? 'bg-blue-900 text-white' : 'text-gray-200 hover:bg-blue-600 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Job Listing</a>
            <a href="/contact" class="{{ request()->is('contact') ? 'bg-blue-900 text-white' : 'text-gray-200 hover:bg-blue-600 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Contact</a>
          </div>
          <div class="ml-auto flex space-x-4">
            <!-- Placeholder for additional buttons or links -->
          </div>
        </div>
      </div>
      @guest
      <div class="hidden sm:flex sm:items-center sm:space-x-4">
        <a href="/login" class="text-gray-200 hover:bg-blue-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Log in</a>
        <a href="/register" class="text-gray-200 hover:bg-blue-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Register</a>
      </div>
      @endguest

      @auth
      <form method="POST" action="/logout" class="hidden sm:flex sm:items-center">
          @csrf
          <button class="text-gray-200 hover:bg-blue-600 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Log Out</button>
      </form>
      @endauth
    </div>
  </div>
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a href="/" class="{{ request()->is('/') ? 'bg-blue-900 text-white' : 'text-gray-200 hover:bg-blue-600 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Dashboard</a>
      <a href="/jobs" class="{{ request()->is('jobs') ? 'bg-blue-900 text-white' : 'text-gray-200 hover:bg-blue-600 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Job Listing</a>
      <a href="/contact" class="{{ request()->is('contact') ? 'bg-blue-900 text-white' : 'text-gray-200 hover:bg-blue-600 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Contact</a>
    </div>
  </div>
</nav>
<header class="bg-white shadow-lg">
    {{-- <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-between">
       <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
        <a href="/jobs/create" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">Create Job</a>
    </div>--}}
</header>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        {{$slot}}
    </div>
</main>
<footer class="bg-gray-800 py-6 mt-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center text-gray-400">
            <div>&copy; 2024 Job Listings. All rights reserved.</div>
            <div class="space-x-4">
                <a href="#" class="hover:text-white">Privacy Policy</a>
                <a href="#" class="hover:text-white">Terms of Service</a>
                <a href="#" class="hover:text-white">Contact Us</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
