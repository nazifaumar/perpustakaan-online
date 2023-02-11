<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dash.css') }}">

    <title>Admin</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Dashboard</span>
        </a>
        <ul class="side-menu top">
            <li @if (Route::is('dashboard')) class="active" @endif>
                <a href="/dashboard">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li @if (Route::is('user')) class="active" @endif>
                <a href="/dashboard/user">
                    <i class='bx bxs-group'></i>
                    <span class="text">Users</span>
                </a>
            </li>
            <li @if (Route::is('book')) class="active" @endif>
                <a href="/dashboard/book">
                    <i class='bx bxs-book-alt'></i>
                    <span class="text">Book</span>
                </a>
            </li>

            <li @if (Route::is('category')) class="active" @endif>
                <a href="/dashboard/category">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Category Book</span>
                </a>
            </li>
            <li>
                <a href="/logout" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
    </section>
    <!-- SIDEBAR -->
    @yield('content')

    <script src="assets/js/script.js"></script>
</body>

</html>
