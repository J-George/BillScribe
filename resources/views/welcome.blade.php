<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>BillScribe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light"> 
                <a class="navbar-brand front-page-logo"  href="#">BillScribe</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    @guest
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"> <a class="nav-link" href="/register">Register </a> </li>
                        <li class="nav-item active"> <a class="nav-link" href="/login">Login </a> </li>  
                    </ul>                      
                    @endguest
                    @auth
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>                        
                    @endauth
                </div>
            </nav>
        </div>
        <div>
            <div class="container">
                <div class="container front-splash">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>All warranties, One location</h1>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid blackbackground">
                <div class="container">
                    <h2 class="text-center">
                        The essential tool for a smart home.
                    </h2>
                    <p class="text-center">
                        As our homes get smarter, it makes sense to secure our
                        products with a good warranty program. It makes greater
                        sense to record and never forget your warranties when you
                        need them the most.
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="row focus">
                    <div class="col-lg-6 whitebackground">
                        <div>
                            <h2>Relax while your warranties are recorded.</h2>
                            <p>
                                BillScribe is a tool for logging your purchases with
                                warranties. Be it a phone, a laptop, a luxury watch
                                or even a suitcase, if it has a warranty, add it
                                in.<br />
                                The app will keep you informed of when the warranty
                                is about to expire and what it covers. You will
                                never need to worry about hunting for old reciepts
                                again.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 triangle"></div>
                </div>
            </div>
            <div class="container">
                <div class="d-flex">
                    <div>
                        <icons icon="mobile-alt" />
                        <h3 class="mt-2"><strong> Always Accessible </strong></h3>
                        <p>Get all the details on any device. Supported on iOS and Android.</p>
                    </div>
                    <div>
                        <icons icon="user-tie" />
                        <h3 class="mt-2"><strong> Go Premium </strong></h3>
                        <p>Add upto 20 devices for free! Or go Premium and add as many as you'd like.</p>
                    </div>
                    <div>
                        <icons icon="map-marked-alt" />
                        <h3 class="mt-2"><strong> Find Support, Fast </strong></h3>
                        <p>View all available support resources closest to you, right on the app.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid redbackground"></div> 
        </div>
        <script type="text/javascript" src="js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
