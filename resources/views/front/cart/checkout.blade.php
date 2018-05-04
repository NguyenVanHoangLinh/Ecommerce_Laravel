@extends('front.extends.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <form accept-charset="UTF-8" action="{{route('front.orders.store')}}" method="POST"><div style="margin:0;padding:0;display:inline"></div>
          {{ csrf_field() }}
          <input name="user_id" type="hidden" value="{{\Illuminate\Support\Facades\Auth::user()->user_id}}">
            <div class="form-row">
              <div class="col-xs-12 form-group required">
              @include('thongbao.error')
                <label class="control-label">Customer name</label>
                <input class="form-control" size="4" type="text" id="cus_fullname" name="cus_fullname">
              </div>
            </div>
            <div class="form-row">
              <div class="col-xs-12 form-group required">
                <label class="control-label">Customer address</label>
                <input class="form-control" size="4" type="text" id="cus_address" name="cus_address">
              </div>
            </div>
            <div class="form-row">
              <div class="col-xs-12 form-group required">
                <label class="control-label">Customer phone</label>
                <input class="form-control" size="4" type="text" id="cus_phone" name="cus_phone">
              </div>
            </div>
            <div class="form-row">
              <div class="col-xs-12 form-group required">
                <label class="control-label">Customer email</label>
                <input class="form-control" size="4" type="text" id="cus_email" name="cus_email">
              </div>
            </div>
            <div class="form-row">
              <div class="col-xs-12 form-group card required">
                <label class="control-label">Card Number</label>
                <input autocomplete="off" class="form-control card-number" size="20" type="text" id="pay_number" name="pay_number">
              </div>
            </div>
            <div class="form-row">
              <div class="col-xs-4 form-group cvc required">
                <label class="control-label">CVC</label>
                <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text" name="pay_cvc" id="pay_cvc">
              </div>
              <div class="col-xs-4 form-group expiration required">
                <label class="control-label">Expiration</label>
                <input class="form-control card-expiry-month" placeholder="MM" size="2" type="text" name="pay_mm" id="pay_mm">
              </div>
              <div class="col-xs-4 form-group expiration required">
                <label class="control-label">&nbsp;</label>
                <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text" name="pay_yyyy" id="pay_yyyy">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-control total btn btn-info">
                  Total:
                  <span class="amount">${{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}</span>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 form-group">
                <button class="form-control btn btn-primary submit-button" type="submit">Pay »</button>

              </div>
            </div>
          </form>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection