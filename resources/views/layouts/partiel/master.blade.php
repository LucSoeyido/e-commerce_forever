<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Forever Living Product</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>
<body style="font-family: trebuchet;">
@yield('contenu')
 <footer class="footer_area clearfix" style="font-family: trebuchet;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="img/bg-img/forever.jpg" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered by Luc Soeyido.Tous droits sont reservés 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{route('welcome')}}">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('welcome')}}">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                             @if (Auth::check())
                                                <a class="nav-link" href="{{route('panier')}}" class="cart-nav"><img src="img/core-img/cart.png" alt=""><span> 
                                                    ({{App\Commande::where('iduser',Auth::user()->id)->count()}})
                                               </span></a>
                                                @endif
                                        </li>
                                        
                                        <li class="nav-item">  @if (Auth::check())
                                                <a class="nav-link" class="nav-link" href="{{ url('/') }}">BIENVENUE {{ Auth::user()->nom }} </a>
                                             </li>
                                              <li class="nav-item">
                                             <a class="nav-link" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                    DECONNEXION
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    {{ csrf_field() }}
                                                                </form>
                                             </li>
                                            @else
                                               <li class="nav-item" lass="nav-item"> <a class="nav-link" href="{{ url('/login') }}">Connexion</a> </li>
                                               <li class="nav-item"> <a class="nav-link" href="{{ url('/register') }}">Créer un compte</a> </li>
                                            @endif

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>