@extends('layouts.app')
@section('main')
    <!-- Page Title Start -->
    <section class="page-title title-bg7">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Candidates</h2>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>Communes</li>
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

    <!-- Candidates Section Start -->
    <section class="candidate-style-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                
                

                @foreach ($communes as $item)
                <div class="col-lg-3 col-sm-6">
                    <div class="candidate-card">
                        <div class="candidate-img">
                            <img src="{{ asset("commune.jpg") }}" alt="candidate image">
                        </div>
                        <div class="candidate-text">
                            <h3>
                                <a href="candidate-details.html">{{ $item->name }}</a>
                            </h3>
                            <ul>
                                {{-- <li>
                                    Video Editor
                                </li> --}}
                            </ul>
                        </div>

                        <div class="candidate-social">
                            <a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                            <a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- Candidates Section End -->
@endsection