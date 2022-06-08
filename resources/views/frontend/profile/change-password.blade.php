@extends('frontend.main-master')
@section('content');
<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><br>
                <img src="{{ !empty($user->profile_photo_path) ? url('upload/user-images/'.$user->profile_photo_path) 
                        : url('upload/no-image.jpg') }}" alt="" style="border-radius: 50%" class="card-img-top"
                    height="100%" width="100%"><br><br>
                <ul class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{ route('user.change.password') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                </ul>
            </div>

            <div class="col-md-2">

            </div>

            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-danger">Change Password</span>
                        <strong></strong>
                    </h3>
                    <div class="card-body">
                        <form action="{{ route('user.update.password') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Current Password <span> </span></label>
                                <input id="current_password" type="password" name="oldpassword"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">New Password <span> </span></label>
                                <input id="password" type="password" name="password"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Confirmation Password <span> </span></label>
                                <input id="password_confirmation" type="password" name="password_confirmation"
                                    class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
