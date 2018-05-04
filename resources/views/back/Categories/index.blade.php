@extends('back.master')
@section('content-backend')

    <body>
    <div class="row">
    <section class="content-header">

                        	<h1>
                        		Danh mục
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
    			<h5 class="right">Số lượng: <strong class="label label-warning"><?php if (!empty($categories)) {
    	                echo count($categories);
                } else {
    	                echo '0';
                }
                    ?></strong></h5>
                    @include('thongbao.error')
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
                     <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Thêm danh mục</button>

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
                                    				<form class="form-horizontal" action="{{ route('back.categories.store') }}" method="POST" enctype="multipart/form-data">
                                                                 {{ csrf_field() }}
                                    			  	<div class="form-group {{ !empty($errors->first('cat_name')) ? 'has-error' : ''}}">
                                    			      <label for="cat_name" class="col-md-2 control-label">cat_name</label>

                                    			      <div class="col-md-10">
                                    			        <input type="text" class="form-control" name="cat_name" id="cat_name" >
                                    			      </div>
                                    			    </div>

                                    			    <div class="form-group {{ !empty($errors->first('cat_detail')) ? 'has-error' : ''}}">
                                    			      <label for="cat_detal" class="col-md-2 control-label">cat_detal</label>

                                    			      <div class="col-md-10">
                                    			        <textarea name="cat_detail" id="cat_detail" cols="50" rows="10"></textarea>
                                    			      </div>
                                    			    </div>

                                    			    <div class="form-group {{ !empty($errors->first('cat_img')) ? 'has-error' : ''}}">
                                    			      <label for="cat_img" class="col-md-2 control-label">cat_img</label>

                                    			      <div class="col-md-10">
                                    			        <input type="file" class="form-control" name="cat_img" id="cat_img">
                                    			        <span class="error">{{ $errors->first('cat_img') }}</span>
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
                      <th>ID danh mục</th>
                      <th>Tên danh mục</th>
                      <th>Chi tiết danh mục</th>
                      <th>Ảnh danh mục</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td><input type="checkbox" name="check[]" value="" class="check"></td>
                            <td>{{$category->cat_id}}</td>
                            <td>{{ $category->cat_name }}</td>
                            <td>{{ $category->cat_detail }}</td><td><img src="{!! url('public/backend/images/categories/'.$category->cat_img) !!}" class=" img-responsive" style="width: 55px; height:35px;"></td>
                            <td>{{ $category->parent_id }}</td>
                            						{{--<td>{!! !empty($category['created_at']) ? date('d-m-Y',strtotime($category['created_at'])) : '' !!}</td>--}}
                            						<td>
                            							<a href="{{route('back.categories.edit', ['id' => $category->cat_id]) }}" class="btn btn-success btn-sm" title="Chỉnh sửa người dùng">
                                                        		<span class="fa fa-edit"></span> Sửa
                                                        </a>
                            							<a onclick="return ConfirmDelete()" id="destroy" href="{{route('back.categories.destroy', ['id' => $category->cat_id]) }}" class="btn btn-danger btn-sm" title="Xóa người dùng">
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