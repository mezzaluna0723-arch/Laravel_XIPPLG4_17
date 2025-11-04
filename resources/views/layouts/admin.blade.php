<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dilesin Admin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #1f2937;
            color: white;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 8px 0;
        }
        .sidebar a:hover {
            color: #38bdf8;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar-brand {
            font-weight: bold;
            color: #38bdf8 !important;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar position-fixed">
            <h4 class="mb-4">Dilesin Admin</h4>
            <a href="{{ route('admin.students.index') }}">Dashboard</a>
            <a href="#">Users</a>
            <a href="#">Settings</a>
        </div>

        <div class="content flex-grow-1">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
                <div class="container-fluid">
                    <span class="navbar-brand">Dashboard</span>
                    <div class="ms-auto">Admin</div>
                </div>
            </nav>

            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
