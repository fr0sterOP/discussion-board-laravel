<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4 text-xl font-bold">
                Admin Panel
            </div>

            <nav class="mt-4 space-y-2">
                <a href="/admin" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
                <a href="/categories" class="block px-4 py-2 hover:bg-gray-700">Categories</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-700">Posts</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>

    </div>
</body>

</html>
