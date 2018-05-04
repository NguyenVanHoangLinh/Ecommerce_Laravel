@foreach($hot_pro as $hot)
                <div class="col-md-3 col-md2">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="{{route('front.product.show', ['id' => $hot->pro_id]) }}">
							<img class="img-responsive" src="{!! url('public/backend/images/products/'.$hot->pro_img) !!}" alt="" style="width:185px; height: 207px;" />
						</a>
						<h3><a href="single.html">{{$hot->pro_title}}</a></h3>
						<div class="price">
								<h5 class="item_price">{{$hot->pro_price}}$</h5>
								<a href="{{route('cart.addItem',['id' => $hot->pro_id])}}" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
@endforeach