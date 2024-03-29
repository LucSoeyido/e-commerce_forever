
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
                <a href="{{route('welcome')}}"><img src="img/bg-img/forever.jpg" alt=""></a>
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
                <a href="index.html"><img src="img/bg-img/forever.jpg" alt=""></a>
            </div>
            <!-- Amado Nav -->
              <nav class="amado-nav">
                <ul>
                    <li><a href="{{ route('welcome')}}">Home</a></li>
                    @if (Route::has('login'))
                     <li>  @if (Auth::check())
                        <a href="{{ url('/home') }}">BIENVENUE LUC</a>
                     </li>
                    @else
                       <li class="active" > <a href="{{ url('/login') }}">Connexion</a> </li>
                       <li > <a href="{{ url('/register') }}">Créer un compte</a> </li>
                    @endif
                
                  
                     @endif
                    <li><a href="#">Shop</a></li>
                    <li><a href="product-details.html">Produits</a></li>
                    
                </ul>
            </nav>
          
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.html" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
                <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favoris</a>
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

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2 style="text-align:center;">VEUILLEZ VOUS CONNETER AVEC VOTRE EMAIL ET MOT DE PASSE  </h2>
                            </div>

                            <form method="POST" action="{{ route('login') }}" >
                                     {{ csrf_field() }}

                                <div class="row">
                                   
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('nom') }}">
                                         @if ($errors->has('email'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                      <div class="col-12 mb-3">
                                        <input type="password" class="form-control" id="password" placeholder="password" name="password" value="{{ old('nom') }}">
                                         @if ($errors->has('password'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                  
                                    
                                  
                                    
                               
                                   
                                     <div    class="cart-btn mt-100">
                                        <button type="submit"  class="btn amado-btn w-100">
                                            CONNEXION
                                        </button>
                                    </div>
                                    
                                      </div>
                                    </div>
                                </div>
                            </form>
                             <div>
                                        <a class="btn amado-btn w-100" style="color: white;" href="{{route('register')}}"> CREER UN COMPTE?</a>
                                           
                                       
                             </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection