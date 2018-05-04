@extends('back.master')
@section('content-backend')
        <body>
        <div class="row">
        <section class="content-header">
                            	<h1>
                            		ORDERS HISTORY
                            		<small>Control panel</small>
                            	</h1>
                            	<ul class="breadcrumb">
                            		<li>
                            			<a href="{{route('backend')}}"><i class="fa fa-dashboard"></i> Home</a>
                            		</li>
                            		<li class="active">Orders history</li>
                            	</ul>
                            </section>
                            <section class="content">
    <div class="box box-success">
    		<div class="box-header">
    			<h5 class="right">Số lượng: <strong class="label label-warning"><?php if (!empty($orders)) {
    	                echo count($orders);
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

                           @include('thongbao.error')
                <div class="container">
                     <!-- Trigger the modal with a button -->
    <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th>ID order</th>
                      <th>Tên đầy đủ của khách hàng</th>
                      <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
  						<th>Email</th>
  						<th>Mã thẻ tín dụng</th>
  						<th>Mã cvc</th>
  						<th>Tháng hết hạn của thẻ</th>
                      <th>Năm hết hạn của thẻ</th>
                      <th>Số tiền đơn hàng</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{  $order->order_id  }} </td>
                            <td>{{  $order->cus_fullname  }} </td>
                            <td>{{ $order->cus_address }}</td>
                            <td>{{ $order->cus_phone }}</td>
                            <td>{{ $order->cus_email }}</td>
                            <td>{{$order->pay_number}}</td>
                               <td>{{$order->pay_cvc}}</td>
                                <td>{{$order->pay_mm}}<br>
                                <td>{{$order->pay_yyyy}}</td>
                                <td>{{$order->total_price}}</td>
                                <td>
                                                            <a onclick="return ConfirmDelete()" id="destroy" href="{{route('back.orders.destroy', ['id' => $order->order_id]) }}" class="btn btn-danger btn-sm">
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