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
    <!-- Section À Propos Début -->
<section class="about-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <h2>Notre Mission : Simplifier le Signalement des Incidents</h2>
                    </div>

                    <p>Dans le monde d'aujourd'hui, où tout va vite, assurer un signalement rapide et efficace des incidents est crucial. Notre application fournit une plateforme intuitive permettant aux utilisateurs de signaler divers incidents facilement. Qu'il s'agisse de problèmes liés à l'infrastructure, à l'éclairage public, à l'environnement, à la sécurité, ou à d'autres catégories, notre objectif est de rationaliser le processus et d'assurer une résolution rapide.</p>

                    <p>Notre application web est conçue dans un souci de convivialité, garantissant que tout le monde puisse contribuer à une communauté plus sûre et mieux organisée. Depuis sa création, notre plateforme est dédiée à rendre le signalement des incidents accessible à tous, en tirant parti des dernières technologies web pour offrir une expérience fluide.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="assets/img/about.jpg" alt="image à propos">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section À Propos Fin -->
@endsection