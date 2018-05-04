@extends('back.master')
@section('content-backend')
<body>

                <div class="row">
                    <!-- /.col-lg-12 -->
                    <section class="content-header">
                    	<h1>
                    		Trang quản trị
                    		<small>Control panel</small>
                    	</h1>
                    	<ul class="breadcrumb">
                    		<li>
                    			<a href=""><i class="fa fa-dashboard"></i> Home</a>
                    		</li>
                    		<li class="active">Trang quản trị</li>
                    	</ul>
                    </section>
                    <section class="content">
                    <h3>Chào mừng @if(\Illuminate\Support\Facades\Auth::user()->role_id ==1)
                                <strong>Super Admin</strong> {{\Illuminate\Support\Facades\Auth::user()->user_fullname}}
                                @elseif(\Illuminate\Support\Facades\Auth::user()->role_id ==2)
                                <strong>Admin</strong> {{\Illuminate\Support\Facades\Auth::user()->user_fullname}}
                                @elseif(\Illuminate\Support\Facades\Auth::user()->role_id ==3)
                                <strong>Editor</strong> {{\Illuminate\Support\Facades\Auth::user()->user_fullname}}
                                @endif
                                </h3>
                    </section>
                    @include('thongbao.error')
                </div>
            <!-- /#page-wrapper -->


</body>
@endsection