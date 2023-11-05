<!DOCTYPE html>
<html>
<head>
    <title>Blog App</title>
    <!-- Tambahkan tautan ke file Bootstrap CSS dan file JavaScript Bootstrap di sini jika diperlukan -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light pl-3">
            <a class="navbar-brand" href="/post">My Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="text-center mt-4">
        &copy; {{ date('Y') }} My Blog
    </footer>

    <!-- Tambahkan tautan ke file Bootstrap JavaScript di bagian bawah jika diperlukan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
