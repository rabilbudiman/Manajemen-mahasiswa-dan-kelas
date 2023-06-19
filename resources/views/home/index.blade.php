@extends('layouts.app-master')

@section('content')

<div class="content d-flex justify-content-center align-items-center">
   <div class="login-form animated flipInY">
      <div class="card border-0 shadow mb-0">
         <div class="card-body">
            <div class="text-center mb-3">               
               <h4 class="d-block text-muted">MASUK</h4>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-right">
               <input type="text" class="form-control" placeholder="NPM" id="tnpm">
               <div class="form-control-feedback">
                  <i class="icon-user text-muted"></i>
               </div>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-right">
               <input type="password" class="form-control" placeholder="Password" id="tpwd">
               <div class="form-control-feedback mr-15" id="pwd_toggle">
                  <i class="icon-eye2 text-muted" id="ishowtoggle"></i>
               </div>
            </div>            
                 
            <div class="text-center">
                <a href="{{ route('login.perform') }}" class="btn btn-light me-2">Login</a>
                <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>

            </div>
         </div>
      </div>
   </div>
</div>
@endsection