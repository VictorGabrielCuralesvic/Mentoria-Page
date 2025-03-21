@extends('layouts.app')

@section('title', 'Eventos - Mentoria')

@section('content')
{{-- Page Title --}}
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Eventos</h1>
                    <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li class="current">Eventos</li>
            </ol>
        </div>
    </nav>
</div> {{-- End Page Title --}}

{{-- Events Section --}}
<section id="events" class="events section">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">\
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/events-item-1.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Introdução ao website</a></h5>
                        <p class="fst-italic text-center">Segunda, Dia 26 de Outubro as 19:00</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </div>
                </div>
            </div> {{-- End Event Card --}}

            
            <div class="col-md-6 d-flex align-items-stretch">
                <div  class="card">
                    <div class="card-img">
                        <img src="assets/img/events-item-2.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Estrategia de Marketing</a></h5>
                        <p class="fst-italic text-center">Segunda, 15 de Novembro as 19:00</p>
                        <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                    </div>
                </div>
            </div> {{-- End Event Card --}}
        </div> 

    </div>
</section>
{{-- Events Section End --}}

@endsection