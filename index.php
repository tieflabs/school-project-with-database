<?php

session_start();

// print_r($_SESSION);

if (isset($_SESSION["user_id"])) {
	// code...

	$mysqli = require __DIR__ . "/database.php";

	$sql = "SELECT * FROM user
	        WHERE id = {$_SESSION["user_id"]}";

	$result = $mysqli->query($sql);

	$user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>C-Shop ● Home | newest products today</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/nave.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>

<!-- HOME PAGE WEN YOU SIGNED IN | ALREADY SIGNED IN YOUR ACCOUNT -->

	<?php if (isset($user)): ?>
		

<section class="page hero" id="home">

	<header class="nav__bar">

         <!-- Nav Logo -->
		    <div class="box__logo nav_branding" onclick="window.location.href= 'index.php'">
			   <svg class="c-shop__icon" width="24" height="24" viewBox="0 0 24 24" version="1.1" id="svg1" sodipodi:docname="C-Shop.svg" xml:space="preserve" inkscape:export-filename="icons\brand\C-Shop.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
			    <defs id="defs1"></defs>
			    <sodipodi:namedview id="namedview1" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"></sodipodi:namedview>
			    <g id="g17" transform="matrix(0.0791812,0,0,0.0791812,-9.6840863,-9.290962)">
			    <path class="c-shop__icon-layer1" d="m 239.66101,409.37007 c -13.54433,-1.64923 -30.55597,-7.80771 -41.9932,-15.20221 -39.93742,-28.33308 -36.89962,-67.06558 -22.9241,-107.48435 2.99561,-8.34205 5.93362,-16.65113 6.52889,-18.46463 0.59528,-1.81349 4.12161,-11.90309 7.83631,-22.42134 3.71469,-10.51824 7.27104,-20.9046 7.90299,-23.08079 0.63197,-2.17617 3.18577,-9.59502 5.67514,-16.48627 2.48936,-6.89127 5.24179,-14.60685 6.11648,-17.14573 0.87472,-2.53888 2.27717,-6.05557 3.14868,-8.39825 0.45041,-1.21075 2.20386,-5.50807 4.36672,-9.92726 1.73267,-3.54023 6.10906,-10.07878 10.64371,-15.77638 5.48804,-6.89548 17.50409,-16.70668 23.85282,-19.476 15.32236,-6.68365 20.05368,-7.66605 36.74406,-7.62951 9.79742,0.0215 18.20199,1.32632 21.42075,2.04255 8.75121,1.94729 12.21417,3.7887 18.70513,7.51407 0,0 2.37097,1.62736 2.93028,1.99574 0.41142,0.27096 2.06819,1.71933 2.06819,1.71933 2.23027,1.46115 8.76511,8.4571 13.46016,16.94147 10.17389,18.38513 5.91428,54.44882 -8.09405,68.52775 -11.36253,11.4198 -26.54438,11.51803 -36.38153,0.23541 -5.00533,-5.74082 -5.84525,-11.61363 -2.83782,-19.84195 1.47469,-4.03469 2.46543,-10.25629 2.48136,-15.5823 0.0324,-10.85212 -2.4645,-14.15208 -11.48145,-15.17354 -7.84053,-0.8882 -14.31437,1.43769 -20.38921,7.32531 -6.54699,6.34522 -8.37649,9.46708 -12.50023,21.33034 -1.89114,5.44049 -5.21402,14.82762 -7.38416,20.86033 -2.17015,6.0327 -4.82597,13.45153 -5.90177,16.48627 -5.06314,14.28243 -11.35971,31.75736 -15.76978,43.76589 -2.66397,7.25397 -5.13962,14.37603 -5.50144,15.82683 -0.36183,1.45079 -1.19654,3.82482 -1.85491,5.27561 -3.14823,6.93757 -6.45472,20.08398 -6.42881,25.56068 0.0998,21.09765 24.08019,38.62049 53.11882,38.81474 20.95708,0.14019 41.93348,-9.54719 57.98183,-26.77738 6.69874,-7.19201 14.82831,-20.6293 18.16137,-30.01873 1.35273,-3.81071 4.15252,-8.55877 6.22174,-10.55121 3.28011,-3.1584 7.24542,-4.43864 11.47161,-4.67179 9.85099,-0.54346 16.55122,5.33416 19.06743,11.06755 1.18133,2.69173 1.70571,7.22233 -0.14031,13.61605 -8.81544,30.53237 -31.29032,57.10613 -60.9283,72.41742 -21.39089,11.05074 -52.5003,16.06089 -79.3934,12.78624 z"    sodipodi:nodetypes="sssssssssssssssssssssssssssssssssssssssss"></path>
		        </g>
	           </svg>
		       <span class="c-shop__text">-Shop</span>
	        </div>  			

			<nav class="navLink__box">
			   <ul>
			     <li><a href="#home" class="link active">Shop</a></li>
			     <li><a href="#product" class="link">Products</a></li>
			     <li><a href="catalog.php" class="link">Catalog</a></li>
			   	 <li><a href="newest.php" class="link">New<span>
			   	 	<img src="assets/icons/newone-certification.svg" class="link_new">
			   	 </span></a></li>
			   	 <li><a href="#contact" class="link">Contact</a></li>
			    </ul>
            </nav>

            <div class="nav__account-nav__cart-nav__user box flexed">
            <!-- ----------------------------unloged user------------------ -->
           <!--   <div class="nav_accout flexed">
             	<span class="signup flex">
			       SignUp           		
                    <svg xmlns="http://www.w3.org/2000/svg" class="account__icon" viewBox="0 0 24 24"><path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z"/></svg>
                </span>
                <hr class="account_devider">
             	<span class="signin flex">
			        Sign In
			        <svg xmlns="http://www.w3.org/2000/svg" class="account__icon" viewBox="0 0 24 24"><path d="M8 12.052c1.995 0 3.5-1.505 3.5-3.5s-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5 1.505 3.5 3.5 3.5zM9 13H7c-2.757 0-5 2.243-5 5v1h12v-1c0-2.757-2.243-5-5-5zm11.294-4.708-4.3 4.292-1.292-1.292-1.414 1.414 2.706 2.704 5.712-5.702z"/></svg>
             	</span>
             </div> -->
             <!-- -------------------------------------------------------- -->

			 <div class="nav_cart flexed" onclick="cartOpen()">
			   <img src="assets/icons/bag.svg" class="cart__icon">
             </div>
             <!-- ++++++++++++++++ user loged in +++++++++++++++++++  -->
             <div class="nav__username set flex">
             	<span class="username__logout flexed" onclick="window.location = 'logout.php'">
             	 <img src="assets/icons/log-out.svg" class="logout__icon">
             	</span>
             	<h3 class="username">#<?= htmlspecialchars($user["name"]) ?></h3>
             </div>
<!-- [[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]]]]]] -->
			    <div class="nav_user flexed">
			    	  <div class="nav_user flexed">
			    	<span class="user__button flex">
			    		<img src="assets/icons/user.svg" class="user__icon">
			    	</span>


			    </div>
			    <!-- ++++++++++++++++++++++++++++++++++++++++ -->
          </div>

            <!-- <div id="cart__box" class="cart__box"></div> -->

       </header>

  <div class="new__category flex" id="new__category">
	  <div class="category__center flex">
		      <span class="tags all actived flexed" onclick="window.location ='index.php'">All Categories
              <!--  <ul>
	            <li>technology</li>
	            <li>technology</li>
	            <li>technology</li>
	            <li>technology</li>
	            <li>technology</li>
	            <li>technology</li>
               </ul> -->
	        </span> 
	        <span class="tags flexed" onclick="window.location ='newest.php'">Newest</span>
	        <span class="tags flexed">Men's Clothing</span>
	        <span class="tags flexed">Kinds</span>
	        <span class="tags flexed">Unsex</span>
	        <span class="tags flexed">Food</span>
	        <span class="tags flexed">Video Games</span>
	        <span class="tags flexed">Books</span>
	        <span class="tags flexed">Headphones</span>
	        <span class="tags flexed">Laptop</span>
	        <span class="tags flexed">Phones</span>
	        <span class="tags actived flexed" onclick="search_btn()"><i class='bx bx-search' ></i>
	        	<div class="search__box" id="search__box">

	        		<!-- php searching page  named php/c-search_page.php-->

	        		  <form action="search_results.php" >
                       <input type="search" id="csearch" name="csearch" placeholder="C-Search: Categories, Products, Countries, & brands" 
                       class="search__field">
                        <button class="search__btn tags actived flexed" type="submit"><i class='bx bx-search' ></i></button>
                 </form>
              </div>
	        </span>
	    </div>
  </div>

    <script type="text/javascript">

    	// onscroll hide search quiry

    	var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {

        document.getElementById('new__category').style.display = "block";

        } 
        else {
        document.getElementById("new__category").style.display = "none";
        }
        prevScrollpos = currentScrollPos;
      }

