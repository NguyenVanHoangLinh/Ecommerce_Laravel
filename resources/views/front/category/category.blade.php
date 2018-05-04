@extends('front.extends.master')
@section('content')
<div class="products">
	<div class="container">
		<h1>Products</h1>
		<div class="col-md-9">
			<div class="content-top1">
				@foreach($relatedpro as $repro)
				<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="{{route('front.product.show', ['id' => $repro->pro_id]) }}">
							<img class="img-responsive" src="{!! url('public/backend/images/products/'.$repro->pro_img) !!}" alt="" />
						</a>
						<h3><a href="{{route('front.product.show', ['id' => $repro->pro_id]) }}">{{$repro->pro_title}}</a></h3>
						<div class="price">
								<h5 class="item_price">${{$repro->pro_price}}</h5>
								<a href="{{route('cart.addItem',['id' => $repro->pro_id])}}" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				@endforeach
			<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
@endsection