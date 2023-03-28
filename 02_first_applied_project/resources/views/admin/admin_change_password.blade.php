@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Change Password Page</h4><br><br>
            @if (count($errors))
              @foreach ($errors->all() as $error)
                <p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p>
              @endforeach
            @endif
            <form action="{{ route('update.password') }}" enctype="multipart/form-data" method="post">@csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="example-text-input" >Old Password</label>
                <div class="col-sm-10">
                  <input class="form-control" id="oldpassword" name="oldpassword" type="password">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="example-text-input">New Password</label>
                <div class="col-sm-10">
                  <input class="form-control" id="newpassword" name="newpassword" type="password">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="example-text-input">Confirm Password</label>
                <div class="col-sm-10">
                  <input class="form-control" id="confirm_password" name="confirm_password" type="password">
                </div>
              </div>
              <input class="btn btn-info waves-effect waves-light" type="submit" value="Change Password">
            </form>                   
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection 
