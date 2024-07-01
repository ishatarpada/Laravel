<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>layout - @yield('title')</title>
    @stack('style')

</head>

<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/gallery">Gallery</a>
                  </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/test">Contact</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')


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


    @stack('scripts')
</body>

</html>
