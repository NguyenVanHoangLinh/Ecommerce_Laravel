
@extends('front.extends.master')
@section('content')
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Recent Products</h1>
			<div class="content-top1">
				@include('front.extends.recentproducts')
			<div class="clearfix"> </div>
			</div>
			<h1>Hot Products</h1>
			<div class="content-top1">
				@include('front.extends.hotproducts')
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//content-->
@endsection