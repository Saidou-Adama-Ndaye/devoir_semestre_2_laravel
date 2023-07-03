@extends('frontend.layouts.master')

@section('frontend_title')
    Contact
@endsection

@section('frontend_content')
    @include('frontend.layouts.inc.breadcrumb', ['page_name' => 'Contact Us'])
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          
          <p>Besoin d'aide? <span>Contacter Nous</span></p>
        </div>

        <div class="mb-3">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13233.808874659677!2d-17.461276502306216!3d14.689642879730826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172f52455db2b%3A0x5185b7c58792f17e!2sInstitut%20Sup%C3%A9rieur%20Informatique!5e0!3m2!1sfr!2sus!4v1688390155727!5m2!1sfr!2sus" frameborder="0" allowfullscreen></iframe>
        </div><!-- Fin de Google Maps -->
        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Notre Adresse</h3>
                <p>Senegal, Dakar, Km1 Avenue Cheikh Anta Diop </p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>groue5@groupeisi.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Nous Joindre</h3>
                <p>+221 77-777-7777</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Horaires</h3>
                <div><strong>Lundi-Samedi:</strong> 00AM - 23PM;
                  <strong>Dimanche:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Envoyer Message</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

    
@endsection