@extends('layouts.app')
@section('main')
!-- Page Title Start -->
<section class="page-title title-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>About Us</h2>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>About Us</li>
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
    <!-- About Section Start -->
    <section class="about-section ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>How We Started</h2>
                        </div>

                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/about.jpg" alt="about image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
@endsection