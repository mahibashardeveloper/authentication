@extends('auth.layout.layout1')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center height-100 p-3">
            <div class="col-md-4 p-3 border">
                <div class="h1 p-2">Create New Account</div>
                <div class="p-2">Already have an account? <a href="{{ route('auth.login') }}" class="text-decoration-none text-success">Login</a></div>
                <form action="" method="post">
                    <div class="p-2">
                        <label class="form-label">Username or Email:</label>
                        <input type="text" name="" class="form-control p-2 shadow-none" required>
                    </div>
                    <div class="p-2">
                        <label class="form-label">Password:</label>
                        <input type="text" name="" class="form-control p-2 shadow-none" required>
                    </div>
                    <div class="p-2">
                        <label class="form-label">Confirm Password:</label>
                        <input type="text" name="" class="form-control p-2 shadow-none" required>
                    </div>
                    <div class="p-2">
                        <label for="check" class="form-check-label"> <input type="checkbox" name="" class="form-check-input shadow-none" id="check" required> I agree to the <a href="" class="text-decoration-underline text-primary">Terms And Conditions</a> </label>
                    </div>
                    <div class="p-2">
                        <button type="submit" name="" class="btn btn-outline-secondary px-4 py-2 shadow-none">
                            Register
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 p-3 d-none d-lg-block">
                <img src="{{ asset('images/image.png') }}" class="img-fluid">
            </div>
        </div>
    </div>

@endsection
