@extends('layouts.app')
@section('main')
     <!-- Sign In Section Start -->
     <div class="signin-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                    <form action="{{ route("login") }}" method="POST" class="signin-form">
                        @csrf
                        <div class="form-group">
                          <label> Email</label>
                          <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                        </div>

                        <div class="form-group">
                            <label> Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                        </div>

                        <div class="signin-btn text-center">
                            <button type="submit">Sign In</button>
                        </div>


                        <div class="create-btn text-center">
                            <p>Not have an account?
                                <a href="{{ route("register") }}">
                                    Create an account
                                    <i class='bx bx-chevrons-right bx-fade-right'></i>
                                </a>
                            </p>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
    <!-- Sign In Section End -->
@endsection