@extends('back.master')
@section('content-backend')
     <body>
        <div class="row">
    <section class="content-header">
                            	<h1>
                            		Chỉnh sửa tài khoản người dùng
                            		<small>Control panel</small>
                            	</h1>
                            	<ul class="breadcrumb">
                            		<li>
                            			<a href="{{route('backend')}}"><i class="fa fa-dashboard"></i> Home</a>
                            		</li>
                            		<li class="active"><a href="{{route('back.users.index')}}">Danh sách người dùng</a></li>
                            		<li class="active">Chỉnh sửa tài khoản người dùng</li>
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
            			<a href="{{ route('back.users.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-left"></i> Quay lại</a>
            		</div>
            		<div class="panel-body">
            			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('back.users.update', ['id' => $user->user_id])}}">

            				{{ csrf_field() }}
            				{{ method_field('PUT') }}
            				<div class="form-group {{ !empty($errors->first('user_fullname')) ? 'has-error' : ''}}">
                            					<label class="control-label col-md-2" for="fullname">Fullname:<small></small></label>
                            					<div class="col-md-4">
                            						<input type="text" class="form-control" name="user_fullname" id="user_fullname"  placeholder="Tên Đầy Đủ" value="{{ $user->user_fullname }}">
                            						<span class="error">{{ $errors->first('user_fullname') }}</span>
                            					</div>
                            				</div>
                            				<div class="form-group {{ !empty($errors->first('email')) ? 'has-error' : ''}}">
                            					<label class="control-label col-md-2" for="email">Email:</label>
                            					<div class="col-md-4">
                            						<input type="email" class="form-control" name="email" id="email"  placeholder="Nhập Email" value="{{ $user->email }}">
                            						<span class="error">{{ $errors->first('email') }}</span>
                            					</div>
                            				</div>
                            				<hr>
                            				<div class="form-group {{ !empty($errors->first('password')) ? 'has-error' : ''}}">
                                                                        					<label class="control-label col-md-2" for="email">password:</label>
                                                                        					<div class="col-md-4">
                                                                        						<input type="password" class="form-control" name="password" id="password"   value="{{ $user->password }}">
                                                                        						<span class="error">{{ $errors->first('password') }}</span>
                                                                        					</div>
                                                                        				</div>
                            				<div class="form-group {{ !empty($errors->first('sex')) ? 'has-error' : ''}}">
                            					<label class="control-label col-md-2" for="address">Giới tính:</label>
                            					<div class="col-md-4">
                            						<label>Nam&nbsp;<input type="radio" name="sex" value="nam" <?php if ($user->sex == 'nam'): ?>
                            							checked="checked"
                            						<?php endif?>></label>
                            						<label>Nữ&nbsp;<input type="radio" name="sex" value="nu" <?php if ($user->sex == 'nu'): ?>
                            							checked="checked"
                            						<?php endif?>></label>
                            						<span class="error">{{ $errors->first('sex') }}</span>
                            					</div>
                            				</div>
                            				<div class="form-group {{ !empty($errors->first('role_id')) ? 'has-error' : ''}}">

                            					<label class="control-label col-md-2" for="birthday">Quyền hạn:</label>
                            					<div class="col-md-4">
                            						<input type="number" class="form-control" id="role_id" name="role_id"  placeholder="Quyền Hạn"
                            						value="{{ $user->role_id }}">
                            						<span class="error">{{ $errors->first('role_id') }}</span>
                            					</div>

                            				</div>
                            				<div class="form-group {{ !empty($errors->first('user_status')) ? 'has-error' : ''}}">

                            					<label class="control-label col-md-2" for="birthday">Trạng thái:</label>
                            					<div class="col-md-4">
                            						<input type="number" class="form-control" id="user_status" name="user_status"  placeholder="Trạng thái hoạt động" value="{{ $user->user_status }}">
                            						<span class="error">{{ $errors->first('user_status') }}</span>
                            					</div>

                            				</div>
                            				<hr>
                            				<div class="form-group {{ !empty($errors->first('birthday')) ? 'has-error' : ''}}">

                            					<label class="control-label col-md-2" for="birthday">Ngày sinh:</label>
                            					<div class="col-md-4">
                            						<input type="date" class="form-control" id="birthday" name="birthday" placeholder="Birthday" value="{{ $user->birthday }}">
                            						<span class="error">{{ $errors->first('birthday') }}</span>
                            					</div>

                            				</div>
                            				<div class="form-group {{ !empty($errors->first('phone')) ? 'has-error' : ''}}">
                            					<label class="control-label col-md-2" for="phone">Số điện thoại:</label>
                            					<div class="col-md-4">
                            						<input type="text" class="form-control" id="phone" placeholder="Số điện thoại" name="phone" value="{{ $user->phone }}">
                            						<span class="error">{{ $errors->first('phone') }}</span>
                            					</div>
                            				</div>
                            				<div class="form-group {{ !empty($errors->first('address')) ? 'has-error' : ''}}">
                            					<label class="control-label col-md-2" for="address">Địa chỉ:</label>
                            					<div class="col-md-4">
                            						<textarea rows="4" class="form-control" id="address" name="address" >{{ $user->address }}</textarea>
                            						<span class="error">{{ $errors->first('address') }}</span>
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
       </section>
                  </div>
                  </div>
@endsection