let slideSearch = document.querySelector(".search__box");

function search_btn() {
  slideSearch.style.display = "block";
}
    //   function search_btn() {
    //    var element = document.body;
    //   	var
    //    element.classList.toggle("search__box").style.display = "block";
    //    document.getElementById("search__box").style.display = "block";

    // }
    </script>

		<div class="hero__content">
			<div class="hero__image">
				<div class="sub-hero__box">
					<img src="assets/imgs/new-products.webp" class="sub-hero__image">
				</div>
			</div>
			<div class="hero__info box">
				<h1 class="hero__title">Discover C-Products</h1>
			<p class="hero__text">
			 Experience the future of online shopping with the freedom of navigating to defferent products confidently free.
			 Add products on our smart Cart and make orders with advanced delivering system to enhance product safety and security.
			 Join us in revolutionizing remote shop by interacting with C-Shop.
			</p>
          <div class="hero__button flexed">
          	<a href="#product" class="order_now flex">Order Now <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
          </div>
          <!-- <div class="hero__button flexed">
          	<a href="#product" class="order_now flex">Order Now <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
          </div> -->
			</div>
		</div>
	</section>

  <section class="page product flex" id="product">
  	<h2 class="products__title">Winter Products</h2>
  	 <div class="products__conatiner">

			<div class="product__box">
				<img src="assets/products/0.jpg" class="product__image">

				 <div class="AddTocart__button">
						<i class='bx bx-cart-add' ></i>
				 </div>

				<div class="product__info">
					<h3 class="product__name">tief jumper</h3>
					<p class="product__about">buy the newest jumper with Isa, wonder why programmer wear jumper?.
					</p>
          <!-- 
					</button><button class="product__button">Buy
						<i class='bx bx-arrow-back bx-rotate-180' ></i>
					</button> -->
          
					<div class="product__buttons flex">
						<button class="purchase__button">Buy Now</button>
					  <button class="price__button">$<span class="price">50</span></button>
					</div>

          <!-- add to cart -->
					<!-- 
					<div class="purchase_btns">
						<button class="product__button">Buy Now
						<i class='bx bx-plus'></i>
					</button>
					<button class="product__button">Add to cart
						<i class='bx bx-cart-add' ></i>
					</button>
					</div>
				-->

				</div>
			</div>

			<div class="product__box">
				<img src="assets/products/1.jpg" class="product__image">
				<div class="product__info">
					<h3 class="product__name">Enhanced Safety</h3>
					<p class="product__about">Detects obstacles and alerts users for improved safety.
					</p>
					<button class="product__button">Buy
						<i class='bx bx-arrow-back bx-rotate-180' ></i>
				</div>
			</div>

			<div class="product__box">
				<img src="assets/products/2.jpg" class="product__image">
				<div class="product__info">
					<h3 class="product__name">Easy to Use</h3>
					<p class="product__about">Intuitive design and adjustable settings for personalized use.
					</p>
					<button class="product__button">Buy
						<i class='bx bx-arrow-back bx-rotate-180' ></i>
					</button>
				</div>
			</div>
            <div class="product__box">
				<img src="assets/products/3.jpg" class="product__image">
				<div class="product__info">
					<h3 class="product__name">SkyBlue Hoodie</h3>
					<p class="product__about">nice skyblue Hoodie, soft color for girls with nice feature for warming your body.
					</p>
					<button class="product__button">Buy
						<i class='bx bx-arrow-back bx-rotate-180' ></i>
					</button>
				</div>
			</div>
		</div>
	</section>
	<!-- <section class="page newest" id="newest">
        <div class="new__products">
           
         </div>
    </section> -->


 	<section class="page contact" id="contact">
		<footer class="footer">
       <div class="footer__container">

	  <div class="footer__newsletter-footer__social cover">
	  	<h3 class="title__footer__newsletter-footer__social title__list" title__list>Get In Touch</h3>
       	 <div class="footer__social">
       	 	<span class="social" onclick="window.location ='https://dashboard.twitch.tv/u/turikumanaisaie'"><i class='bx bxl-twitch'></i></span>
       	 	<span class="social" onclick="window.Location ='https://www.instagram.com/turikumanaisaie'"><i class='bx bxl-instagram' ></i></span>
       	 	<span class="social" onclick="window.location ='https://tiktok.com/@turikumanaisaie'"><i class='bx bxl-tiktok'></i></span>
       	 	<span class="social" onclick="window.location ='https://www.youtube.com/@turikumanaisaie'"><i class='bx bxl-youtube' ></i>

       	 </div>

	  	<div class="contacts__box">
	  		<h3 class="footer__form-header">Subscribe To Our Newsletter</h3>



	  		<!-- Subscribe emails page name php/subscribe_page.php -->

	  		<form class="footer__form box" action="subscribe_page.php">
	  			<input type="email" name="email" placeholder="Enter your email" class="field" required>
	  		    <button type="submit" type="button" class="acting">Subscribe</button>
	  		</form>
	  	</div>
	  	 	 <div class="box__logo footer_branding" onclick="window.location.href= '#home'">
	  	 	 	<div class="C-shop__brand">
	  	 	 		
			   <svg class="c-shop__icon" width="24" height="24" viewBox="0 0 24 24" version="1.1" id="svg1" sodipodi:docname="C-Shop.svg" xml:space="preserve" inkscape:export-filename="icons\brand\C-Shop.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
			    <defs id="defs1"></defs>
			    <sodipodi:namedview id="namedview1" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"></sodipodi:namedview>
			    <g id="g17" transform="matrix(0.0791812,0,0,0.0791812,-9.6840863,-9.290962)">
			    <path class="c-shop__icon-layer1" d="m 239.66101,409.37007 c -13.54433,-1.64923 -30.55597,-7.80771 -41.9932,-15.20221 -39.93742,-28.33308 -36.89962,-67.06558 -22.9241,-107.48435 2.99561,-8.34205 5.93362,-16.65113 6.52889,-18.46463 0.59528,-1.81349 4.12161,-11.90309 7.83631,-22.42134 3.71469,-10.51824 7.27104,-20.9046 7.90299,-23.08079 0.63197,-2.17617 3.18577,-9.59502 5.67514,-16.48627 2.48936,-6.89127 5.24179,-14.60685 6.11648,-17.14573 0.87472,-2.53888 2.27717,-6.05557 3.14868,-8.39825 0.45041,-1.21075 2.20386,-5.50807 4.36672,-9.92726 1.73267,-3.54023 6.10906,-10.07878 10.64371,-15.77638 5.48804,-6.89548 17.50409,-16.70668 23.85282,-19.476 15.32236,-6.68365 20.05368,-7.66605 36.74406,-7.62951 9.79742,0.0215 18.20199,1.32632 21.42075,2.04255 8.75121,1.94729 12.21417,3.7887 18.70513,7.51407 0,0 2.37097,1.62736 2.93028,1.99574 0.41142,0.27096 2.06819,1.71933 2.06819,1.71933 2.23027,1.46115 8.76511,8.4571 13.46016,16.94147 10.17389,18.38513 5.91428,54.44882 -8.09405,68.52775 -11.36253,11.4198 -26.54438,11.51803 -36.38153,0.23541 -5.00533,-5.74082 -5.84525,-11.61363 -2.83782,-19.84195 1.47469,-4.03469 2.46543,-10.25629 2.48136,-15.5823 0.0324,-10.85212 -2.4645,-14.15208 -11.48145,-15.17354 -7.84053,-0.8882 -14.31437,1.43769 -20.38921,7.32531 -6.54699,6.34522 -8.37649,9.46708 -12.50023,21.33034 -1.89114,5.44049 -5.21402,14.82762 -7.38416,20.86033 -2.17015,6.0327 -4.82597,13.45153 -5.90177,16.48627 -5.06314,14.28243 -11.35971,31.75736 -15.76978,43.76589 -2.66397,7.25397 -5.13962,14.37603 -5.50144,15.82683 -0.36183,1.45079 -1.19654,3.82482 -1.85491,5.27561 -3.14823,6.93757 -6.45472,20.08398 -6.42881,25.56068 0.0998,21.09765 24.08019,38.62049 53.11882,38.81474 20.95708,0.14019 41.93348,-9.54719 57.98183,-26.77738 6.69874,-7.19201 14.82831,-20.6293 18.16137,-30.01873 1.35273,-3.81071 4.15252,-8.55877 6.22174,-10.55121 3.28011,-3.1584 7.24542,-4.43864 11.47161,-4.67179 9.85099,-0.54346 16.55122,5.33416 19.06743,11.06755 1.18133,2.69173 1.70571,7.22233 -0.14031,13.61605 -8.81544,30.53237 -31.29032,57.10613 -60.9283,72.41742 -21.39089,11.05074 -52.5003,16.06089 -79.3934,12.78624 z"    sodipodi:nodetypes="sssssssssssssssssssssssssssssssssssssssss"></path>
		        </g>
	           </svg>
		       <span class="c-shop__text">-Shop</span>
	  	 	 	</div>
	  </div>
	  	
	  </div>	

           	<div class="help__list">
           		<h3 class="title__list">HELP</h3>
           		<ul>
           			<li><a href="faqs.html">FAQs</a></li>
           			<li><a href="help-center.html">Help Center</a></li>
           			<li><a href="live-chat.html">Live Chat</a></li>
           			<li><a href="refunds.html">Refunds</a></li>
           			<li><a href="feedback.html">Feedback</a></li>
           			<li><a href="teams.html">Teams</a></li>
           			<li><a href="orderstatus.html">Order Status</a></li>
           			<li><a href="report-abuse.html">Report abuse</a></li>
           		</ul>
           	</div>

           	<div class="shop_Vist__list">
           		<h3 class="title__list">SHOP & VIST</h3>
           		<ul>
           			<li><a href="delivery-options.html">Delivery options</a></li>
           			<li><a href="sitemap.html">Sitemap</a></li>
           			<li><a href="newest.html">New Products</a></li>
           			<li><a href="rwanda.html">C-shop Rwanda</a></li>
           			<li><a href="#shipping">C-Shop Russin</a></li>
           			<li><a href="uk.html">C-Shop UK & German</a></li>
           			<li><a href="us.html">C-Shop USA</a></li>
           			<li><a href="events.html">News & Events</a></li>
           		</ul>
           	</div>

           	<div class="legal__list">
           		<h3 class="title__list">LEGAL</h3>
           		<ul>
           			<li><a href="cookies.html">Cookies</a></li>
           			<li><a href="faqs.html">FAQs</a></li>
           			<li><a href="security-center.html">Security Center</a></li>
           			<li><a href="privacy-settings.html">Privacy settings</a></li>
           			<li><a href="making-payments.html">Making payments</a></li>
           			<li><a href="about.html">About Us</a></li>
           			<li><a href="affiliate-program.html">Affiliate program</a></li>
           		</ul>
           </div>

           	<hr class="bottom__line">
           	<p class="copyright">Copyright 2024 &copy; <span onclick="window.location ='https://www.youtube.com/channel/UCGpdA6jZMwot-Ot7MIPEYLw'">Isaie</span> All right reserved.</p>
           	</div>
    </footer>          
	</section>
	<?php else: ?>




































