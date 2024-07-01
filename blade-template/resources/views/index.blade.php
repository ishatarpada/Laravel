<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="/gallery">Gallery</a>
                  </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="contact">Contact</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.pixelstalk.net/wp-content/uploads/2016/06/Free-Desktop-HD-Nature-Backgrounds.jpg"
                    class="d-block w-100" alt="..." style="width: 100% ; height:700px">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?cs=srgb&dl=daylight-environment-forest-459225.jpg&fm=jpg"
                    class="d-block w-100" alt="..." style="width: 100% ; height:700px">
            </div>
            <div class="carousel-item">
                <img src="https://www.pixelstalk.net/wp-content/uploads/2016/03/Beautiful-nature-spring-wallpaper-HD.jpg"
                    class="d-block w-100" alt="..." style="width: 100% ; height:700px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- cards --}}
    <div class="gallery-area my-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 my-3 mx-2 col-md-3 col-sm-6 p-0">
                    <div class="card text-bg-dark border-0">
                        <img src="https://preview.colorlib.com/theme/josanclick/assets/img/gallery/gallery1.jpg.webp"
                            class="card-img" alt="Nature Beauty">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Street Shot</h5>
                            <p class="card-text">Nature Beauty</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 mx-2 col-md-3 col-sm-6 p-0">
                    <div class="card text-bg-dark border-0">
                        <img src="https://preview.colorlib.com/theme/josanclick/assets/img/gallery/gallery2.jpg.webp"
                            class="card-img" alt="Nature Beauty">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Street Shot</h5>
                            <p class="card-text">Nature Beauty</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 mx-2 col-md-3 col-sm-6 p-0">
                    <div class="card text-bg-dark border-0">
                        <img src="https://preview.colorlib.com/theme/josanclick/assets/img/gallery/gallery3.jpg.webp"
                            class="card-img" alt="Nature Beauty">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Street Shot</h5>
                            <p class="card-text">Nature Beauty</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 mx-2 col-md-3 col-sm-6 p-0">
                    <div class="card text-bg-dark border-0">
                        <img src="https://preview.colorlib.com/theme/josanclick/assets/img/gallery/gallery4.jpg.webp"
                            class="card-img" alt="Nature Beauty">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Street Shot</h5>
                            <p class="card-text">Nature Beauty</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 mx-2 col-md-3 col-sm-6 p-0">
                    <div class="card text-bg-dark border-0">
                        <img src="https://preview.colorlib.com/theme/josanclick/assets/img/gallery/gallery5.jpg.webp"
                            class="card-img" alt="Nature Beauty">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Street Shot</h5>
                            <p class="card-text">Nature Beauty</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 mx-2 col-md-3 col-sm-6 p-0">
                    <div class="card text-bg-dark border-0">
                        <img src="https://preview.colorlib.com/theme/josanclick/assets/img/gallery/gallery6.jpg.webp"
                            class="card-img" alt="Nature Beauty">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Street Shot</h5>
                            <p class="card-text">Nature Beauty</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- gallery --}}
    <section class="home-blog mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9 col-md-8">

                    <div class="section-tittle section-tittle2 mb-50">
                        <h2 class="fw-bold fs-1">I do for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img blog-img2">
                            <a href="#"><img
                                    src="https://tse4.mm.bing.net/th?id=OIP.scbjmC3uj1dbugagdIC6nwHaE7&pid=Api&P=0&h=180"
                                    alt="" class="img-fluid mb-3 rounded"
                                    style="height: 100% ; width:100%"></a>
                        </div>
                        <div class="blogs-cap">
                            <h5><a href="#" class="text-success fw-bold text-decoration-none mb-2">Event
                                    Photography</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img blog-img2">
                            <a href="#"><img
                                    src="https://tse3.mm.bing.net/th?id=OIP.g4k10gccv-VA3t3QX9wAXgHaE7&pid=Api&P=0&h=180"
                                    alt="" class="img-fluid mb-3 rounded"
                                    style="height: 100% ; width:100%"></a>
                        </div>
                        <div class="blogs-cap">
                            <h5><a href="#" class="text-success fw-bold text-decoration-none mb-2">Wedding
                                    Photography</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img blog-img2">
                            <a href="#"><img
                                    src="https://tse4.mm.bing.net/th?id=OIP.U8Jj-NB2bEi6Y1UUesNc6QHaE7&pid=Api&P=0&h=180"
                                    alt="" class="img-fluid mb-3 rounded"
                                    style="height: 100% ; width:100%"></a>
                        </div>
                        <div class="blogs-cap">
                            <h5><a href="#" class="text-success fw-bold text-decoration-none mb-2">Family
                                    Photography</a></h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block text-light">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset text-light">
                    <i class="text-light fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="text-light fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="text-light fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="text-light fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="text-light fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="text-light fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-light"></i>Company name
                        </h6>
                        <p class="text-light">
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4 text-light">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-light">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-light">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-light">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-light">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4 text-light">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-light"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-light"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3 text-light"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4 text-light" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset text-light fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
