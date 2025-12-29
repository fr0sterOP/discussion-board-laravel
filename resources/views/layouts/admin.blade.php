<!DOCTYPE html>
<html lang="en" x-data="{
    darkMode: localStorage.getItem('darkMode') === 'true',
    sidebarOpen: true
}" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" :class="{ 'dark': darkMode }">


<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900">

    <div class="flex h-screen overflow-hidden">

        <!-- SIDEBAR -->
        <aside :class="sidebarOpen ? 'w-64' : 'w-20'"
            class="bg-gray-800 text-white transition-all duration-300 flex flex-col">
            <!-- Logo -->
            <div class="flex items-center justify-between p-4">
                <span x-show="sidebarOpen" class="text-xl font-bold">Admin</span>
                <button @click="sidebarOpen = !sidebarOpen">
                    ☰
                </button>
            </div>

            <!-- Menu -->
            <nav class="flex-1 mt-4 space-y-1">
                <a href="/admin" class="flex items-center gap-3 px-4 py-2 hover:bg-gray-700">
                    🏠 <span x-show="sidebarOpen">Dashboard</span>
                </a>

                <a href="/categories" class="flex items-center gap-3 px-4 py-2 hover:bg-gray-700">
                    📂 <span x-show="sidebarOpen">Categories</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-gray-700">
                    📝 <span x-show="sidebarOpen">Posts</span>
                </a>
            </nav>
        </aside>

        <!-- MAIN CONTENT -->
        <div class="flex-1 flex flex-col">

            <!-- TOP BAR -->
            <header class="bg-white dark:bg-gray-800 shadow px-6 py-3 flex justify-between items-center">
                <h1 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    @yield('title', 'Dashboard')
                </h1>

                <!-- Right menu -->
                <div class="flex items-center gap-4">

                    <!-- Dark Mode Toggle -->
                    <button @click="darkMode = !darkMode"
                        class="p-2 rounded-full bg-gray-200 dark:bg-gray-700
               text-gray-800 dark:text-gray-200
               hover:scale-110 transition"
                        title="Toggle Dark Mode">
                        <span x-show="!darkMode">🌙</span>
                        <span x-show="darkMode">☀️</span>
                    </button>

                    <span class="text-gray-600 dark:text-gray-300">
                        Hello, {{ auth()->user()->name }}
                    </span>

                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-red-600 hover:underline">
                            Logout
                        </button>
                    </form>
                </div>

            </header>

            <!-- PAGE CONTENT -->
            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content')
            </main>

        </div>
    </div>

</body>

</html>