<!-- HOME PAGE WHEN YOU ARE GUEST | WHEN YOU DON"T HAVE AN ACCOUNT -->


		<!-- <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p> -->
 <section class="page hero" id="home">

	<header class="nav__bar">

         <!-- Nav Logo -->
		    <div class="box__logo nav_branding" onclick="window.location.href= 'index.php'">
			   <svg class="c-shop__icon" width="24" height="24" viewBox="0 0 24 24" version="1.1" id="svg1" sodipodi:docname="C-Shop.svg" xml:space="preserve" inkscape:export-filename="icons\brand\C-Shop.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
			    <defs id="defs1"></defs>
			    <sodipodi:namedview id="namedview1" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"></sodipodi:namedview>
			    <g id="g17" transform="matrix(0.0791812,0,0,0.0791812,-9.6840863,-9.290962)">
			    <path class="c-shop__icon-layer1" d="m 239.66101,409.37007 c -13.54433,-1.64923 -30.55597,-7.80771 -41.9932,-15.20221 -39.93742,-28.33308 -36.89962,-67.06558 -22.9241,-107.48435 2.99561,-8.34205 5.93362,-16.65113 6.52889,-18.46463 0.59528,-1.81349 4.12161,-11.90309 7.83631,-22.42134 3.71469,-10.51824 7.27104,-20.9046 7.90299,-23.08079 0.63197,-2.17617 3.18577,-9.59502 5.67514,-16.48627 2.48936,-6.89127 5.24179,-14.60685 6.11648,-17.14573 0.87472,-2.53888 2.27717,-6.05557 3.14868,-8.39825 0.45041,-1.21075 2.20386,-5.50807 4.36672,-9.92726 1.73267,-3.54023 6.10906,-10.07878 10.64371,-15.77638 5.48804,-6.89548 17.50409,-16.70668 23.85282,-19.476 15.32236,-6.68365 20.05368,-7.66605 36.74406,-7.62951 9.79742,0.0215 18.20199,1.32632 21.42075,2.04255 8.75121,1.94729 12.21417,3.7887 18.70513,7.51407 0,0 2.37097,1.62736 2.93028,1.99574 0.41142,0.27096 2.06819,1.71933 2.06819,1.71933 2.23027,1.46115 8.76511,8.4571 13.46016,16.94147 10.17389,18.38513 5.91428,54.44882 -8.09405,68.52775 -11.36253,11.4198 -26.54438,11.51803 -36.38153,0.23541 -5.00533,-5.74082 -5.84525,-11.61363 -2.83782,-19.84195 1.47469,-4.03469 2.46543,-10.25629 2.48136,-15.5823 0.0324,-10.85212 -2.4645,-14.15208 -11.48145,-15.17354 -7.84053,-0.8882 -14.31437,1.43769 -20.38921,7.32531 -6.54699,6.34522 -8.37649,9.46708 -12.50023,21.33034 -1.89114,5.44049 -5.21402,14.82762 -7.38416,20.86033 -2.17015,6.0327 -4.82597,13.45153 -5.90177,16.48627 -5.06314,14.28243 -11.35971,31.75736 -15.76978,43.76589 -2.66397,7.25397 -5.13962,14.37603 -5.50144,15.82683 -0.36183,1.45079 -1.19654,3.82482 -1.85491,5.27561 -3.14823,6.93757 -6.45472,20.08398 -6.42881,25.56068 0.0998,21.09765 24.08019,38.62049 53.11882,38.81474 20.95708,0.14019 41.93348,-9.54719 57.98183,-26.77738 6.69874,-7.19201 14.82831,-20.6293 18.16137,-30.01873 1.35273,-3.81071 4.15252,-8.55877 6.22174,-10.55121 3.28011,-3.1584 7.24542,-4.43864 11.47161,-4.67179 9.85099,-0.54346 16.55122,5.33416 19.06743,11.06755 1.18133,2.69173 1.70571,7.22233 -0.14031,13.61605 -8.81544,30.53237 -31.29032,57.10613 -60.9283,72.41742 -21.39089,11.05074 -52.5003,16.06089 -79.3934,12.78624 z"    sodipodi:nodetypes="sssssssssssssssssssssssssssssssssssssssss"></path>
		        </g>
	           </svg>
		       <span class="c-shop__text">-Shop</span>
	        </div>  			

			<nav class="navLink__box">
			   <ul>
			     <li><a href="#home" class="link active">Shop</a></li>
			     <li><a href="#product" class="link">Products</a></li>
			     <li><a href="catalog.php" class="link">Catalog</a></li>
			   	 <li><a href="newest.php" class="link">New <span>
			   	 	<img src="assets/icons/newone-certification.svg" class="link_new">
			   	 </span></a></li>
			   	 <li><a href="#contact" class="link">Contact</a></li>
			    </ul>
            </nav>

            <div class="nav__account-nav__cart-nav__user box flexed">
            <!-- ----------------------------unloged user------------------ -->
             <div class="nav_accout flexed">
             	<span class="signup flex"  onclick="window.location ='signup.html'">
			       SignUp           		
                    <svg xmlns="http://www.w3.org/2000/svg" class="account__icon" viewBox="0 0 24 24"><path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z"/></svg>
                </span>
                <hr class="account_devider">
             	<span class="signin flex" onclick="window.location ='login.php'">
			        Sign In
			        <svg xmlns="http://www.w3.org/2000/svg" class="account__icon" viewBox="0 0 24 24"><path d="M8 12.052c1.995 0 3.5-1.505 3.5-3.5s-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5 1.505 3.5 3.5 3.5zM9 13H7c-2.757 0-5 2.243-5 5v1h12v-1c0-2.757-2.243-5-5-5zm11.294-4.708-4.3 4.292-1.292-1.292-1.414 1.414 2.706 2.704 5.712-5.702z"/></svg>
             	</span>
             </div>
             		<!-- <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p> -->

             <!-- -------------------------------------------------------- -->

			 <div class="nav_cart flexed" onclick="cartOpen()">
			   <img src="assets/icons/bag.svg" class="cart__icon">
             </div>



             <!-- ++++++++++++++++ user loged in +++++++++++++++++++  -->
            <!--  <div class="nav__username set flex">
             	<span class="username__logout flexed" onclick="window.location = 'logout.php'">
             	 <img src="assets/icons/log-out.svg" class="logout__icon">
             	</span>
             	<h3 class="username"># 
             	</h3>
             </div> -->
