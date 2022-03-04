@extends('admin.includes.app') 

@section('content')
<div class="nk-content-body">
    <div class="card">
        <div class="card-header">
            <h5>Profile Information</h5>

        </div>
        <div class="card-body">
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

        @foreach ($errors->all() as $error)

                            <p class="text-danger">{{ $error }}</p>

                         @endforeach 


            <div class="card card-preview">
                <div class="card-inner">
                    <form action="{{ route('admin.account.update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> Name </label>
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                            @if($errors->has('name'))
                            <span class="text-danger ">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 float-left">

                            <label class="form-label"> Email </label> 
                            <input type="email" name="email" placeholder="Enter Trainer Email" class="form-control" value="{{ Auth::user()->email }}" disabled  required>

                            @if($errors->has('email'))
                            <span class="text-danger ">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    

                        



                        <div class="form-group col-md-12 float-left">
                            <label class="form-label">Image </label>
                            <img src="{{ asset('images/'.Auth::user()->profile_photo_path) }}" style="height: 120px; width: 120px"><br />
                            <div class="mt-1">
                                <input type="file" name="image" class="form-control">
                            </div>
                            @if($errors->has('image'))
                            <span class="text-danger ">{{ $errors->first('image') }}</span>
                            @endif
                        </div>


                        <div class="form-group col-md-12 float-left">
                            <input type="submit" name="btn" class="btn btn-primary col-6 btn-block" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 


<div class="nk-content-body">
    <div class="card">
        <div class="card-header">
            <h5>Password</h5>

        </div>
        <div class="card-body">

            <div class="card card-preview">
                <div class="card-inner">
                    <form action="{{ route('users.account.password') }}" method="post">
                        @csrf

                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> Current Password </label>
                            <input type="text" name="current_password" class="form-control">
                            @if($errors->has('current_password'))
                            <span class="text-danger ">{{ $errors->first('current_password') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> New Password </label>
                            <input type="text" name="new_password" class="form-control">
                            @if($errors->has('new_password'))
                            <span class="text-danger ">{{ $errors->first('new_password') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> Confirm Password </label>
                            <input type="text" name="confirm_password" class="form-control">
                            @if($errors->has('confirm_password'))
                            <span class="text-danger ">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>




                        <div class="form-group col-md-12 float-left">
                            <input type="submit" name="btn" class="btn btn-primary col-6 btn-block" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection