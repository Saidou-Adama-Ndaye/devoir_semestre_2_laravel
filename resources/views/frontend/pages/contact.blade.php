@extends('frontend.layouts.master')

@section('frontend_title')
À propos
@endsection

@section('frontend_content')
@include('frontend.layouts.inc.breadcrumb', ['page_name' => 'À propos'])

<div class="contact-body">
    <div class="contact-info">
        <div>
            <span><i class="fas fa-mobile-alt"></i></span>
            <span>Ligne fixe</span>
            <span class="text">+221 33-777-44-55</span>
        </div>
        <div>
            <span><i class="fas fa-envelope-open"></i></span>
            <span>E-mail</span>
            <span class="text">Resto@company.com</span>
        </div>
        <div>
            <span><i class="fas fa-map-marker-alt"></i></span>
            <span>Adresse</span>
            <span class="text">Jet d'eau, Dakar, Sénégal</span>
        </div>
        <div>
            <span><i class="fas fa-clock"></i></span>
            <span>Heures d'ouverture</span>
            <span class="text">Lundi - Vendredi (9:00 - 22:00)</span>
        </div>
    </div>

    <div class="contact-form">
        <form>
            <div>
                <input type="text" class="form-control" placeholder="Prenom" />
                <input type="text" class="form-control" placeholder="Nom" />
            </div>
            <div>
                <input type="email" class="form-control" placeholder="E-mail" />
                <input type="text" class="form-control" placeholder="Phone" />
            </div>
            <textarea rows="5" placeholder="Message" class="form-control"></textarea>
            <input type="submit" class="send-btn" value="Envoyer" />
        </form>

        <div>
            <img src="image/contact-png.png" alt="" />
        </div>
    </div>
</div>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3893.602299842512!2d-17.45807368516504!3d14.680280678616066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sJet%20d%27eau%20Dakar!5e0!3m2!1sen!2snp!4v1604921178092!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

@endsection