<!-- [[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]]]]]] -->
			   <!--  <div class="nav_user flexed">
			    	  <div class="nav_user flexed">
			    	<span class="user__button flex">
			    		<img src="assets/icons/user.svg" class="user__icon">
			    	</span>


			    </div> -->
			    <!-- ++++++++++++++++++++++++++++++++++++++++ -->
          </div>

            <!-- <div id="cart__box" class="cart__box"></div> -->

       </header>

 <!--  <div class="new__category flex" id="new__category">
	  <div class="category__center flex">
		      <span class="tags all actived flexed">All Categories
               <ul>
	            <li>technology</li>
	            <li>technology</li>
	            <li>technology</li>
	            <li>technology</li>
	            <li>technology</li>
	            <li>technology</li>
               </ul>
	        </span> 
	        <span class="tags flexed">Newest</span>
	        <span class="tags flexed">Men's Clothing</span>
	        <span class="tags flexed">Kinds</span>
	        <span class="tags flexed">Unsex</span>
	        <span class="tags flexed">Food</span>
	        <span class="tags flexed">Video Games</span>
	        <span class="tags flexed">Books</span>
	        <span class="tags flexed">Headphones</span>
	        <span class="tags flexed">Laptop</span>
	        <span class="tags flexed">Phones</span>
	        <span class="tags actived flexed" onclick="search_btn()"><i class='bx bx-search' ></i>
	        	<div class="search__box" id="search__box">
 -->
	        		<!-- php searching page  named php/c-search_page.php-->

	        		<!--   <form action="php/c-search_page.php" >
                       <input type="search" id="csearch" name="csearch" placeholder="C-Search: Categories, Products, Countries, & brands" 
                       class="search__field">
                        <button class="search__btn tags actived flexed" type="submit"><i class='bx bx-search' ></i></button>
                 </form>
              </div>
	        </span>
	    </div>
  </div> -->

		<div class="hero__content">
			<div class="hero__image">
				<div class="sub-hero__box">
					<img src="assets/imgs/new-products.webp" class="sub-hero__image">
				</div>
			</div>
			<div class="hero__info box">
				<h1 class="hero__title">Discover C-Products</h1>
			<p class="hero__text">
			 Experience the future of online shopping with the freedom of navigating to defferent products confidently free.
			 Add products on our smart Cart and make orders with advanced delivering system to enhance product safety and security.
			 Join us in revolutionizing remote shop by interacting with C-Shop.
			</p>
          <div class="hero__button flexed">
          	<a href="signup.html" class="join_us order_now flex">Join Us <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
          </div>
          <!-- <div class="hero__button flexed">
          	<a href="#product" class="order_now flex">Order Now <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
          </div> -->
			</div>
		</div>
	</section>

    <section class="page catalog" id="product">

		<h2 class="products__title">Winter Products</h2>

		<div class="products__conatiner">
			<div class="product__box">
				<img src="assets/products/0.jpg" class="product__image">
				<div class="product__info">
					<h3 class="product__name">tief jumper</h3>
					<p class="product__about">buy the newest jumper with Isa, wonder why programmer wear jumper?.
					</p>
                      <!-- 
					</button><button class="product__button">Buy
						<i class='bx bx-arrow-back bx-rotate-180' ></i>
					</button> -->

					<div class="purchase_btns">
						<button class="product__button">Buy Now
						<i class='bx bx-plus'></i>
					</button>
					<button class="product__button">Add to cart
						<i class='bx bx-cart-add' ></i>
					</button>
					</div>

                      <!-- add to cart -->
					<!-- 
					<div class="purchase_btns">
						<button class="product__button">Buy Now
						<i class='bx bx-plus'></i>
					</button>
					<button class="product__button">Add to cart
						<i class='bx bx-cart-add' ></i>
					</button>
					</div>
				-->

				</div>
			</div>

			<div class="product__box">
				<img src="assets/products/1.jpg" class="product__image">
				<div class="product__info">
					<h3 class="product__name">Enhanced Safety</h3>
					<p class="product__about">Detects obstacles and alerts users for improved safety.
					</p>
					<button class="product__button">Buy
						<i class='bx bx-arrow-back bx-rotate-180' ></i>
				</div>
			</div>

			<div class="product__box">
				<img src="assets/products/2.jpg" class="product__image">
				<div class="product__info">
					<h3 class="product__name">Easy to Use</h3>
					<p class="product__about">Intuitive design and adjustable settings for personalized use.
					</p>
					<button class="product__button">Buy
						<i class='bx bx-arrow-back bx-rotate-180' ></i>
					</button>
				</div>
			</div>
            <div class="product__box">
				<img src="assets/products/3.jpg" class="product__image">
				<div class="product__info">
					<h3 class="product__name">SkyBlue Hoodie</h3>
					<p class="product__about">nice skyblue Hoodie, soft color for girls with nice feature for warming your body.
					</p>
					<button class="product__button">Buy
						<i class='bx bx-arrow-back bx-rotate-180' ></i>
					</button>
				</div>
			</div>
		</div>
	</section>






















 	<section class="page contact" id="contact">
		<footer class="footer">
       <div class="footer__container">

	  <div class="footer__newsletter-footer__social cover">
	  	<h3 class="title__footer__newsletter-footer__social title__list" title__list>Get In Touch</h3>
       	 <div class="footer__social">
       	 	<span class="social" onclick="window.location ='https://dashboard.twitch.tv/u/turikumanaisaie'"><i class='bx bxl-twitch'></i></span>
       	 	<span class="social" onclick="window.Location ='https://www.instagram.com/turikumanaisaie'"><i class='bx bxl-instagram' ></i></span>
       	 	<span class="social" onclick="window.location ='https://tiktok.com/@turikumanaisaie'"><i class='bx bxl-tiktok'></i></span>
       	 	<span class="social" onclick="window.location ='https://www.youtube.com/@turikumanaisaie'"><i class='bx bxl-youtube' ></i>

       	 </div>

	  	<div class="contacts__box">
	  		<h3 class="footer__form-header">Subscribe To Our Newsletter</h3>



	  		<!-- Subscribe emails page name php/subscribe_page.php -->

	  		<form class="footer__form box" action="subscribe_page.php">
	  			<input type="email" name="email" placeholder="Enter your email" class="field" required>
	  		    <button type="submit" type="button" class="acting">Subscribe</button>
	  		</form>
	  	</div>
	  	 	 <div class="box__logo footer_branding" onclick="window.location.href= '#home'">
	  	 	 	<div class="C-shop__brand">
	  	 	 		
			   <svg class="c-shop__icon" width="24" height="24" viewBox="0 0 24 24" version="1.1" id="svg1" sodipodi:docname="C-Shop.svg" xml:space="preserve" inkscape:export-filename="icons\brand\C-Shop.svg" inkscape:export-xdpi="96" inkscape:export-ydpi="96" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
			    <defs id="defs1"></defs>
			    <sodipodi:namedview id="namedview1" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0"></sodipodi:namedview>
			    <g id="g17" transform="matrix(0.0791812,0,0,0.0791812,-9.6840863,-9.290962)">
			    <path class="c-shop__icon-layer1" d="m 239.66101,409.37007 c -13.54433,-1.64923 -30.55597,-7.80771 -41.9932,-15.20221 -39.93742,-28.33308 -36.89962,-67.06558 -22.9241,-107.48435 2.99561,-8.34205 5.93362,-16.65113 6.52889,-18.46463 0.59528,-1.81349 4.12161,-11.90309 7.83631,-22.42134 3.71469,-10.51824 7.27104,-20.9046 7.90299,-23.08079 0.63197,-2.17617 3.18577,-9.59502 5.67514,-16.48627 2.48936,-6.89127 5.24179,-14.60685 6.11648,-17.14573 0.87472,-2.53888 2.27717,-6.05557 3.14868,-8.39825 0.45041,-1.21075 2.20386,-5.50807 4.36672,-9.92726 1.73267,-3.54023 6.10906,-10.07878 10.64371,-15.77638 5.48804,-6.89548 17.50409,-16.70668 23.85282,-19.476 15.32236,-6.68365 20.05368,-7.66605 36.74406,-7.62951 9.79742,0.0215 18.20199,1.32632 21.42075,2.04255 8.75121,1.94729 12.21417,3.7887 18.70513,7.51407 0,0 2.37097,1.62736 2.93028,1.99574 0.41142,0.27096 2.06819,1.71933 2.06819,1.71933 2.23027,1.46115 8.76511,8.4571 13.46016,16.94147 10.17389,18.38513 5.91428,54.44882 -8.09405,68.52775 -11.36253,11.4198 -26.54438,11.51803 -36.38153,0.23541 -5.00533,-5.74082 -5.84525,-11.61363 -2.83782,-19.84195 1.47469,-4.03469 2.46543,-10.25629 2.48136,-15.5823 0.0324,-10.85212 -2.4645,-14.15208 -11.48145,-15.17354 -7.84053,-0.8882 -14.31437,1.43769 -20.38921,7.32531 -6.54699,6.34522 -8.37649,9.46708 -12.50023,21.33034 -1.89114,5.44049 -5.21402,14.82762 -7.38416,20.86033 -2.17015,6.0327 -4.82597,13.45153 -5.90177,16.48627 -5.06314,14.28243 -11.35971,31.75736 -15.76978,43.76589 -2.66397,7.25397 -5.13962,14.37603 -5.50144,15.82683 -0.36183,1.45079 -1.19654,3.82482 -1.85491,5.27561 -3.14823,6.93757 -6.45472,20.08398 -6.42881,25.56068 0.0998,21.09765 24.08019,38.62049 53.11882,38.81474 20.95708,0.14019 41.93348,-9.54719 57.98183,-26.77738 6.69874,-7.19201 14.82831,-20.6293 18.16137,-30.01873 1.35273,-3.81071 4.15252,-8.55877 6.22174,-10.55121 3.28011,-3.1584 7.24542,-4.43864 11.47161,-4.67179 9.85099,-0.54346 16.55122,5.33416 19.06743,11.06755 1.18133,2.69173 1.70571,7.22233 -0.14031,13.61605 -8.81544,30.53237 -31.29032,57.10613 -60.9283,72.41742 -21.39089,11.05074 -52.5003,16.06089 -79.3934,12.78624 z"    sodipodi:nodetypes="sssssssssssssssssssssssssssssssssssssssss"></path>
		        </g>
	           </svg>
		       <span class="c-shop__text">-Shop</span>
	  	 	 	</div>
	  </div>
	  	
	  </div>	

           	<div class="help__list">
           		<h3 class="title__list">HELP</h3>
           		<ul>
           			<li><a href="faqs.html">FAQs</a></li>
           			<li><a href="help-center.html">Help Center</a></li>
           			<li><a href="live-chat.html">Live Chat</a></li>
           			<li><a href="refunds.html">Refunds</a></li>
           			<li><a href="feedback.html">Feedback</a></li>
           			<li><a href="teams.html">Teams</a></li>
           			<li><a href="orderstatus.html">Order Status</a></li>
           			<li><a href="report-abuse.html">Report abuse</a></li>
           		</ul>
           	</div>

           	<div class="shop_Vist__list">
           		<h3 class="title__list">SHOP & VIST</h3>
           		<ul>
           			<li><a href="delivery-options.html">Delivery options</a></li>
           			<li><a href="sitemap.html">Sitemap</a></li>
           			<li><a href="newest.html">New Products</a></li>
           			<li><a href="rwanda.html">C-shop Rwanda</a></li>
           			<li><a href="shipping.html">C-Shop Russin</a></li>
           			<li><a href="uk.html">C-Shop UK & German</a></li>
           			<li><a href="us.html">C-Shop USA</a></li>
           			<li><a href="events.html">News & Events</a></li>
           		</ul>
           	</div>

           	<div class="legal__list">
           		<h3 class="title__list">LEGAL</h3>
           		<ul>
           			<li><a href="cookies.html">Cookies</a></li>
           			<li><a href="faqs.html">FAQs</a></li>
           			<li><a href="security-center.html">Security Center</a></li>
           			<li><a href="privacy-settings.html">Privacy settings</a></li>
           			<li><a href="making-payments.html">Making payments</a></li>
           			<li><a href="about.html">About Us</a></li>
           			<li><a href="affiliate-program.html">Affiliate program</a></li>
           		</ul>
           </div>

           	<hr class="bottom__line">
           	<p class="copyright">Copyright 2024 &copy; <span onclick="window.location ='https://www.youtube.com/channel/UCGpdA6jZMwot-Ot7MIPEYLw'">Isaie</span> All right reserved.</p>
           	</div>
    </footer>          
	</section>

	<?php endif; ?>

</body>
</html>