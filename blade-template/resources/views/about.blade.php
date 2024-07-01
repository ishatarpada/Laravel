@extends('layouts.layout')

@section('content')
    {{-- cards --}}
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
                                    alt="" class="img-fluid mb-3 rounded" style="height: 100% ; width:100%"></a>
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
                                    alt="" class="img-fluid mb-3 rounded" style="height: 100% ; width:100%"></a>
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
                                    alt="" class="img-fluid mb-3 rounded" style="height: 100% ; width:100%"></a>
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

    @verbatim
    <div id="app">{{ message }}</div>
    @endverbatim
@endsection

@section('title')
  About
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endpush

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@endpush

@push('scripts')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush