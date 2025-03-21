@extends('layouts.app')

@section('title', 'Contato - Mentoria')
    
@section('content')
{{-- Page Title --}}
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Contato</h1>
                    <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li class="current">Contato</li>
            </ol>
        </div>
    </nav>
</div> {{-- Page Title --}}

{{-- Contact Section --}}
<section id="contact" class="contact section">
    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> {{-- Google Maps --}}

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Endereço</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div> {{-- End Info Item --}}

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Ligue Agora</h3>
                        <p>+00 0000 00000 00</p>
                    </div>
                </div> {{-- End Info Item --}}
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Entre em contato pelo Email</h3>
                  <p>info@example.com</p>
                </div>
              </div> {{-- End Info Item --}}

              <div class="col-lg-8">
                <form action="/app/forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Seu Nome" required="">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="Seu Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Assunto" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Sua Mensagem foi enviada! Obrigado!</div>
                            
                            <button type="submit">Enviar Mensagem</button>
                        </div>
                    </div>
                </form>
              </div> {{-- End Contact Form --}}
        </div>
    </div>

</section> {{-- /Contact Section --}}

@endsection