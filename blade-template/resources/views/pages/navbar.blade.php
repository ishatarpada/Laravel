<h1>Header Page</h1>

<ul>

    {{-- @foreach ($names as $key => $value)
        <li>{{ $key }} - {{$value}}</li>
    @endforeach --}}


    @forelse ($names as $key => $value)
        <li>{{ $key }} - {{ $value }}</li>
        @empty
            <li>No Value Found</li>
        @endforelse
    </ul>

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
