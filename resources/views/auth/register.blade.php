
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
                <a href="{{route('welcome')}}"><img src="img/bg-img/forever.jpg" alt=""></a>
            </div>
            <!-- Amado Nav -->
              <nav class="amado-nav">
                <ul>
                    <li><a href="{{ route('welcome')}}">Home</a></li>
                    @if (Route::has('login'))
                     <li>  @if (Auth::check())
                        <a href="{{ url('/home') }}">BIENVENUE </a>
                     </li>
                    @else
                       <li> <a href="{{ url('/login') }}">Connexion</a> </li>
                       <li class="active"> <a href="{{ url('/register') }}">Créer un compte</a> </li>
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
                                <h2>Créer un compte dans moins de 3 min </h2>
                            </div>

                            <form method="POST" action="{{ route('register') }}" >
                                     {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="prenom" value="{{ old('prenom') }}" name="prenom" placeholder="Veuillez entrer votre prénom ici" required>
                                         @if ($errors->has('prenom'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="nom" value="{{ old('nom') }}" name="nom" placeholder="Veuillez entrer votre nom de famille ici" required>
                                        @if ($errors->has('nom'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                         @if ($errors->has('email'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" id="adresse" placeholder="Entrer votre adresse ici " name="adresse" value="{{ old('adresse') }}" >
                                         @if ($errors->has('adresse'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                   
                                    
                                    <div class="col-md-12 mb-3">
                                        <input type="number" class="form-control" id="tel" min="0" placeholder="Entrer votre numéro de téléphone ici" name="tel" value="{{ old('tel') }}">
                                         @if ($errors->has('tel'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                     <div class="col-md-12 mb-3">
                                        <input type="password" class="form-control" id="password"  placeholder="Entrer votre mot de passe ici" name="password"  value="{{ old('password') }}" required>
                                         @if ($errors->has('password'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                     <div class="col-md-12 mb-3">
                                        <input type="password" class="form-control" id="password-confirm"  placeholder="Veuillez confirmer votre  mot de passe ici" name="password_confirmation" value="{{ old('password-confirm') }}" required>
                                         @if ($errors->has('password-confirm'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('password-confirm') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                    <div class="col-md-12 mb-3">
                                     <button type="submit"  class="btn amado-btn w-100" style="text-align: center;">
                                           SOUMETTRE
                                    </button>

                                    </div>
                                </div>
                            </form>
                            <div>
                                        <a class="btn amado-btn w-100" style="color: white;" href="{{route('login')}}"> AVIEZ-VOUS DEJA UN COPMTE?</a>
                                           
                                       
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
          
        </div>
    </section>
    @endsection