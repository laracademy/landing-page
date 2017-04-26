@extends('layout.app')

@section('content')

    <!-- HEADER -->
    <div class="container-fluid header mb-5">
        <div class="row">
            <div class="col-lg-12 text-center">

                <h1>
                    Bookster
                </h1>
                <p class="lead">
                    Are you ready to implment the best fictional online booking application ever!?
                </p>

                <!-- IMAGES FROM: https://www.pexels.com/ -->
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                              <img class="d-block" src="https://images.pexels.com/photos/212286/pexels-photo-212286.jpeg?w=600&h=400&auto=compress&cs=tinysrgb" alt="First slide" width="600" height="400">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block" src="https://images.pexels.com/photos/265631/pexels-photo-265631.jpeg?w=600&h=400&auto=compress&cs=tinysrgb" alt="Second slide" width="600" height="400">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block" src="https://images.pexels.com/photos/374074/pexels-photo-374074.jpeg?w=600&h=400&auto=compress&cs=tinysrgb" alt="Third slide" width="600" height="400">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- HEADER -->

    <!-- EMAIL -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <h4>
                    Please fill in your email address below to be notified.
                </h4>

                @if(session()->has('success'))
                    <div class="alert alert-success">
                        <strong>
                            Awesome
                        </strong>
                        <p>
                            You will be notified when our product has launched, thank you so much!
                        </p>
                    </div>
                @else
                    @include('partials.signup')
                @endif

            </div>
        </div>
    </div>
    <!-- EMAIL -->

@endsection

@push('script')
<script>
    $(function(){
        $('.carousel').carousel();
    });
</script>
@endpush