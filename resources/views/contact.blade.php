<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact us</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('public')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="
    background-image: url('https://d39l2hkdp2esp1.cloudfront.net/img/photo/174043/174043_00_2x.jpg'); background-position: center; background-size: cover;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" style="background-image: url('./public/img/contact.jpg'); background-position: center; background-size: cover;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Contact us!</h1>
                                    </div>
                                    <form class="user" method="post" action="{{url('send-contact-info')}}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="fname" class="form-control form-control-user" placeholder="First name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lname" class="form-control form-control-user" placeholder="Last name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                        <input type="text" name="message" class="form-control form-control-user" placeholder="Message">
                                        </div>
                                        <hr>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Send" >
                                            
                                        </input> 
                                    </form>

                                    @if(Session::has('msg'))
                                    <br>
                                    <div class="alert alert-success" role="alert">
                                        Email sent!
                                    </div>
                                    @elseif(Session::has('error'))
                                    <br>
                                    <div class="alert alert-danger" role="alert">
                                        Email not sent!
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('public')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public')}}/js/sb-admin-2.min.js"></script>

</body>

</html>