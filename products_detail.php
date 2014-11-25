<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Dent Cart</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/products.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/owl.carousel.css">
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
	<script src="js/scripts.js"></script>

       
  
</head>

<body class="body">
    <nav class="top-bar animate-dropdown">
    <div class="container" >
       <ul >
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#change-colors">Change Colors<span class="arrow"></span></a>

                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" class="changecolor green-text" tabindex="-1" href="#" title="Green color">Green</a></li>
                        <li role="presentation"><a role="menuitem" class="changecolor blue-text" tabindex="-1" href="#" title="Blue color">Blue</a></li>
                       
                    </ul>
                </li>
                
                <li><a href="#">Login</a></li>
                <li><a href="#">Contact</a></li>
                
            </ul>
        
    </div>
</nav>

    <header class="header">
      <div class="logo"><img src="images/logo.jpg" alt=""/></div>
      
        <div class="top-search-holder">
          <div class="search-area">
            <form action="#" method="post">
               <input class="search-field" placeholder="Search for item" />
                 <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle"  data-toggle="dropdown" href="#">all categories<span class="arrow"></span></a>

                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">laptops</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">tv & audio</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">gadgets</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">cameras</a></li>

                    </ul>
                </li>
            </ul>
            <a class="search-button" href="#" ></a>
                               
            </form>
          </div>
        </div>
        
        <div class="top-cart-row-container">
           <div class="wishlist-compare-holder">
             <div class="wishlist ">
               <a href="#"><i class="fa-heart"></i> wishlist (21) </a>
             </div>
                 <div class="compare">
                   <a href="#"><i class="fa-exchange"></i> compare (2) </a>
                 </div>
            
           </div>
        </div>
        
        <div class="basket">
          <a href="#">
                <div class="basket-item-count">
                <span class="count">3</span><img src="images/icon-cart.png" alt="" /></div>

                <div class="total-price-basket"> 
                    <span class="lbl">your cart:</span>
                    <span class="total-price">
                        <span class="sign">$</span><span class="value">3219,00</span>
                    </span>
                </div>
          </a>
        </div>
    </header>
    
   <nav class="nav">
    <div class="main_menu">
       <label for="show-menu" class="show-menu">Show Menu</label>
	<input type="checkbox" id="show-menu" role="button">
     <ul id="menu1">
		<li><a href="#">Home</a></li>
		<li>
			<a href="#">About </a>
			<ul class="hidden">
				<li><a href="#">Who We Are</a></li>
				<li><a href="#">What We Do</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Portfolio </a>
			<ul class="hidden">
				<li><a href="#">Photography</a></li>
				<li><a href="#">Web & User Interface Design</a></li>
				<li><a href="#">Illustration</a></li>
			</ul>
		</li>
		<li><a href="#">News</a>
        <ul class="hidden">
				<li><a href="#">Photography</a></li>
				<li><a href="#">Web & User Interface Design</a></li>
				<li><a href="#">Illustration</a></li>
			</ul>
        </li>
        <li><a href="#">Online Enquiry</a></li>
		<li><a href="#">Contact</a>
        <ul class="hidden">
				<li><a href="#">Photography</a></li>
				<li><a href="#">Web & User Interface Design</a></li>
				<li><a href="#">Illustration</a></li>
			</ul>
        </li>
	</ul>
    </div>
   </nav>
   
   <div class="contaner">     
      
   <div class="products-slider">
      <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                    <img class="img-responsive" alt="" src="images/products/product-gallery-01.jpg" data-echo="images/products/product-gallery-01.jpg" />
                </a>
            </div>

            <div class="single-product-gallery-item" id="slide2">
                <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                <img class="img-responsive" alt="" src="images/products/product-gallery-01.jpg" data-echo="images/products/product-gallery-01.jpg" />
                </a>
            </div>

            <div class="single-product-gallery-item" id="slide3">
                <a data-rel="prettyphoto" href="images/products/gallery-thumb-01.jpg">
                <img class="img-responsive" alt="" src="images/products/product-gallery-01.jpg" data-echo="images/products/product-gallery-01.jpg" />
                </a>
            </div>
        </div>


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                   <img width="67" alt="" src="images/products/gallery-thumb-01.jpg" data-echo="images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                    <img width="67" alt="" src="images/products/gallery-thumb-01.jpg" data-echo="images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                  <img width="67" alt="" src="images/products/gallery-thumb-01.jpg" data-echo="images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                  <img width="67" alt="" src="images/products/gallery-thumb-01.jpg" data-echo="images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                  <img width="67" alt="" src="images/products/gallery-thumb-01.jpg" data-echo="images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                   <img width="67" alt="" src="images/products/gallery-thumb-01.jpg" data-echo="images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                   <img width="67" alt="" src="images/products/gallery-thumb-01.jpg" data-echo="images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                  <img width="67" alt="" src="images/products/gallery-thumb-01.jpg" data-echo="images/products/gallery-thumb-01.jpg" />
                </a>

                <a class="horizontal-thumb" data-target="#" data-slide="2" href="#slide3">
                <img width="67" alt="" src="images/products/gallery-thumb-01.jpg" data-echo="images/products/gallery-thumb-01.jpg" />
                </a>
            </div>

            <div class="nav-holder left hidden-xs">
                <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
            </div>
            
            <div class="nav-holder right hidden-xs">
                <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
            </div>

        </div>

    </div>
   
   </div>
   
   <div class="products-dis"> 
     <div class="title">
       <h1>VAIO fit laptop - windows 8 SVF14322CXW</h1>
     </div>
        <div class="wishlist-compare-holder" style="width:100%; margin-top:20px;">
             <div class="wishlist" style="width:20%; float:left;">
               <a href="#"><i class="fa-heart"></i> wishlist (21) </a>
             </div>
                 <div class="compare" style="width:45%; float:left;">
                   <a href="#"><i class="fa-exchange"></i> compare (2) </a>
                 </div>
            
            </div>
           <div class="excerpt">
             <p>
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare turpis non risus semper dapibus. Quisque eu vehicula turpis. 
         Donec sodales lacinia eros, sit amet auctor tellus volutpat non.
         </p>
           </div>
           <div class="prices">
            <div class="price-current">$1740.00</div>
            <div class="price-prev">$2199.00</div>
        </div>
           
           <div class=" qnt-holder">
           <div class="le-quantity">
                <form>
                    <a class="minus" href="#reduce"></a>
                    <input name="quantity" readonly="readonly" type="text" value="1" />
                    <a class="plus" href="#add"></a>
                </form>
            </div>
            <a id="addto-cart" href="#" class="le-button huge">add to cart</a>
           </div>
   
   </div>
 
