@extends('layouts.partiel.master')
@section('contenu')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="slider/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="slider/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="slider/css/style.css" rel="stylesheet">
 <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="{{route('welcome')}}"><img src="img/bg-img/forever.jpg" alt=""></a>
            </div>
            <marquee > <a style="color: #fbb710;" href="{{route('welcome')}}">CONSEIL DE LA SEMAINE: MANGEZ MOINS DE VIANDE ET PRENNEZ BEAUCOUP DE FRUITS</marquee>
            <!-- Amado Nav -->
            <nav class="amado-nav">

                <ul>
                    <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                    @if (Route::has('login'))
                     <li>  @if (Auth::check())
                        <a href="{{ url('/') }}">BIENVENUE {{ Auth::user()->nom }} </a>
                     </li>
                      <li>
                     <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            DECONNEXION
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                     </li>
                    @else
                       <li> <a href="{{ url('/login') }}">Connexion</a> </li>
                       <li> <a href="{{ url('/register') }}">Créer un compte</a> </li>
                    @endif
                
                  
                     @endif
                    <li><a href="{{route('welcome')}}">Shop</a></li>
                    
                    
                </ul>
            </nav>
          
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                 @if (Auth::check())
                <a href="{{route('panier')}}" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Panier <span> 
                    ({{App\Commande::where('iduser',Auth::user()->id)->count()}})
               </span></a>
                @endif
               
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->
       

      

     
   
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
        <div class="carousel-inner">
             <div class="carousel-item active">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
             <div style="font-size:15px; font-family:trebuchet;" class="carousel-caption">
                 <h4 style="background-color: red;border: 3px #fbb710 groove;border-radius: 10px;">PRENEZ SOINS DE VOTRE SANTE,MANGEZ MOINS DE VIANDES</h4> 
                   <br>

             
                <a style="font-size: x-large; font-family:trebuchet;color: #fbb710;border: 3px #fbb710 groove;border-radius: 10px;background: white;" href="#">LIRE LA SUTE</a>
            </div>
            </div> 
          
         
          <div class="carousel-item">
            <img class="d-block w-100" src="slider/img/fruit.jpg" alt="Third slide">
               <div style="font-size: x-large; font-family:trebuchet;" class="carousel-caption">
                <h4 style="background-color: red; border: 3px #fbb710 groove;border-radius: 10px;">CONSOMMER BEAUCOUP DE FRUITS ET DITES A DIEU AUX MALADIES CARDIO-VASCULAIRES</h4> 
                   <br>

             
                <a style="font-size: x-large; font-family:trebuchet;color: #fbb710;border: 3px #fbb710 groove;border-radius: 10px;background: white;" href="#">LIRE LA SUITE</a>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="slider/img/legumes.jpg" alt="First slide">
            <div style="font-size: x-large; font-family:trebuchet;" class="carousel-caption">
                 <h4 style="background-color: red; border: 3px #fbb710 groove;border-radius: 10px;">SANS LES LEGUMES LA VRAIE SANTE EST IMPOSSIBLE</h4> 
                   <br>

             
                <a style="font-size: x-large; font-family:trebuchet;color: #fbb710;border: 3px #fbb710 groove;border-radius: 10px;background: white;" href="#">LIRE LA SUITE</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{route('base_du_bien_etre')}}">
                        <img src="img/bg-img/bienetre.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                           
                           
                        </div>
                      <span style="text-align:center;color:#fbb710;font-size:x-large;  ">   LES BASES DU BIEN ÊTRE </span> 
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{route('ruche')}}">
                        <img src="img/bg-img/rucheimg.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                         
                            <h4></h4>
                        </div>
                        <span style="text-align:center;color:#fbb710;font-size:x-large;font-family:trebuchet;"> LES PRODUITS DE LA RUCHE
                            </span>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix" style="text-align: center;>
                    <a href="shop.html">
                        <img src="img/bg-img/nutrition.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                           
                           
                        </div>
                         <span style="text-align:right;color:#fbb710;font-size:x-large;font-family:trebuchet;">          NUTRITION
                            </span>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix" style="text-align: center;>
                    <a href="shop.html">
                        <img src="img/bg-img/illustration-fitness-et-musculation.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                             
                          
                        </div>
                        <span style="text-align:center;color:#fbb710;font-size:x-large;  font-family:trebuchet;"> FITNESS & MINCEUR
                            </span>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix" style="text-align: center;>
                    <a href="shop.html">
                        <img src="img/bg-img/ind.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                           
                           
                        </div>
                         <span style="text-align:center;color:#fbb710;font-size:x-large;  font-family:trebuchet;"> LES INDISPENSABLES
                            </span>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix" style="text-align: center;>
                    <a href="shop.html">
                        <img src="img/bg-img/visage.jpeg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                           
                          
                        </div>
                         <span style="text-align:center;color:#fbb710;font-size:x-large;  font-family:trebuchet;"> VISAGE
                            </span>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix" style="text-align: center;>
                    <a href="shop.html">
                        <img src="img/bg-img/solaire.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                            
                           
                        </div>
                        <span style="text-align:center;color:#fbb710;font-size:x-large;  font-family:trebuchet;"> LES SOLAIRES
                            </span>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix" style="text-align: center;>
                    <a href="shop.html">
                        <img src="img/bg-img/corps&cheveux.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                           
                        
                        </div>
                        <span style="text-align:center;color:#fbb710;font-size:x-large;  font-family:trebuchet;"> CORPS & CHEVEUX
                            </span>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix" style="text-align: center;>
                    <a href="shop.html">
                        <img src="img/bg-img/parfum.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                           
                        </div>
                         <span style="text-align:center;color:#fbb710;font-size:x-large;  font-family:trebuchet;">LES PARFUMS
                            </span>
                    </a>
                </div>
                <div class="single-products-catagory clearfix" style="text-align: center;>
                    <a href="shop.html">
                        <img src="img/bg-img/huiles.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                            
                            
                        </div>
                        <span style="text-align:center;color:#fbb710;font-size:x-large;  font-family:trebuchet;">HUILES ESSENTIELLES
                            </span>
                    </a>
                </div>
                 <div class="single-products-catagory clearfix" style="text-align: center;>
                    <a href="shop.html">
                        <img src="img/bg-img/animaux.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            
                            
                           
                        </div>
                        <span style="text-align:center;color:#fbb710;font-size:x-large;  font-family:trebuchet;">ANIMAUX
                            </span>
                    </a>
                </div>
                 <div class="single-products-catagory clearfix" style="text-align: center;>
                    <a href="shop.html">
                        <img src="img/bg-img/maison.jpg" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                           
                            
                           
                        </div>
                         <span style="text-align:center;color:#fbb710;font-size:x-large;  font-family:trebuchet;">ENTRETIEN DE LA MAISON
                            </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
   
    @endsection
     <script type="text/javascript" src="slider/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="slider/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="slider/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="slider/js/mdb.min.js"></script>



    <script type="text/javascript"></script>