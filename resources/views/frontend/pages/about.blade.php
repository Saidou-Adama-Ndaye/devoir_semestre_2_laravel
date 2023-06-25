@extends('frontend.layouts.master')

@section('frontend_title')
À propos
@endsection

@section('frontend_content')
@include('frontend.layouts.inc.breadcrumb', ['page_name' => 'À propos'])

php
Copy code
<!-- À propos start -->
<div class="about-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content">
                    <h2>Notre histoire</h2>
                    Il était une fois, dans une petite ville animée, un restaurant unique en son genre. Ce restaurant, spécialisé dans les commandes en ligne, était connu pour offrir des plats délicieux et un service exceptionnel à ses clients.

                    L'histoire de ce restaurant a commencé avec un chef passionné, nommé Lucas. Lucas était un véritable artiste culinaire, toujours à la recherche de nouvelles saveurs et de combinaisons uniques. Il avait une vision claire de créer un endroit où les gens pourraient savourer des plats exceptionnels sans avoir à quitter le confort de leur foyer.
                    
                    Avec cette vision en tête, Lucas a rassemblé une équipe de cuisiniers talentueux et dévoués. Ensemble, ils ont créé un menu varié, comprenant des plats traditionnels revisités et des créations culinaires originales. Chaque plat était préparé avec amour et attention aux détails, utilisant uniquement les ingrédients les plus frais et de la plus haute qualité.                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('assets/frontend/images/res.jpg') }}" alt="À propos de notre restaurant">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- À propos end -->

<!-- Notre équipe start -->
<div class="team-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Notre équipe</h2>
                    <p>Rencontrez les personnes qui rendent notre restaurant exceptionnel</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <div class="team-img">
                        <img src="{{ asset('assets/frontend/images/2.webp') }}" alt="Membre de l'équipe">
                    </div>
                    <div class="team-content">
                        <h3>John Doe</h3>
                        <span>Chef cuisinier</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <div class="team-img">
                        <img src="{{ asset('assets/frontend/images/4.webp') }}" alt="Membre de l'équipe">
                    </div>
                    <div class="team-content">
                        <h3>Jane Smith</h3>
                        <span>Serveuse</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <div class="team-img">
                        <img src="{{ asset('assets/frontend/images/3.webp') }}" alt="Membre de l'équipe">
                    </div>
                    <div class="team-content">
                        <h3>David Johnson</h3>
                        <span>Maître d'hôtel</span>
                        <ul class="team-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Notre équipe end -->

<!-- Contactez-nous start -->
<div class="contact-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info">
                    <h2>Contactez-nous</h2>
                    <p>Pour toute question ou demande, n'hésitez pas à nous contacter.</p>
                    <ul class="contact-list">
                        <li><i class="fa fa-phone"></i>+1 123 456 7890</li>
                        <li><i class="fa fa-envelope"></i>info@example.com</li>
                        <li><i class="fa fa-map-marker"></i>123 Street, City, Country</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h2>Laissez-nous un message</h2>
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Votre adresse e-mail" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" rows="5" placeholder="Votre message" required></textarea>
                        </div>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contactez-nous end -->
@endsection