@if(\Illuminate\Support\Facades\Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>{{\Illuminate\Support\Facades\Session::get('success')}}</strong>
    </div>
@elseif(\Illuminate\Support\Facades\Session::has('failauth'))
    <div class="alert btn-danger" role="alert">
            <strong>{{\Illuminate\Support\Facades\Session::get('failauth')}}</strong>
        </div>
 @elseif(\Illuminate\Support\Facades\Session::has('prosuccess'))
     <div class="alert btn-success" role="alert">
             <strong>{{\Illuminate\Support\Facades\Session::get('prosuccess')}}</strong>
         </div>
 @elseif(\Illuminate\Support\Facades\Session::has('failxoapro'))
      <div class="alert btn-danger" role="alert">
              <strong>{{\Illuminate\Support\Facades\Session::get('failxoapro')}}</strong>
          </div>
 @elseif(\Illuminate\Support\Facades\Session::has('xoapro'))
      <div class="alert btn-success" role="alert">
              <strong>{{\Illuminate\Support\Facades\Session::get('xoapro')}}</strong>
          </div>
 @elseif(\Illuminate\Support\Facades\Session::has('xoacat'))
 <div class="alert alert-success" role="alert">
             <strong>{{\Illuminate\Support\Facades\Session::get('xoacat')}}</strong>
         </div>
 @elseif(\Illuminate\Support\Facades\Session::has('failxoacat'))
  <div class="alert btn-danger" role="alert">
              <strong>{{\Illuminate\Support\Facades\Session::get('failxoacat')}}</strong>
          </div>
  @elseif(\Illuminate\Support\Facades\Session::has('prosuccess'))
   <div class="alert btn-success" role="alert">
               <strong>{{\Illuminate\Support\Facades\Session::get('prosuccess')}}</strong>
           </div>
  @elseif(\Illuminate\Support\Facades\Session::has('checkout'))
   <div class="alert btn-success" role="alert">
               <strong>{{\Illuminate\Support\Facades\Session::get('checkout')}}</strong>
           </div>
   @elseif(\Illuminate\Support\Facades\Session::has('proimgsuccess'))
      <div class="alert btn-success" role="alert">
                  <strong>{{\Illuminate\Support\Facades\Session::get('prosuccess')}}</strong>
              </div>
   @elseif(\Illuminate\Support\Facades\Session::has('updatepro'))
         <div class="alert btn-success" role="alert">
                     <strong>{{\Illuminate\Support\Facades\Session::get('updatepro')}}</strong>
                 </div>
   @elseif(\Illuminate\Support\Facades\Session::has('updatecat'))
         <div class="alert btn-success" role="alert">
                     <strong>{{\Illuminate\Support\Facades\Session::get('updatecat')}}</strong>
                 </div>
    @elseif(\Illuminate\Support\Facades\Session::has('usersuccess'))
          <div class="alert btn-success" role="alert">
                      <strong>{{\Illuminate\Support\Facades\Session::get('usersuccess')}}</strong>
                  </div>
     @elseif(\Illuminate\Support\Facades\Session::has('useredit'))
           <div class="alert btn-success" role="alert">
                       <strong>{{\Illuminate\Support\Facades\Session::get('useredit')}}</strong>
                   </div>
     @elseif(\Illuminate\Support\Facades\Session::has('xoauser'))
           <div class="alert btn-success" role="alert">
                       <strong>{{\Illuminate\Support\Facades\Session::get('xoauser')}}</strong>
                   </div>
     @elseif(\Illuminate\Support\Facades\Session::has('notsuper'))
                <div class="alert btn-danger" role="alert">
                            <strong>{{\Illuminate\Support\Facades\Session::get('notsuper')}}</strong>
                        </div>
      @elseif(\Illuminate\Support\Facades\Session::has('notadmin'))
                 <div class="alert btn-danger" role="alert">
                             <strong>{{\Illuminate\Support\Facades\Session::get('notadmin')}}</strong>
                         </div>
       @elseif(\Illuminate\Support\Facades\Session::has('noteditor'))
                  <div class="alert btn-danger" role="alert">
                              <strong>{{\Illuminate\Support\Facades\Session::get('noteditor')}}</strong>
                          </div>
       @elseif(\Illuminate\Support\Facades\Session::has('fail'))
                         <div class="alert btn-danger" role="alert">
                                     <strong>{{\Illuminate\Support\Facades\Session::get('fail')}}</strong>
                                 </div>
     @elseif(\Illuminate\Support\Facades\Session::has('xoaor'))
           <div class="alert btn-success" role="alert">
                       <strong>{{\Illuminate\Support\Facades\Session::get('xoaor')}}</strong>
                   </div>
@endif
