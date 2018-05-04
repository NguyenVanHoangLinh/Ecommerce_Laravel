@extends('back.master')
@section('content-backend')
     <body>
        <div class="row">
    <section class="content-header">
                            	<h1>
                            		Chỉnh sửa danh mục
                            		<small>Control panel</small>
                            	</h1>
                            	<ul class="breadcrumb">
                            		<li>
                            			<a href="{{route('backend')}}"><i class="fa fa-dashboard"></i> Home</a>
                            		</li>
                            		<li class="active"><a href="{{route('back.categories.index')}}">Danh sách danh mục</a></li>
                            		<li class="active">Chỉnh sửa danh mục</li>
                            	</ul>
                            </section>
                            <section class="content">
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
    			<a href="{{ route('back.categories.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left"></i> Quay lại</a>
    		</div>
    		<div class="panel-body">
    			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('back.categories.update', ['id' => $categories->cat_id]) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
    				<div class="form-group {{ !empty($errors->first('cat_name')) ? 'has-error' : ''}}">
    					<label class="control-label col-md-2" for="cat_name">Tên danh mục:<small></small></label>
    					<div class="col-md-4">
    						<input type="text" class="form-control" name="cat_name" id="cat_name" value="{!! $categories->cat_name !!}" placeholder="Nhập tên danh mục">
    						<span class="error">{{ $errors->first('cat_name') }}</span>
    					</div>
    				</div>
    				<div class="form-group {{ !empty($errors->first('cat_img')) ? 'has-error' : ''}}">
    					<label class="control-label col-md-2" for="image">Image:</label>
    					<div class="col-md-4">
    						<input type="file"  name="cat_img" id="cat_img">
    						<img src="{!! url('public/backend/images/categories/'.$categories->cat_img) !!}" class=" img-responsive" style="width: 55px; height:35px;">
    						<span class="error">{{ $errors->first('cat_img') }}</span>
    					</div>
    				</div>
    				<div class="form-group {{ !empty($errors->first('cat_detail')) ? 'has-error' : ''}}">
    					<label class="control-label col-md-2" for="detail">Chi tiết:</label>
    					<div class="col-md-4">
    						<textarea rows="4" cols="50" name="cat_detail" id="cat_detail" >{!! $categories->cat_detail !!}</textarea>
    						<span class="error">{{ $errors->first('cat_detail') }}</span>
    					</div>
    				</div>

    				<div class="form-group">
    					<div class="col-md-offset-2 col-md-4">
    						<input type="submit" class="btn btn-warning btn-sm" value="Thay đổi">
    						<input type="reset" name="reset" value="Nhập lại" class="btn btn-default btn-sm">
    					</div>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
    </section>
              </div>
              </div>
@endsection