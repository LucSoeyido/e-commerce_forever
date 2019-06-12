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
    <!-- Search Wrapper Area Start -->
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
                <a href="index.html"><img src="img/bg-img/forever.jpg" alt=""></a>
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
            <marquee> <a href="{{route('welcome')}}">CONSEIL DE LA SEMAINE:</marquee>
            <!-- Amado Nav -->
            <nav class="amado-nav">

                <ul>
                    <li ><a href="{{route('welcome')}}">Home</a></li>
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
                    
                    
                
          
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                 @if (Auth::check())
                <li class="active"><a href="{{route('panier')}}" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Panier <span> 
                    ({{App\Commande::where('iduser',Auth::user()->id)->count()}})
               </span></a>
                </li>
                @endif
               
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
            </div>
            </ul>
            
            </nav>
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
                        <div class="cart-title mt-50">
                            <h2 style="text-align: center;">VOTRE PANIER</h2>
                        </div>
                       
                        <div class="cart-table clearfix">
                             @foreach($Produit as $produits)
                            <table class="table table-responsive">
                                
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Désignation</th>
                                        <th>Prix</th>
                                        <th>Quantité choisie</th>
                                        <th>Modifer Qte/Supprimer</th>
                                        
                                    </tr>
                                </thead>
                                 
                                <tbody>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="img/bg-img/{{$produits->logo}}" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>{{$produits->designation}}</h5>
                                        </td>
                                        <td class="price">
                                            <span>{{$produits->prix}}</span>
                                        </td>
                                         <td class="price">
                                            <span>{{$produits->qte}}</span>
                                        </td>
                                        
                                        <td class="qty">
                                        
                                        </td>
                                    </tr>
                                   
                                  
                                </tbody>
                            </table>
                             @endforeach
                        </div>
                    </div>
                   
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Résumé du shopping</h5>
                            <ul class="summary-table">
                                <li><span>Total:</span> <span>140.00 FCFA</span></li>
                                <li><span>Articles Choisis:</span> <span>{{App\Commande::where('iduser',Auth::user()->id)->count()}}</span></li>
                                <li><span>total:</span> <span>{{App\Commande::where('iduser',Auth::user()->id)->sum('total')}} FCFA</span></li>
                            </ul>
                            <div class="cart-btn mt-100">
                                <a href="cart.html" class="btn amado-btn w-100">Passer la commande</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
   
   