@extends('layouts.app')
@section('main')
<!-- Page Title Start -->
<section class="page-title title-bg23">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Contact Us</h2>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Contact Us</li>
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

<!-- Contact Section Start -->
<div class="contact-card-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-card">
                            <i class='bx bx-phone-call'></i>
                            <ul>
                                <li>
                                    <a href="tel:+145664474574">
                                        0505050000
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="tel:17459674567">
                                        +1-745-967-4567
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="contact-card">
                            <i class='bx bx-mail-send' ></i>
                            <ul>
                                <li>
                                    <a href="mailto:info@jovie.com">
                                        nsayboderbna@gmail.ma
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="mailto:hello@jovie.com">
                                        hello@jovie.com
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
                        <div class="contact-card">
                            <i class='bx bx-location-plus' ></i>
                            <ul>
                                <li>
                                    Rabat , hay Riad
                                </li>
                                {{-- <li>
                                    Street view 3/B, USA
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->
@endsection
