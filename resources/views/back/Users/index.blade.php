@extends('back.master')
@section('content-backend')
    @include('thongbao.error')
        <body>
        <div class="row">
        <section class="content-header">
                            	<h1>
                            		Tài khoản người dùng
                            		<small>Control panel</small>
                            	</h1>
                            	<ul class="breadcrumb">
                            		<li>
                            			<a href="{{route('backend')}}"><i class="fa fa-dashboard"></i> Home</a>
                            		</li>
                            		<li class="active">Danh sách người dùng</li>
                            	</ul>
                            </section>
                            <section class="content">
    <div class="box box-success">
    		<div class="box-header">
    			<h5 class="right">Số lượng: <strong class="label label-warning"><?php if (!empty($users)) {
    	                echo count($users);
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
                     <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Thêm người dùng</button>

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
                                    				<form class="form-horizontal" action="{{ route('back.users.store') }}" method="POST" enctype="multipart/form-data">
                                                                 {{ csrf_field() }}
                                                    <div class="form-group {{ !empty($errors->first('user_fullname')) ? 'has-error' : ''}}">
                                                        <label class="control-label col-md-2" for="fullname">Fullname:<small></small></label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" name="user_fullname" id="user_fullname"  placeholder="Tên Đầy Đủ">
                                                            <span class="error">{{ $errors->first('user_fullname') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group {{ !empty($errors->first('email')) ? 'has-error' : ''}}">
                                                        <label class="control-label col-md-2" for="email">Email:</label>
                                                        <div class="col-md-4">
                                                            <input type="email" class="form-control" name="email" id="email"  placeholder="Nhập Email">
                                                            <span class="error">{{ $errors->first('email') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group {{ !empty($errors->first('password')) ? 'has-error' : ''}}">
                                                                            					<label class="control-label col-md-2" for="email">password:</label>
                                                                            					<div class="col-md-4">
                                                                            						<input type="password" class="form-control" name="password" id="password"">
                                                                            						<span class="error">{{ $errors->first('password') }}</span>
                                                                            					</div>
                                                     </div>
                                                    <hr>
                                                    <hr>
                                                    <div class="form-group {{ !empty($errors->first('sex')) ? 'has-error' : ''}}">
                                                        <label class="control-label col-md-2" for="address">Giới tính:</label>
                                                        <div class="col-md-4">
                                                            <label>Nam&nbsp;<input type="radio" name="sex" value="nam"></label>
                                                            <label>Nữ&nbsp;<input type="radio" name="sex" value="nữ"></label>
                                                            <span class="error">{{ $errors->first('sex') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group {{ !empty($errors->first('role_id')) ? 'has-error' : ''}}">

                                                        <label class="control-label col-md-2" for="birthday">Quyền hạn:</label>
                                                        <div class="col-md-4">
                                                            <input type="number" class="form-control" id="role_id" name="role_id"  placeholder="Quyền Hạn">
                                                            <span class="error">{{ $errors->first('role_id') }}</span>
                                                        </div>

                                                    </div>
                                                    <div class="form-group {{ !empty($errors->first('user_status')) ? 'has-error' : ''}}">

                                                        <label class="control-label col-md-2" for="user_status">Trạng thái:</label>
                                                        <div class="col-md-4">
                                                            <input type="number" class="form-control" id="user_status" name="user_status"  placeholder="Trạng thái hoạt động">
                                                            <span class="error">{{ $errors->first('user_status') }}</span>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="form-group {{ !empty($errors->first('birthday')) ? 'has-error' : ''}}">

                                                        <label class="control-label col-md-2" for="birthday">Ngày sinh:</label>
                                                        <div class="col-md-4">
                                                            <input type="date" class="form-control" id="birthday" name="birthday" >
                                                            <span class="error">{{ $errors->first('birthday') }}</span>
                                                        </div>

                                                    </div>
                                                    <div class="form-group {{ !empty($errors->first('phone')) ? 'has-error' : ''}}">
                                                        <label class="control-label col-md-2" for="phone">Số điện thoại:</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="phone" placeholder="Số điện thoại" name="phone" >
                                                            <span class="error">{{ $errors->first('phone') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group {{ !empty($errors->first('address')) ? 'has-error' : ''}}">
                                                        <label class="control-label col-md-2" for="address">Địa chỉ:</label>
                                                        <div class="col-md-4">
                                                            <textarea rows="2" class="form-control" id="address" name="address" ></textarea>
                                                            <span class="error">{{ $errors->first('address') }}</span>
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
                        <th>ID người dùng</th>
 						<th>Họ và tên</th>
 						<th>Email</th>
 						<th>Quyền</th>
 						<th>Ngày sinh</th>
 						<th>Giới tính</th>
 						<th>Địa chỉ</th>
 						<th>Số điện thoại</th>
 						<th>Trạng thái người dùng</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td><input type="checkbox" name="check[]" value="" class="check"></td>
                            <td>{{  $user->user_id  }} </td>
                            <td>{{ $user->user_fullname }}</td>
                            <td>{{ $user->email }}</td>
                                <?php if ($user->role_id == 4): ?>
                                   <td>Khách hàng</td>
                               <?php endif?>
                                <?php if ($user->role_id == 3): ?>
                                   <td>Editor</td>
                               <?php endif?>
                                <?php if ($user->role_id == 2): ?>
                                   <td>Admin</td>
                               <?php endif?>
                               <?php if ($user->role_id == 1): ?>
                                   <td>Super admin</td>
                               <?php endif?>
                            <td>{{ !empty($user->birthday) ? date('d-m-Y',strtotime($user->birthday)) : '' }}</td>
                            <td>{{  $user->sex  }} </td>
                            <td>{{  $user->address  }} </td>
                            <td>{{  $user->phone  }} </td>
                            <?php if ($user->user_status == 1): ?>
                                 <td>Active</td>
                             <?php endif?>
                               <?php if ($user->user_status == 0): ?>
                                 <td>Not Active</td>
                             <?php endif?>
                                <td>
                                       <a href="{{route('back.users.edit', ['id' => $user->user_id]) }}" class="btn btn-success btn-sm" title="Chỉnh sửa người dùng">
                                               <span class="fa fa-edit"></span> Sửa
                                        </a>
                                        <a onclick="return ConfirmDelete()" id="destroy" href="{{route('back.users.destroy', ['id' => $user->user_id]) }}" class="btn btn-danger btn-sm" title="Xóa người dùng">
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