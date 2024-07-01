@extends('layouts.layout')

@section('content')
    {{-- gallery --}}
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
@endsection

@section('title')
  Gallery
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