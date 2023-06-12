<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>HOME Page</title>
    <link href="{{asset('public/BS5/bootstrap.min.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/BS5/bootstrap.bundle.min.js')}}"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel Donde Pilo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="
            #navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle 
            navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="#">Services</a>
                    <a class="nav-link" href="#">Gallery</a>
                    <a class="nav-link" href="#">Booking</a>
                    <a class="nav-link" href="#">Contact</a>
                    <a class="nav-link" href="#">Register</a>
                    <a class="nav-link btn btn-sm btn-danger" href="#">Login</a>

                </div>
            </div>
        </div>
    </nav>

    <!-- Slider start-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{asset('public/img/pilo1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('public/img/pilo2.webp')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('public/img/pilo3.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('public/img/pilo4.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('public/img/pilo5.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('public/img/pilo6.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('public/img/pilo7.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('public/img/pilo8.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('public/img/pilo9.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('public/img/pilo10.jpg')}}" class="d-block w-100" alt="...">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Slider End-->

    <!-- Service section start-->
    <div class="container my-4">
        <h3 class="text-center border-bottom">Services</h3>
        <div class="row mt-4">
            <div class="col-md-4">
                <img src="{{asset('public/img/hotel1.jpeg')}}" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-8">
                <h3>Lodging</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas laudantium quis fugit
                    debitis reprehenderit consequuntur voluptatum, nisi nihil animi, nam asperiores suscipit porro,
                    omnis magni quisquam soluta? Sunt, ut? Aut.</p>
                <p>
                    <a href="#" class="btn btn-sm btn-primary">Read More</a>
                </p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <img src="{{asset('public/img/hotel2.png')}}" class="img-thumbnail" alt="...">
            </div>
            <div class="col-md-8">
                <h3>Lodging</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas laudantium quis fugit
                    debitis reprehenderit consequuntur voluptatum, nisi nihil animi, nam asperiores suscipit porro,
                    omnis magni quisquam soluta? Sunt, ut? Aut.</p>
                <p>
                    <a href="#" class="btn btn-sm btn-primary">Read More</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Service section end-->

    <!-- Gallery section start-->
    <div class="container">
        <h1 class="text-center border-bottom">Gallery</h1>
        <div class="row my-4">
            @foreach($roomTypes as $rtype)
            <div class="col-md-3">
                <div class="card">
                    <h5 class="card-header">{{$rtype->title}}</h5>
                    <div class="card-body">
                        @foreach($rtype->roomtypeimgs as $index => $img)
                        <a href="{{asset('storage/app/'.$img->img_src)}}" data-lightbox="
                        rgallery{{$rtype->id}}">
                            @if($index > 0)
                            <img class="img-fluid hide" src="{{asset('storage/app/'.$img->img_src)}}" />
                            @else
                            <img class="img-fluid" src="{{asset('storage/app/'.$img->img_src)}}" />
                            @endif
                        </a>
                        </td>
                        @endforeach

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Gallery section end-->

    <!-- Lightbox css-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/vendor')}}/lightbox2-2.11.3/dist/css/lightbox.min.css" />
    <!-- Lightbox JS-->
    <script type="text/javascript" src="{{asset('public/vendor')}}/lightbox2-2.11.3/dist/js/lightbox.min.js"></script>

    <style type="text/css">
        .hide {
            display: none;
        }
    </style>

</body>

</html>