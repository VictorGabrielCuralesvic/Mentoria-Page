@extends('layouts.app')

@section('title', 'Preços - Mentoria')

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
                <li class="current">Preços</li>
            </ol>
        </div>
    </nav>
</div> {{-- Page Title --}}

{{-- Pricing Section --}}
<section id="pricing" class="pricing section">
    <div class="container">
        <div class="row gy-3">
            <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-item">
                    <h3>Free</h3>
                    <h4><sup>$</sup>0<span> / mes</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
            </div> {{-- End Pricing Item --}}

            <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-item">
                    <h3>Premium</h3>
                    <h4><sup>$</sup>19<span> / mes</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
            </div> {{-- End Pricing Item --}}

            <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-item">
                    <h3>Deluxe</h3>
                    <h4><sup>$</sup>29<span> / mes</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
            </div> {{-- End Pricing Item --}}

            <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-item">
                    <h3>Ultimate</h3>
                    <h4><sup>$</sup>39<span> / mes</span></h4>
                    <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>
            </div> {{-- End Pricing Item --}}

        </div>
    </div>

</section> {{-- /Pricing Section --}}
    
@endsection