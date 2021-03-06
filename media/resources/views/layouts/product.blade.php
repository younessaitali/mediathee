<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mediatheque</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
            <header>
                    <div class="top-nav container">
                        <div class="logo">Mediatheque</div>
                            <div class="centre">
                            <ul><a href="/">Home</a>
                            <div class="dropdown">
                            <li><button class="dropbtn"><a href="/categories">Categories<span class="fa fa-caret-down" ></span></a></button></li>
                                <div class="dropdown-content">
                                        <a href="/categories/movies">Movies</a>
                                        <a href="/categories/books">Books</a>
                                        <a href="/categories/magazins">Magazins</a>
                                        <a href="/categories/journal">Journal</a>  
                                </div>
                            </div>
                           <li> <a href="/event">Event</a></li>
                            <li><a href="/about">About</a></li>
                           <li> <a href="/contact">Contact us</a></li>
                            </div><!-- end of centre -->
                        </ul>
                        
                            <div class="icon">
                            <a href="#"><span class="search" ><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            <a href="/acount"><span class="user" ><i class="fa fa-user" aria-hidden="true"></i></span></a>
                            </div>
                    </div> <!-- end top-nav -->
                        @yield('hero_container')
                    
                </header>
<div class="categories container" >
    <div class="top-cat"> CATEGORY</div>
    <div class="choix">
        <div class="category"> <h1> category</h1>
            <ul>
            <li>  <a href="#">Movies</a></li>
            <li>   <a href="#">Books</a></li>
            <li>  <a href="#">Magazins</a></li>
            <li> <a href="#">Journal</a> </li>
                
        </ul></div>
        <div class="filter_by"></div><h3>filter by </h3>
        <ul>
            <li><div class="by_price"> <h2>Price</h2>
                <a href="#"><input type="radio" name="price">225$-2555$<br>
                <a href="#"><input type="radio" name="price">225$-2555$<br>
                <a href="#"><input type="radio" name="price">225$-2555$ <br>
                <a href="#"><input type="radio" name="price">225$-2555$ <br>

                </div></li>
            <li> <div class="by_size"><h3>size</h3>
                <a href="#"><input type="checkbox" name="size">S <br>
                <a href="#"><input type="checkbox" name="size">M <br>
                <a href="#"><input type="checkbox" name="size">L <br>
                </div></li>
            <li> <div class="by_color"><h2>color</h2></div></li>
                
        </ul></div>
    </div><!-- end of choix-->
    <div class="products">
            <a href="#"><img src="img/sssssds.png" ></a>
            <a href="#"><div class="product-name">Antigone :3</div></a>
            <div class="product-price">$2</div>
            <a href="#"><img src="img/sssssds.png" ></a>
            <a href="#"><div class="product-name">La Boite A Merveilles :3</div></a>
            <div class="product-price">$2</div>

    </div><!-- end of product-->

</div>  <!-- categories container--> 


                <footer>
                        <div class="footer-content container">
                            <div class="made-with">Made with <i class="fa fa-heart"></i> by youness and sanae</div>
                            <ul>
                                <li>Follow Me:</li>
                                <li><a href="#"><i class="fa fa-globe"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                            <div class="emailBox">
                                <label for="emailAddress">Votre adresse email</label><br>
                                
                                    <input id="emailAddress" type="email" size="40" maxLength="50" required
                                         placeholder="nomutilisateur@example.com" pattern=".+@example.com">
                                         <span class="emailAddress"><i class="fa fa-envelope-o fa-fw"aria-hidden="true"></i></span>
                                              
                                        
                            </div>

                        </div> <!-- end footer-content -->
                    </footer>
            </body>
                </html>