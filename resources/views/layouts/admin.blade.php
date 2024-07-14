<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    @yield('css')
    <!-- Add other CSS files or libraries here -->
</head>
<body>
    <div class="wrapper">
        <!-- Header -->
        @include('admins.blocks.header')

        <!-- Sidebar -->
        @include('admins.blocks.sidebar')

        <!-- Main Content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('admins.blocks.footer')
    </div>

    @yield('js')
    <!-- Add other JS files or libraries here -->
</body>
</html>
