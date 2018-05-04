@extends('front.extends.master')
@section('content')
<div class="single">
<div class="container">
@foreach($product as $show)
<div class="col-md-9">
	<div class="col-md-5 grid">
		<div class="thumb-image"> <img src="{!! url('public/backend/images/products/'.$show->pro_img) !!}" data-imagezoom="true" class="img-responsive" style="width: 305px; height: 400px;"> </div><br>
		<div>
        	@foreach($pimgs as $img)
        		<img src="{!! url('public/backend/images/product_imgs/'.$img->product_img) !!}" style="width: 100px; height: 200px;">
        	@endforeach
        </div>
	</div>
<div class="col-md-7 single-top-in">
						<div class="single-para simpleCart_shelfItem">
							<h1>{{$show->pro_title}}</h1>
							<p>{{$show->pro_descript}}</p>

								<label  class="add-to item_price">${{$show->pro_price}}</label>

							<div class="available">
								<h6>Description</h6>
								<h4>{{$show->pro_detail}}</h4>
						</div>
								<a href="{{route('cart.addItem',['id' => $show->pro_id])}}" class="cart item_add">Add to cart</a>
						</div>
					</div>
			<div class="clearfix"> </div>
			<div class="content-top1">
			<div class="clearfix"> </div>
			</div>
			{{--@foreach($products as $related)--}}
			                {{--<div class="col-md-4 col-md3">--}}
            					{{--<div class="col-md1 simpleCart_shelfItem">--}}
            						{{--<a href="single.html">--}}
            							{{--<img class="img-responsive" src="{!! url('public/backend/images/products/'.$related->pro_img) !!}" alt="" />--}}
            						{{--</a>--}}
            						{{--<h3><a href="single.html">{{$related->pro_detail}}</a></h3>--}}
            						{{--<div class="price">--}}
            								{{--<h5 class="item_price">{{$related->pro_price}}</h5>--}}
            								{{--<a href="#" class="item_add">Add To Cart</a>--}}
            								{{--<div class="clearfix"> </div>--}}
            						{{--</div>--}}
            					{{--</div>--}}
            				{{--</div>--}}
			{{--@endforeach--}}
</div>
@endforeach
<!----->
<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar footer-bottom-cate">
						<h3 class="cate">Categories</h3>
						<ul>
                            @include('front.extends.categoriesfooter')
                         </ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });

							});
						</script>
<!--//menu-->
<!--seller-->

<!--//seller-->
<!--tag-->
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
@endsection