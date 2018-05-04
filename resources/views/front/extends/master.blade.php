<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
   <title>Fashion Mania A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
   <link href="{{ asset('public/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
   <!-- Custom Theme files -->
   <!--theme-style-->
   <link href="{{ asset('public/frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
   <!--//theme-style-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
   Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script src="{{ asset('public/frontend/js/jquery.min.js')}}"></script>
                <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   <link href="{{ asset('public/frontend/css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('public/frontend/fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
      <script type="text/javascript">
       jQuery(document).ready(function ($) {
         $("#slider").responsiveSlides({
         	auto: true,
         	speed: 500,
           namespace: "callbacks",
           pager: true,
         });
       });
     </script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

               <!-- start menu -->
                  <script type="text/javascript" src="{{ asset('public/frontend/js/memenu.js')}}"></script>
                  <script>$(document).ready(function(){$(".memenu").memenu();});</script>
                  <script src="{{ asset('public/frontend/js/simpleCart.min.js')}}"> </script>
                  <!-- slide -->
                  <script src="{{ asset('public/frontend/js/responsiveslides.min.js')}}"></script>
   </head>
    <body>
    <!--header-->
    <div class="header">
    	<div class="header-top">
    		<div class="container">
    		<div class="col-sm-4 world">
    				</div>
    				<div class="col-sm-4 logo">
    					<a href="{{route('home')}}"><img src="{{ asset('public/frontend/images/logo.png')}}" alt=""></a>
    				</div>
                @if(\Illuminate\Support\Facades\Auth::check())
                            		    <div >
                            		    <h4><strong>Xin chao ban {{\Illuminate\Support\Facades\Auth::user()->user_fullname}}</strong></h4>
                                        <a href="{{route('logout')}}">LOG OUT</a>
                                       </div>
                 @else
    			<div class="col-sm-4 header-left">
    					<p class="log"><a href="{{route('signin')}}">Login</a>
    						<span>or</span><a  href="{{route('signup')}}"  >Signup</a></p>
    			</div>
    			@endif
      					<div class="cart box_1">
       						<a href="{{route('cart.index')}}">
       						<h3> <div class="total">
       							<span>${{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</span></div>
       							<img src="{{ asset('public/frontend/images/cart.png')}}" alt=""/></h3>
       						</a>

       					</div>
       					<div class="clearfix"> </div>
    				<div class="clearfix"> </div>
    		</div>
    		</div>
    		<div class="container">
    			<div class="head-top">
    				<div class="col-sm-2 number">
    					<span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
    				</div>
    		 <div class="col-sm-8 h_menu4">
    				<ul class="memenu skyblue">
    					  <li class=" grid"><a  href="{{route('home')}}">Home</a></li>
    				      <li><a  href="">Product</a>
    				      	<div class="mepanel">
    						<div class="row">
    							<div class="col1">
    								<div class="h_nav">
    									<a href="{{route('front.category.show', ['id' =>8]) }}"><h4>Shirt</h4></a>
    									<ul>
                                        @foreach($pro_shirt as $shirt)
                                              <li><a href="{{route('front.product.show',['id' =>$shirt->pro_id])}}">{{$shirt->pro_title}}</a></li>
                                        @endforeach
    									</ul>
    								</div>
    							</div>
    							<div class="col1">
    								<div class="h_nav">
    									<a href="{{route('front.category.show', ['id' =>9]) }}"><h4>Pant</h4></a>
    									<ul>
                                        @foreach($pro_pant as $pant)
                                              <li><a href="{{route('front.product.show',['id' =>$pant->pro_id])}}">{{$pant->pro_title}}</a></li>
                                        @endforeach
    									</ul>
    								</div>
    							</div>
                                <div class="col1">
     								<div class="h_nav">
     									<a href="{{route('front.category.show', ['id' =>10]) }}"><h4>Dress</h4></a>
     									<ul>
                                        @foreach($pro_dress as $dress)
                                              <li><a href="{{route('front.product.show',['id' =>$dress->pro_id])}}">{{$dress->pro_title}}</a></li>
                                        @endforeach
     									</ul>
     								</div>
     							</div>
    						  </div>
    						</div>
    					</li>
    				<li><a href="{{route('cart.index')}}">Cart</a> </li>
    				<li><a  href="{{route('about-us')}}">About Us</a></li>
    			  </ul>
    			</div>
    		<div class="clearfix"> </div>
    			<!---pop-up-box---->
    					<!---//pop-up-box---->
    				 <script>
    						$(document).ready(function() {
    						$('.popup-with-zoom-anim').magnificPopup({
    							type: 'inline',
    							fixedContentPos: false,
    							fixedBgPos: true,
    							overflowY: 'auto',
    							closeBtnInside: true,
    							preloader: false,
    							midClick: true,
    							removalDelay: 300,
    							mainClass: 'my-mfp-zoom-in'
    						});

    						});
    				</script>
    	<!---->
    		</div>
    	</div>
    </div>
    <!--banner-->
    <div class="banner">
    	<div class="col-sm-3 banner-mat">
    		<img class="img-responsive"	src="{{ asset('public/frontend/images/ba1.jpg')}}" alt="">
    	</div>
    	<div class="col-sm-6 matter-banner">
    	 	<div class="slider">
    	    	<div class="callbacks_container">
    	      		<ul class="rslides" id="slider">
    	        		<li>
    	          			<img src="{{ asset('public/frontend/images/1.jpg')}}" alt="">
    	       			 </li>
    			 		 <li>
    	          			<img src="{{ asset('public/frontend/images/2.jpg')}}" alt="">
    	       			 </li>
    					 <li>
    	          			<img src="{{ asset('public/frontend/images/1.jpg')}}" alt="">
    	        		</li>
    	      		</ul>
    	 	 	</div>
    		</div>
    	</div>
    	<div class="col-sm-3 banner-mat">
    		<img class="img-responsive" src="{{ asset('public/frontend/images/ba.jpg')}}" alt="">
    	</div>
    	<div class="clearfix"> </div>
    </div>
    <!--//banner-->
    <!--content-->
    @yield('content')
    <!--footer-->
    <div class="footer">
    	<div class="container">
    		<div class="footer-top">
    			<div class="contact-bottom">
                                				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6648228369504!2d105.80332021443618!3d21.04609319256341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3073615aff%3A0x5f7d5efd40024836!2zSG_DoG5nIFF14buRYyBWaeG7h3QsIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1513133867054" width="700" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
    			<div class="col-md-4 top-footer1">
    			</div>
    			<div class="clearfix"> </div>
    		</div>
    	</div>
    	<div class="footer-bottom">
    		<div class="container">
    				<div class="col-sm-3 footer-bottom-cate">
    					<h6>Categories</h6>
    					<ul>
                            @include('front.extends.categoriesfooter')
    					</ul>
    				</div>
    				<div class="col-sm-3 footer-bottom-cate">
    				</div>
    				<div class="col-sm-3 footer-bottom-cate">
    				</div>
    				<div class="col-sm-3 footer-bottom-cate cate-bottom">
    					<h6>Our Address</h6>
    					<ul>
    					    <li>BACH KHOA APTECH</li>
    						<li>238</li>
    						<li>HOÀNG QUỐC VIỆT</li>
    						<li>HÀ NỘI</li>
    						<li>VIỆT NAM</li>
    						<li class="phone">PH : 6985792466</li>
    					</ul>
    				</div>
    				<div class="clearfix"> </div>
    				<p class="footer-class">Fashion Mania. All Rights Reserved | Design by NGUYỄN VĂN HOÀNG LINH</a> </p>
    			</div>
    	</div>
    </div>

    </body>
</html>
