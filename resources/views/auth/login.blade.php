@extends('auth.layout.layout1')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center height-100 p-3">
            <div class="col-md-4 p-3">
                <img src="{{ asset('images/image.png') }}" class="img-fluid d-none d-lg-block">
            </div>
            <div class="col-md-4 p-3 border">
                <div class="h1 p-2">Login</div>
                <div class="p-2">Don't have an account? <a href="{{ route('auth.register') }}" class="text-decoration-none text-success">Create Here</a></div>
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
                        <div class="row">
                            <div class="col-6">
                                <label for="check1" class="form-check-label">
                                    <input type="checkbox" name="" class="form-check-input shadow-none" id="check1">
                                    Remember Me
                                </label>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('auth.forget') }}" class="text-decoration-none text-secondary">Forget Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <button type="submit" name="" class="btn btn-outline-secondary px-4 py-2 shadow-none">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
