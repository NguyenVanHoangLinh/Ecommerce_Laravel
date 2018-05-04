@extends('back.master')
@section('content-backend')

     <body>
        <div class="row">

    <section class="content-header">
                            	<h1>
                            		Thêm ảnh cho sản phẩm
                            		<small>Control panel</small>
                            	</h1>
                            	<ul class="breadcrumb">
                            		<li>
                            			<a href="{{route('backend')}}"><i class="fa fa-dashboard"></i> Home</a>
                            		</li>
                            		<li class="active"><a href="{{route('back.products.index')}}">Danh sách sản phẩm</a></li>
                            		<li class="active">Thêm ảnh cho sản phẩm</li>
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
        		<div class="box-header">
                			<a href="{{ route('back.products.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left"></i> Quay lại</a>
                		</div>
                		<div class="panel-body">

                                    <form class="form-horizontal" action="{{ route('back.products.updateimg', ['id' => $product->pro_id])}}" method="POST" enctype="multipart/form-data">
                                                                  {{ csrf_field() }}
                                                     <div class="form-group {{ !empty($errors->first('product_img')) ? 'has-error' : ''}}">
                                                         <label class="control-label col-md-2" for="pro_img">Image:</label>
                                                         <div class="col-md-4">
                                                             <input type="file" name="product_img" id="product_img" accept="image/*">
                                                             <span class="error">{{ $errors->first('product_img') }}</span>
                                                         </div>
                                                     </div>
                                     			    <div class="form-group">
                                     			      <div class="col-md-10 col-md-offset-2">
                                     			        <button type="reset" class="btn btn-default">Cancel</button>
                                     			        <button type="submit" class="btn btn-primary">Submit</button>
                                     			      </div>
                                     			      @include('thongbao.error')
                                     			    </div>
                                     			</form>
                                     <h1><strong>Các ảnh của sản phẩm: </strong></h1><br>
                                     @foreach($all_imgs as $img)
                                        <img src="{!! url('public/backend/images/product_imgs/'.$img->product_img) !!}" data-imagezoom="true" class="img-responsive" style="width: 305px; height: 400px;">
                                     @endforeach
                		</div>

                	</div>
        </div>
            </section>
                      </div>

                      </body>
@endsection