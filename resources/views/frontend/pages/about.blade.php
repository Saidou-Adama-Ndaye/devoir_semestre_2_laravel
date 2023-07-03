@extends('frontend.layouts.master')

@section('frontend_title')
    About
@endsection

@section('frontend_content')
    @include('frontend.layouts.inc.breadcrumb', ['page_name' => 'A propos'])
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>En savoir plus <span>sur nous</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url({{ asset('assets/frontend') }}/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Réservez une table</h4>
              <p>+221 77-777-7777</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Bienvenue chez Hello Food, un restaurant qui propose une expérience culinaire exceptionnelle dans une ambiance chaleureuse et conviviale.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Une cuisine savoureuse préparée avec des ingrédients frais et de qualité.</li>
                <li><i class="bi bi-check2-all"></i> Un service attentif et amical pour rendre votre expérience inoubliable.</li>
                <li><i class="bi bi-check2-all"></i> Une atmosphère accueillante où vous pourrez savourer des plats délicieux en famille ou entre amis.</li>
              </ul>
              <p>
                Chez Hello Food, nous nous engageons à vous offrir des moments mémorables en alliant une cuisine raffinée à un service de qualité.
              </p>

              <div class="position-relative mt-4">
                <img src="{{ asset('assets/frontend') }}/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
</section><!-- Fin de la section "À propos" -->

<section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Pourquoi choisir Hello Food ?</h3>
              <p>
                Chez Hello Food, nous nous engageons à vous offrir une expérience culinaire exceptionnelle en combinant saveurs délicieuses, créativité et ambiance chaleureuse. Venez découvrir notre menu varié et laissez-vous séduire par notre cuisine authentique.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">En savoir plus <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- Fin du bloc "Pourquoi choisir Hello Food ?" -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Une cuisine savoureuse</h4>
                  <p>Nous préparons nos plats avec des ingrédients frais et de qualité pour vous offrir une expérience culinaire inoubliable.</p>
                </div>
              </div><!-- Fin du bloc "Une cuisine savoureuse" -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Un service attentionné</h4>
                  <p>Notre équipe dévouée est là pour vous offrir un service amical et attentif, afin que vous vous sentiez comme à la maison.</p>
                </div>
              </div><!-- Fin du bloc "Un service attentionné" -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Une ambiance conviviale</h4>
                  <p>Venez profiter d'une atmosphère chaleureuse et accueillante, parfaite pour partager un repas délicieux entre proches.</p>
                </div>
              </div><!-- Fin du bloc "Une ambiance conviviale" -->

            </div>
          </div>

        </div>

      </div>
</section><!-- Fin de la section "Pourquoi nous choisir" -->

    
@endsection