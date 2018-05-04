@extends('back.master')
@section('content-backend')
     <body>
        <div class="row">
    <section class="content-header">
                            	<h1>
                            		Chỉnh sửa sản phẩm
                            		<small>Control panel</small>
                            	</h1>
                            	<ul class="breadcrumb">
                            		<li>
                            			<a href="{{route('backend')}}"><i class="fa fa-dashboard"></i> Home</a>
                            		</li>
                            		<li class="active"><a href="{{route('back.products.index')}}">Danh sách sản phẩm</a></li>
                            		<li class="active">Chỉnh sửa danh mục</li>
                            	</ul>
                            </section>
                            <section class="content">
    <div class="content">
    	<style type="text/css">
    		th{
    			width:20%;
    		}
    		textarea{
    			max-width:330px;
    			max-height:120px;
    		}
    		.right{
    			float:right;
    		}
    	</style>

    	<div class="box box-default">
    	@include('thongbao.error')
    		<div class="box-header">
            			<a href="{{ route('back.products.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left"></i> Quay lại</a>
            		</div>
            		<div class="panel-body">
            			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('back.products.update', ['id' => $product->pro_id])}}">

            				{{ csrf_field() }}
            				{{ method_field('PUT') }}
            				<input type="hidden" name="id"  value="{{ $product->pro_id }}">
            				<div class="form-group {{ !empty($errors->first('pro_title')) ? 'has-error' : ''}}">
            					<label class="control-label col-md-2" for="pro_title">Tên sản phẩm:<small></small></label>
            					<div class="col-md-4">
            						<input type="text" class="form-control" name="pro_title" id="pro_title"  placeholder="Nhập tên sản phẩm" value="{{ $product->pro_title }}">
            						<span class="error">{{ $errors->first('pro_title') }}</span>
            					</div>
            				</div>
            				<div class="form-group {{ !empty($errors->first('cat_id')) ? 'has-error' : ''}}">
            					<label class="control-label col-md-2" for="cat_id">&nbsp;&nbsp;&nbsp;Danh mục:</label>
            					&nbsp;&nbsp;&nbsp;&nbsp;<select name="cat_id" id="cat_id">
            							@foreach($categories as $category)
            								<option value="{{ $category['cat_id'] }}" <?php if ($product->cat_id == $category['cat_id']): ?>
            									selected="selected"
            								<?php endif?>>{{ $category['cat_name'] }}</option>
            							@endforeach
            					</select>
            				</div>
            				<div class="form-group {{ !empty($errors->first('pro_descript')) ? 'has-error' : ''}}">

            					<label class="control-label col-md-2" for="pro_descript">Description:</label>
            					<div class="col-md-4">
            						<textarea rows="4" cols="50" name="pro_descript" id="pro_descript" placeholder="Your enter here...">{{ $product->pro_descript }}</textarea>
            						<span class="error">{{ $errors->first('pro_descript') }}</span>
            					</div>

            				</div>
            				<div class="form-group {{ !empty($errors->first('pro_detail')) ? 'has-error' : ''}}">
            					<label class="control-label col-md-2" for="pro_detail">Chi tiết:</label>
            					<div class="col-md-4">
            						<textarea rows="4" cols="50" name="pro_detail" id="pro_detail" placeholder="Your enter here...">{{ $product->pro_detail }}</textarea>
            						<span class="error">{{ $errors->first('pro_detail') }}</span>
            					</div>
            				</div>
            				<div class="form-group {{ !empty($errors->first('pro_img')) ? 'has-error' : ''}}">
            					<label class="control-label col-md-2" for="pro_img">Image:</label>
            					<div class="col-md-4">
            						<input type="file" name="pro_img" id="pro_img" accept="image/*">
            						<span class="error">{{ $errors->first('pro_img') }}</span>
            					</div>
            				</div>
            				<div class="form-group {{ !empty($errors->first('quantity')) ? 'has-error' : ''}}">

            					<label class="control-label col-md-2" for="quantity">Số lượng:</label>
            					<div class="col-md-4">
            						<input type="text" name="quantity" id="quantity" value="{{ $product->quantity }}">
            						<span class="error">{{ $errors->first('quantity') }}</span>
            					</div>

            				</div>
            				<div class="form-group {{ !empty($errors->first('pro_price')) ? 'has-error' : ''}}">

            					<label class="control-label col-md-2" for="pro_price">Giá:</label>
            					<div class="col-md-4">
            						<input type="text" name="pro_price" id="pro_price" value="{{ $product->pro_price }}">
            						<span class="error">{{ $errors->first('pro_price') }}</span>
            					</div>

            				</div>
            				<div class="form-group {{ !empty($errors->first('pro_status')) ? 'has-error' : ''}}">
            					<label class="control-label col-md-2" for="address">Trạng thái:</label>
            					<div class="col-md-4">
            						<label>Còn hàng&nbsp;&nbsp;<input type="radio" name="pro_status" value="0" <?php if ($product->pro_status == 0): ?> checked="checked" <?php endif?> ></label>
            						<label>Hết hàng&nbsp;&nbsp;<input type="radio" name="pro_status" value="1" <?php if ($product->pro_status == 1): ?> checked="checked" <?php endif?> ></label>
            						<span class="error">{{ $errors->first('pro_status') }}</span>
            					</div>
            				</div>

            				<div class="form-group">
            					<div class="col-md-offset-2 col-md-4">
            						<input type="submit" name="dangki" class="btn btn-warning btn-sm" value="Thay đổi">
            						<input type="reset" name="reset" value="Nhập lại" class="btn btn-default btn-sm">
            					</div>
            				</div>
            			</form>
            		</div>
            	</div>
    </div>
@endsection