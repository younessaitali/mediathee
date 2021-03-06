<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mediatheque |  @yield('title', '')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        @yield('extra')
        
    </head>
    <body>
      <div id="page-container">
         <div id="content-wrap">
            <header>
                    <div class="top-nav container">
                        <div class="logo"><a href="/">Mediatheque</a></div>
                            <div class="centre">
                            <ul>
                            <li><a href="/">Home</a>
                            <li> <a href="/shop">shop</a></li>
                           <li> <a href="/event">Event</a></li>
                            <li><a href="/about">About</a></li>
                           <li> <a href="/contact">Contact us</a></li>
                            </div><!-- end of centre -->
                        </ul>
                        
                            <div class="icon">
                            <a href="#"><span class="search" ><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            <a href="/cart"><span class="cart" >
                                <i class="fa fa-shopping-cart" aria-hidden="true">
                                 @if (Cart::instance('default')->count() > 0)
                                <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                                @endif
                                 </i>
                                      </span>
                                             </a>
                            <a href="/wish"><span class="wishlist" ><i class="fa fa-heart" aria-hidden="true"></i></span></a>
                            <a href="/user"><span class="user" ><i class="fa fa-user" aria-hidden="true"></i></span></a>
                            </div>
                    </div> <!-- end top-nav -->
                        @yield('hero_container')
                    
                </header>
                @yield('content')
            </div>
              
                    @yield('extra-js')
                </div>
                <footer>
                    <div class="footer-content container">
                        <div class="made-with">Made with <i class="fa fa-heart"></i> by youness and sanae</div>
                    
                        <div class="emailBox">
                            <label class="test "for="emailAddress">Votre adresse email</label><br>
                            
                                <input id="emailAddress" type="email" size="40" maxLength="50" required
                                     placeholder="nomutilisateur@example.com" pattern=".+@example.com">
                                     <span class="emailAddress"><i class="fa fa-envelope-o fa-fw"aria-hidden="true"></i></span>
                                          
                                    
                        </div><!-- end email-box -->

                    </div> <!-- end footer-content -->
                </footer>
            </body>
                </html>