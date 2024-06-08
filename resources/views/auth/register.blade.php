@extends('layouts.app')
@section('main')
    <!-- Page Title Start -->
    <section class="page-title title-bg13">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Sign Up</h2>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>Sign Up</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>
    <!-- Page Title End -->
    <!-- Sign up Section Start -->
    <div class="signup-section ptb-100">
        <div class="container">
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                    <form action="/register" method="POST" class="signup-form">
                        @csrf
                        <div class="form-group">
                            <label> Username </label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Username" required>
                        </div>

                        <div class="form-group">
                            <label> Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Enter Your Email"
                                required>
                        </div>

                        <div class="form-group">
                            <label> Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Enter Your Password"
                                required>
                        </div>
                        <div class="form-group">
                            <label> Password</label>
                            <input name="password_confirmation" type="password" class="form-control"
                                placeholder="Enter Your Password" required>
                        </div>

                        <div class="signup-btn text-center">
                            <button type="submit">Sign Up</button>
                        </div>

                        <div class="create-btn text-center">
                            <p>
                                Have an Account?
                                <a href="{{ route('login') }}">
                                    Sign In
                                    <i class='bx bx-chevrons-right bx-fade-right'></i>
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->
@endsection
