
<head>
   <link rel="stylesheet" href="\css\style.css">
</head>
<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 px-lg-5">
        <div class="container">
            <!-- Logo -->
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                <img src="img/Logo2.webp" alt="Shop Logo" style="height: 50px; margin-right: 10px;">
               
            </a>

            <!-- Toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links & Search Bar -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="../../../views/public/pages/home.view.php" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="../../../views/public/pages/about.view.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="../../../views/public/pages/service.view.php" class="nav-link">Service</a></li>
                    <li class="nav-item"><a href="../../../views/public/pages/price.view.php" class="nav-link">Price</a></li>
                    <li class="nav-item"><a href="../../../views/public/products/shoping.view.php" class="nav-link">Shoping</a></li>
                    <li class="nav-item"><a href="../../../views/public/pages/contact.view.php" class="nav-link">Contact</a></li>
                </ul>

                <!-- Search Bar -->
                <form class="d-flex me-3" action="search.php" method="GET">
                    <input class="form-control form-control-sm me-2" type="search" name="query" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-light btn-sm" type="submit">
                        <i class="fas fa-search"></i> <!-- أيقونة البحث -->
                    </button>
                </form>

                <!-- Options Dropdown -->
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Options
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="option1.php">Option 1</a>
                        <a class="dropdown-item" href="option2.php">Option 2</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<!-- FontAwesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
