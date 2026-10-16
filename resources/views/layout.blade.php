<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Produk - CRUD Laravel</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar-brand { font-weight: 700; letter-spacing: 0.5px; }
        .card { border-radius: 12px; }
        .btn { border-radius: 8px; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar Minimalis Modern -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('products.index') }}">
                <i class="bi bi-box-seam-fill fs-4"></i>
                <span>InventoryApp</span>
            </a>
            <span class="navbar-text text-white-50 fs-7 d-none d-sm-inline">
                Sistem Pengelolaan Data Produk
            </span>
        </div>
    </nav>

    <!-- Content Area -->
    <div class="container mb-5 flex-grow-1">
        @yield('content')
    </div>

    <!-- Footer Informasi Tugas Mahasiswa -->
    <footer class="bg-white border-top py-3 text-center text-secondary mt-auto shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-start mb-2 mb-md-0">
                    <small class="fw-bold text-dark">
                        <i class="bi bi-person-badge-fill text-primary me-1"></i> Cahya Heryana
                    </small> 
                    <small class="text-muted ms-2">| NIM: 2503321094</small>
                </div>
                <div class="col-md-6 text-md-end">
                    <small class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 me-1">
                        Kelas 3C
                    </small>
                    <small class="badge bg-secondary-subtle text-secondary border border-secondary-subtle px-2 py-1 me-1">
                        Prodi Elektronika Industri
                    </small>
                    <small class="badge bg-dark-subtle text-dark border border-dark-subtle px-2 py-1">
                        Tugas Pemrograman Web
                    </small>
                </div>
            </div>
            <hr class="my-2 opacity-25">
            <div class="text-center">
                <small class="text-muted" style="font-size: 0.75rem;">
                    &copy; {{ date('Y') }} InventoryApp — Tugas 7 CRUD Laravel + Framework Bootstrap
                </small>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>