</div>

<footer id="footer">
   <div class="footer-container">
     <div class="footer-contact">
       <div class="footer-logo">
         <img src="images/logo.png" alt=""/>
       </div>
       <p class="regular-bold">Feel free to contact us via phone , email or just send us mail.</p>
       <p>
        17 Princess Road, London, Greater London NW1 8JR,<br/> UK
        1-888-8MEDIA (1-888-892-9953)
    </p>
     </div>
     <div class=" link-cont">
        <div class="link-widget">
          <h3>Find it fast</h3>
           <ul>
            <li><a href="#">laptops &amp; computers</a></li>
            <li><a href="#">Cameras &amp; Photography</a></li>
            <li><a href="#">Smart Phones &amp; Tablets</a></li>
            <li><a href="#">Video Games &amp; Consoles</a></li>
            <li><a href="#">TV &amp; Audio</a></li>
            <li><a href="#">Gadgets</a></li>
            <li><a href="#">Car Electronic &amp; GPS</a></li>
            <li><a href="#">Accesories</a></li>
        </ul>
        </div>
        
        <div class="link-widget">
          <h3>Information</h3>
           <ul>
            <li><a href="#">laptops &amp; computers</a></li>
            <li><a href="#">Cameras &amp; Photography</a></li>
            <li><a href="#">Smart Phones &amp; Tablets</a></li>
            <li><a href="#">Video Games &amp; Consoles</a></li>
            <li><a href="#">TV &amp; Audio</a></li>
            <li><a href="#">Gadgets</a></li>
            <li><a href="#">Car Electronic &amp; GPS</a></li>
            <li><a href="#">Accesories</a></li>
        </ul>
        </div>
        <div class="link-widget">
          <h3>Information</h3>
           <ul>
            <li><a href="#">laptops &amp; computers</a></li>
            <li><a href="#">Cameras &amp; Photography</a></li>
            <li><a href="#">Smart Phones &amp; Tablets</a></li>
            <li><a href="#">Video Games &amp; Consoles</a></li>
            <li><a href="#">TV &amp; Audio</a></li>
            <li><a href="#">Gadgets</a></li>
            <li><a href="#">Car Electronic &amp; GPS</a></li>
            <li><a href="#">Accesories</a></li>
        </ul>
        </div>
     
     </div>
   </div>
   <div class=" copyright-bar">
     <div class="copyright">&copy; <a href="#">My Dent Cart</a> - all rights reserved</div>
   </div>
</footer>
</body>
</html>
