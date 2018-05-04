@extends('back.master')
@section('content-backend')
    @include('thongbao.error')
        <body>
        <div class="row">
        <section class="content-header">
                            	<h1>
                            		Sản phẩm
                            		<small>Control panel</small>
                            	</h1>
                            	<ul class="breadcrumb">
                            		<li>
                            			<a href="{{route('backend')}}"><i class="fa fa-dashboard"></i> Home</a>
                            		</li>
                            		<li class="active">Trang quản trị</li>
                            	</ul>
                            </section>
                            <section class="content">
    <div class="box box-success">
    		<div class="box-header">
    			<h5 class="right">Số lượng: <strong class="label label-warning"><?php if (!empty($products)) {
    	                echo count($products);
                } else {
    	                echo '0';
                }
                    ?></strong></h5>
                    @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                <div class="container">
                     <!-- Trigger the modal with a button -->
                     <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Thêm sản phẩm</button>

                     <!-- Modal -->
                     <div class="modal fade" id="myModal" role="dialog">
                       <div class="modal-dialog">

                         <!-- Modal content-->
                         <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title">Modal Header</h4>
                           </div>
                           <div class="modal-body">
                                    				<form class="form-horizontal" action="{{ route('back.products.store') }}" method="POST" enctype="multipart/form-data">
                                                                 {{ csrf_field() }}
                                    			  	<div class="form-group {{ !empty($errors->first('pro_title')) ? 'has-error' : ''}}">
                                    			      <label for="pro_title" class="col-md-2 control-label">pro_title</label>

                                    			      <div class="col-md-10">
                                    			        <input type="text" class="form-control" name="pro_title" id="pro_title">
                                    			      </div>
                                    			    </div>
                                                    <div class="form-group {{ !empty($errors->first('cat_id')) ? 'has-error' : ''}}">
                                                    					<label class="control-label col-md-2" for="cat_id">&nbsp;&nbsp;&nbsp;Danh mục:</label>
                                                    					&nbsp;&nbsp;&nbsp;&nbsp;
                                                    					<select name="cat_id" id="cat_id">
                                                    								<option>===SELECT===</option>}
                                                    								option
                                                    							@foreach($categories as $category)
                                                    								<option value="{{ $category['cat_id'] }}">{{ $category['cat_name'] }}</option>
                                                    							@endforeach
                                                    					</select>
                                                    </div>
                                                    <div class="form-group {{ !empty($errors->first('pro_descript')) ? 'has-error' : ''}}">

                                                        <label class="control-label col-md-2" for="pro_descript">Description:</label>
                                                        <div class="col-md-4">
                                                            <textarea rows="4" cols="50" name="pro_descript" id="pro_descript" placeholder="Your enter here..."></textarea>
                                                            <span class="error">{{ $errors->first('pro_descript') }}</span>
                                                        </div>

                                                    </div>
                                                    <div class="form-group {{ !empty($errors->first('pro_detail')) ? 'has-error' : ''}}">
                                                        <label class="control-label col-md-2" for="pro_detail">Chi tiết:</label>
                                                        <div class="col-md-4">
                                                            <textarea rows="4" cols="50" name="pro_detail" id="pro_detail" placeholder="Your enter here..."></textarea>
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
                                                            <input type="text" name="quantity" id="quantity">
                                                            <span class="error">{{ $errors->first('quantity') }}</span>
                                                        </div>

                                                    </div>
                                                    <div class="form-group {{ !empty($errors->first('pro_price')) ? 'has-error' : ''}}">

                                                        <label class="control-label col-md-2" for="pro_price">Giá:</label>
                                                        <div class="col-md-4">
                                                            <input type="text" name="pro_price" id="pro_price">
                                                            <span class="error">{{ $errors->first('pro_price') }}</span>
                                                        </div>

                                                    </div>
                                                    <div class="form-group {{ !empty($errors->first('pro_status')) ? 'has-error' : ''}}">
                                                        <label class="control-label col-md-2" for="address">Trạng thái:</label>
                                                        <div class="col-md-4">
                                                            <label>Còn hàng&nbsp;&nbsp;<input type="radio" name="pro_status" value="0"></label>
                                                            <label>Hết hàng&nbsp;&nbsp;<input type="radio" name="pro_status" value="1"></label>
                                                            <span class="error">{{ $errors->first('pro_status') }}</span>
                                                        </div>
                                                    </div>
                                    			    <div class="form-group">
                                    			      <div class="col-md-10 col-md-offset-2">
                                    			        <button type="reset" class="btn btn-default">Cancel</button>
                                    			        <button type="submit" class="btn btn-primary">Submit</button>
                                    			      </div>
                                    			    </div>
                                    			</form>
                                    	</div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           </div>


                       </div>
                     </div>

                   </div>
    <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                       <th></th>
                      <th>ID sản phẩm</th>
                      <th>Tên sản phẩm</th>
                      <th>Chi tiết</th>
                        <th>Danh Mục</th>
  						<th>Số lượng</th>
  						<th>Giá</th>
  						<th>Trạng thái</th>
  						<th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td><input type="checkbox" name="check[]" value="" class="check"></td>
                            <td>{{  $product->pro_id  }} </td>
                            <td>{{  $product->pro_title  }} </td>
                            <td>{{ $product->pro_descript }}</td>
                                        @foreach($categories as $category)
            								<?php if ($product->cat_id == $category['cat_id']): ?>
            									<td>{{ $category['cat_name'] }}</td>
            								<?php endif?>>
            							@endforeach
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->pro_price }}</td>
                            <?php if ($product->pro_status == 0): ?>
                                <td>Còn hàng</td>
                            <?php endif?>
                            <?php if ($product->pro_status == 1): ?>
                                <td>Hết hàng</td>
                            <?php endif?>
                                <td><img src="{!! url('public/backend/images/products/'.$product->pro_img) !!}" class=" img-responsive" style="width: 55px; height:35px;"><br>
                                <a class="btn btn-primary btn-sm"  href="{{route('back.products.imgview', ['id' => $product->pro_id]) }}">Thêm ảnh sản phẩm</a></td>
                                <td>
                                                            <a href="{{route('back.products.edit', ['id' => $product->pro_id]) }}" class="btn btn-success btn-sm" title="Chỉnh sửa người dùng">
                                                                    <span class="fa fa-edit"></span> Sửa
                                                            </a>
                                                            <a onclick="return ConfirmDelete()" id="destroy" href="{{route('back.products.destroy', ['id' => $product->pro_id]) }}" class="btn btn-danger btn-sm" title="Xóa người dùng">
                                                                <span class="fa fa-remove"></span> Xóa
                                                            </a>
                                 </td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
              <script type="text/javascript">
              		function ConfirmDelete()
                                          {
                                          var x = confirm("Bạn có muốn xóa không?");
                                          if (x)
                                            return true;
                                          else
                                            return false;
                                          }
              	</script>
                </section>
              </div>
              </div>
@endsection