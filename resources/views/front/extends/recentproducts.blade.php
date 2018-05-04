@foreach($recent_pro as $recent)
                <div class="col-md-3 col-md2">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="{{route('front.product.show', ['id' => $recent->pro_id]) }}">
							<img class="img-responsive" src="{!! url('public/backend/images/products/'.$recent->pro_img) !!}" alt="" style="width:185px; height: 207px;" />
						</a>
						<h3><a href="single.html">{{$recent->pro_title}}</a></h3>
						<div class="price">
								<h5 class="item_price">{{$recent->pro_price}}$</h5>
								<a href="{{route('cart.addItem',['id' => $recent->pro_id])}}" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
@endforeach