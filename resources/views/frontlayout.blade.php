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
                    <a class="nav-link" href="{{url('register')}}">Register</a>
                    <a class="nav-link btn btn-sm btn-danger" href="{{url('login')}}">Login</a>

                </div>
            </div>
        </div>
    </nav>


    <main>
        @yield('content')
    </main>
</body>

</html>