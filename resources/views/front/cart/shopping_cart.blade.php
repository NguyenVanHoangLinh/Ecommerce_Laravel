@extends('front.extends.master')
@section('content')
    @if(\Illuminate\Support\Facades\Auth::check())
    <table id="cart" class="table table-hover table-condensed">
        				<thead>
    						<tr>
    							<th style="width:50%">Product</th>
    							<th style="width:10%">Price</th>
    							<th style="width:8%">Quantity</th>
    							<th style="width:22%" class="text-center">Subtotal</th>
    							<th style="width:10%"></th>
    						</tr>
    					</thead>
    					<tbody>
    					@foreach($cartItems as $cartItem)
    						<tr>
    							<td data-th="Product">
    								<div class="row">
    									<div class="col-sm-2 hidden-xs"><img src="{{ url('public/backend/images/products').'/'.$cartItem->options['img'] }}" alt="..." class="img-responsive" style="width: 100px; height: 100px;"></div>
    									<div class="col-sm-10">
    										<h4 class="nomargin">{{$cartItem->name}}</h4>
    									</div>
    								</div>
    							</td>
    							<td data-th="Price">${{$cartItem->price}}</td>
    							<form action="{{route('cart.edit',$cartItem->rowId)}}" method="GET">
    							<td data-th="Quantity">
    								<input name="qty" type="number" class="form-control text-center" value="{{$cartItem->qty}}">
    								<input type="submit" class="btn btn-info btn-sm fa fa-refresh">
    							</td>
    							</form>
    							<td data-th="Subtotal" class="text-center">{{ '$'.number_format($cartItem->price*$cartItem->qty) }}</td>
    							<td class="actions" data-th="">
    								<a class="btn btn-danger btn-sm" href="{{route('cart.remove',$cartItem->rowId)}}"><i class="fa fa-trash-o"></i></a>
    							</td>

    						</tr>
    					@endforeach
    					</tbody>
    					<tfoot>
    						<tr>
    							<td><a href="{{ url()->previous() }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
    							<td colspan="2" class="hidden-xs"></td>
    							<td class="hidden-xs text-center"><strong>Total {{Cart::subtotal()}}</strong></td>
    							<td><a href="{{route('checkout')}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
    						</tr>
    					</tfoot>
    				</table>

    	@else
    	        <div>
                    <h3 class="alert alert-info" style="text-align: center"><strong>Bạn chưa đăng nhập <br>
                    Xin hãy ấn vào <a href="{{route('signin')}}" style="color: red;">ĐÂY</a> để đăng nhập<br>
                    Hoặc ấn vào <a href="{{route('signup')}}" style="color: red">ĐÂY</a> để đăng ký
                    </strong></h3>
                </div>
                @endif


@endsection