 <!DOCTYPE html>
 <head>
 


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Flaticon Font -->
    <link href="../../../lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= asset('/css/style.css')?>" rel="stylesheet">
 <style>
        .navbar {
            background-color: black; 
        }
       .navbar-nav .nav-link {
            font-weight: 500;
            padding: 10px 15px;
            color: white;
            transition: color 0.3s ease-in-out;
        }


       .navbar-nav .nav-link:hover,
       .navbar-nav .nav-link.active {
            color: #ED6436; 
        }
      .d-flex a {
            color: white;
           transition: color 0.3s ease-in-out;
        }
      .d-flex a:hover {
           color: #ED6436;
        }

     
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px; 
            max-width: 1000px;
            margin: auto;
        }

        .product-card {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card img {
            width: 100%; 
            height: 200px; 
            object-fit: contain; 
            border-radius: 8px; 
        }

        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }

        .product-price {
            color:#28a745;
            font-size: 16px;
            font-weight: bold;
        }
        .custom-img {
           width: 400px;  
           height: 200px;
           border-radius: 20px;
           
           object-fit: contain;
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr); 
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: repeat(1, 1fr); 
            }
        }
        
    </style>
    </head>
 <!-- Navbar Start -->
 <?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-black px-4">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold text-white" href="#">
            <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>Lover</h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'home.view.php') ? 'active' : '' ?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'about.view.php') ? 'active' : '' ?>" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'shoping.view.php') ? 'active' : '' ?>" href="/shoping">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'contact.view.php') ? 'active' : '' ?>" href="/contact">Contact</a>
                </li>
            </ul>
        </div>

        <div class="d-flex align-items-center gap-3">
            <a href="#" class="text-white mx-1"><i class="fa-regular fa-user fs-5"></i></a>
            <a href="#" class="text-white mx-1"><i class="fa-solid fa-cart-shopping fs-5"></i></a>
            <a href="#" class="text-white mx-1"><i class="fa-solid fa-arrow-right-from-bracket fs-5"></i></a>
        </div>
    </div>
</nav>


   