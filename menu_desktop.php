<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website AmbaTeknologi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style_index.css">
</head>
<body class="bg-light">

    <!-- Navbar Buka -->


<!-- Navbar Atas -->
<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold text-primary" href="#">
            AmbaTeknologi<span class="text-warning">.com</span>
        </a>

        <!-- Search -->
        <form class="d-flex flex-grow-1 mx-4">
            <select class="form-select w-auto rounded-0">
                <option>All categories</option>
            </select>

            <input class="form-control rounded-0" type="search" placeholder="Type here...">

            <button class="btn btn-danger rounded-0" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>

        <!-- Menu kanan -->
        <ul class="navbar-nav align-items-center">

            <li class="nav-item">
                <a class="nav-link" href="#">LOG IN / SIGN UP</a>
            </li>

            <li class="nav-item ms-3">
                <a class="nav-link position-relative" href="#">
                    <i class="bi bi-cart3 fs-4"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0
                    </span>
                </a>
            </li>

        </ul>

    </div>
</nav>

<!-- Navbar Bawah -->
<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">

        <div class="dropdown">
    <button class="btn btn-primary rounded-0 px-4 dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
        <i class="bi bi-list"></i>
        Kategori
    </button>

    <ul class="dropdown-menu rounded-0">
        <li>
            <a class="dropdown-item" href="#">
                Desktop PC
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="#">
                Service Your Desktop
            </a>
        </li>
    </ul>
</div>

        <!-- Menu -->
        <div class="navbar-nav ms-4">

            <a class="nav-link" href="#">Cara Berbelanja</a>

            <a class="nav-link" href="#">Pengiriman</a>

            <a class="nav-link" href="#">
                <i class="bi bi-envelope-fill"></i>
                Hubungi Kami
            </a>

        </div>

        <!-- Tombol WhatsApp -->
        <div class="ms-auto">
            <button class="btn btn-outline-success">
                Chat WhatsApp
            </button>
        </div>

    </div>
</nav>


<!-- Navbar Tutup -->


</body>