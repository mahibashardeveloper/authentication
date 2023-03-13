@extends('auth.layout.layout1')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center height-100">
            <div class="col-md-4 p-3">
                <img src="{{ asset('images/image.png') }}" class="img-fluid">
            </div>
            <div class="col-md-4 p-3 border">
                <form action="" method="post">
                    <div class="p-2">
                        <label class="form-label">Username or Email:</label>
                        <input type="text" name="" class="form-control p-2 rounded-0 shadow-none" required>
                    </div>
                    <div class="p-2">
                        <label class="form-label">OTP:</label>
                        <input type="text" name="" class="form-control p-2 rounded-0 shadow-none" required>
                    </div>
                    <div class="p-2">
                        <label class="form-label">New Password:</label>
                        <input type="text" name="" class="form-control p-2 rounded-0 shadow-none" required>
                    </div>
                    <div class="p-2">
                        <label class="form-label">Confirm Password:</label>
                        <input type="text" name="" class="form-control p-2 rounded-0 shadow-none" required>
                    </div>
                    <div class="p-2">
                        <button type="submit" name="" class="w-100 btn btn-outline-dark rounded-0 shadow-none">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
