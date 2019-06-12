@extends('layouts.partiel.master')
@section('contenu')
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
            <marquee style="font-family: trebuchet;"> <a href="{{route('welcome')}}">CONSEIL DE LA SEMAINE:</marquee>
            <!-- Amado Nav -->
            <nav class="amado-nav">

                <ul>
                    <li><a href="{{route('welcome')}}">Home</a></li>
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
                    <li class="active" ><a href="{{route('welcome')}}">Shop</a></li>
                    
                    
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

        <div class="shop_sidebar_area">

            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Catagories</h6>

                <!--  Catagories  -->
                <div class="catagories-menu">
                    <ul style="font-family: trebuchet;">
                      
                        <li><a href="{{route('base_du_bien_etre')}}">LES BASES DU BIEN ÊTRE</a></li>
                        <li><a href="{{route('ruche')}}">LES PRODUITS DE LA RUCHE</a></li>
                        <li><a href="#">NUTRITION</a></li>
                        <li><a href="#"> FITNESS & MINCEUR</a></li>
                        <li><a href="#">LES INDISPENSABLES</a></li>
                        <li><a href="#">VISAGE</a></li>
                        <li><a href="#">LES SOLAIRES</a></li>
                        <li><a href="#">LES PARFUMS</a></li>
                        <li><a href="#">HUILES ESSENTIELLES</a></li>
                        <li><a href="#">ANIMAUX</a></li>
                        <li><a href="#">MAISON</a></li>
                    </ul>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            
            <!-- ##### Single Widget ##### -->
           
            <!-- ##### Single Widget ##### -->
          
        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products -->
                            <div class="total-products">
                                
                                <div class="view d-flex">
                                    <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Sorting -->
                           
                        </div>
                    </div>
                </div>

                <div class="row">
                @foreach($Produit as $produits)
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img\bg-img\{{$produits->img}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{$produits->img}}" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">{{$produits->prix}} FCFA</p>

                            	
                                    <Button  class="btn amado-btn w-100" style="text-color: white;" > <a href="{{route('produitcontrol.show',$produits->id) }}">{{$produits->designation}}</a>
                                           
                                    </Button>
                                     
                                    
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                   
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Single Product Area -->
                    

                    <!-- Single Product Area -->
                   
                    <!-- Single Product Area -->
                   

                    <!-- Single Product Area -->
                  
                </div>

                
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
   

@endsection