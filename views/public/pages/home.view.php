<!DOCTYPE html><html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetLover - Pet Care Website Template</title>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PetLover - Pet Care Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
   
    <style>
     
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

        .shop-now:hover{ 

            color:white !important;
            border:4px inset #ED6436 !important;
            font-weight: 700 !important;
             
        }
    </style>
</head>


<body>
    
<?php
require_once __DIR__.'../../../layout/public/nav.php';
?>
    


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../../../img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                            <h1 class="display-3 text-white mb-3">Keep Your Pet Happy</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Make your pet happy always!Take care of their food, comfort and toys so they can live a life full of fun and love!</h5>
                            <a href="" class="btn btn-lg shop-now btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../../../img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                            <h1 class="display-3 text-white mb-3">Pet Spa & Grooming</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Make your pet happy always!Take care of their food, comfort and toys so they can live a life full of fun and love!</h5>
                            <a href="" class="btn btn-lg shop-now btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Our Services</h4>
                <h1 class="display-4 m-0"><span class="text-primary">Premium</span> Pet Services</h1>
            </div>
    <div class="row pb-3">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100">
                <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                <h3 class="mb-3">Pet Accessories</h3>
                <p class="flex-grow-1">We provide the best accessories for your pets, whether you're looking for stylish collars, comfortable beds, or more! Make your pet happier and more comfortable with our premium products.</p>
                <a href="" class="btn btn-lg shop-now btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100">
                <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                <h3 class="mb-3">Pet Feeding</h3>
                <p class="flex-grow-1">We offer nutritious and healthy meals for your pets according to their specific needs! Make your pet happier today.</p>
                <a href="" class="btn btn-lg shop-now btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100">
            <h3 class="fa fa-paw display-3 text-secondary mb-3"></h3>
                <h3 class="mb-3">Pet Games</h3>
                <p class="flex-grow-1">We make your pet's time more fun with interactive games that stimulate their intelligence and keep them active. Enjoy the best pet games now!</p>
                <a href="" class="btn btn-lg shop-now btn-primary mt-3 mt-md-4 px-4">Shop Now</a>
            </div>
        </div>
    </div>
</div>
                
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="../../../img/feature.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Why Choose Us?</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">We offer quality pet products.</span> </h1>
                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                        <h3 class="mb-3">Best price</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4"> 
                        <h3 class="mb-3">Best quality</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                        <h3 class="mb-3">Fast delivery</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features End -->
<!-- New Products Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h1 class="display-4 m-0"><span class="text-primary">New </span> Products</h1>
            </div>

<div class="product-grid">
    <div class="product-card">
    <img src="../../../img/index1.jpg" class="img-fluid" alt="Cat tower game">

        <h3 class="product-title">Cat tower game</h3>
        <p class="product-price">5,000 JD</p>
        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Add to cart</a>
    </div>

    <div class="product-card">
        <img src="../../../img/index2.jpg" alt="Dry food for cats">
        <h3 class="product-title">Dry food for cats</h3>
        <p class="product-price">22,000 JD</p>
        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Add to cart</a>
    </div>

    <div class="product-card">
        <img src="../../../img/index3.jpg" alt="Dry food for dogs">
        <h3 class="product-title">Dry food for dogs</h3>
        <p class="product-price">24,000 JD</p>
        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Add to cart</a>
    </div>

    <div class="product-card">
        <img src="../../../img/index4.jpg" alt="Comfortable pet bed">
        <h3 class="product-title">Comfortable pet bed</h3>
        <p class="product-price">30,000 JD</p>
        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Add to cart</a>
    </div>

    <div class="product-card">
        <img src="../../../img/index5.jpg" alt="Ball game for dogs">
        <h3 class="product-title">Ball game for dogs</h3>
        <p class="product-price">7,500 JD</p>
        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Add to cart</a>
    </div>

    <div class="product-card">
        <img src="../../../img/index6.jpg" alt="Animal cleaning brush">
        <h3 class="product-title">Animal cleaning brush</h3>
        <p class="product-price">12,000 JD</p>
        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Add to cart</a>
    </div>

    
</div>
</div>
</div>
<!-- New Products End -->

    



    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Pet Blog</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Updates</span> From Blog</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="../../../img/blog-1.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <!-- <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small> -->
                        </div>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="../../../img/blog-2.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <!-- <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small> -->
                        </div>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="../../../img/blog-3.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <!-- <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small> -->
                        </div>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End


     Testimonial Start -->
    <!-- <div class="container-fluid bg-light my-5 p-0 py-5">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Testimonial</h4>
                <h1 class="display-4 m-0">Our Client <span class="text-primary">Says</span></h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="../../../img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="../../../img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="../../../img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="../../../img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    


    <?php
    require_once __DIR__.'../../../layout/public/footer.php';
    ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    
    <script src="../../../lib/easing/easing.min.js"></script>
    <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../../../js/mail/jqBootstrapValidation.min.js"></script>
    <script src="../../../js/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../../../js/main.js"></script>
</body>

</html>
