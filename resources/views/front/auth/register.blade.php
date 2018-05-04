@extends('front.extends.master')
@section('content')
   <div class="container">
       <div class="row">
                   <div class="panel-body">
                       <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                           {{ csrf_field() }}

                           <div class="form-group{{ $errors->has('user_fullname') ? ' has-error' : '' }}">
                               <label for="name" class="col-md-4 control-label">Name</label>

                               <div class="col-md-6">
                                   <input id="user_fullname" type="text" class="form-control" name="user_fullname" value="{{ old('user_fullname') }}" required autofocus>

                                   @if ($errors->has('user_fullname'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('user_fullname') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>

                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                               <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                               <div class="col-md-6">
                                   <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                   @if ($errors->has('email'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('email') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>

                           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                               <label for="password" class="col-md-4 control-label">Password</label>

                               <div class="col-md-6">
                                   <input id="password" type="password" class="form-control" name="password" required>

                                   @if ($errors->has('password'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('password') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                               <div class="col-md-6">
                                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                               </div>
                           </div>
                            <div class="form-group">
                                   <label for="birthday" class="col-md-4 control-label">Birthday</label>
                                    <div class="col-md-6">
                                   <input id="birthday" type="date" class="form-control" name="birthday">
                                   </div>
                            </div>
                            <div class="form-group">
                                       <label for="address" class="col-md-4 control-label">address</label>
                                       <div class="col-md-6">
                                      <input id="address" type="text" class="form-control" name="address">
                                     </div>
                             </div>
                              <div class="form-group">
                                    <label for="sex" class="col-md-4 control-label">sex</label>
                                    <div class="col-md-6">
                                    <input name="sex" type="radio" value="nam" checked="checked" >  Male <br>
                                    <input name="sex" type="radio" value="nu">  Female
                                    </div>
                              </div>
                                    <div class="form-group">
                                               <label for="phone" class="col-md-4 control-label">phone</label>
                                               <div class="col-md-6">
                                              <input id="phone" type="text" class="form-control" name="phone">
                                             </div>
                                     </div>
                           <div class="form-group">
                               <div class="col-md-6 col-md-offset-4">
                                   <button type="submit" class="btn btn-primary">
                                       Register
                                   </button>
                               </div>
                           </div>
                       </form>
                   </div>
@endsection