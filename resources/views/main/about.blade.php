@extends('layouts.app')
@section('content')
   {{--start of hero section---}}
   <section class="top-hero-page" style="background-image: url('/images/hero.webp');">
        <h2>About Us</h2>
    </section>
    {{--end of hero section---}}
    {{--start of who we are  section---}}
   <section id="who-we-are-section">
       <div class="who-we-are">
           <div class="container">
               <div class="row">
                   <div class="col-12 col-md-6" data-aos="fade-right">
                       <div class="who-text">
                           <div class="top-text">
                                <p class="p-0 m-0">The Best Deals</p>
                                <h1>Who we are</h1>
                           </div>
                           <p class="p-0 m-0">Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
                          <div class="read-more-link">
                            <a href="#">Read More</a>
                          </div>
                       </div>
                   </div>
                   <div class="col-12 col-md-6" data-aos="fade-left">
                       <div class="who-img">
                           <img src="/images/whoweare.webp" alt="A pic of them" class="img-fluid rounded">
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   {{--end of who we are section---}}
   {{--start of services section --}}
   <section id="services-section">
       <div class="services-text text-center mb-4">
            <p class="p-0 m-0">The Best Deals</p>
            <h1>Services</h1>
       </div>
       <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-4" data-aos="flip-up">
                <div class="single-service">
                    <div class="service-title">
                        <img src="{{asset('/images/counsult.webp')}}" alt="consulting" class="img-fluid">
                        <h3 class="m-0">Consulting</h3>
                    </div>
                    <p class="m-0 p-0">
                        Nulla aliquet bibendum sem, non placer risus venenatis at. Prae sent vulputate bibendum dictum.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4" data-aos="flip-up">
                <div class="single-service">
                    <div class="service-title">
                        <img src="{{asset('/images/realestate.webp')}}" alt="consulting" class="img-fluid">
                        <h3 class="m-0">Real estate</h3>
                    </div>
                    <p class="m-0 p-0">
                        Nulla aliquet bibendum sem, non placer risus venenatis at. Prae sent vulputate bibendum dictum.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4" data-aos="flip-up">
                <div class="single-service">
                    <div class="service-title">
                        <img src="{{asset('/images/renting.webp')}}" alt="consulting" class="img-fluid">
                        <h3 class="m-0">Renting</h3>
                    </div>
                    <p class="m-0 p-0">
                        Nulla aliquet bibendum sem, non placer risus venenatis at. Prae sent vulputate bibendum dictum.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4" data-aos="flip-up">
                <div class="single-service">
                    <div class="service-title">
                        <img src="{{asset('/images/meditation.webp')}}" alt="consulting" class="img-fluid">
                        <h3 class="m-0">Meditation</h3>
                    </div>
                    <p class="m-0 p-0">
                        Nulla aliquet bibendum sem, non placer risus venenatis at. Prae sent vulputate bibendum dictum.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4" data-aos="flip-up">
                <div class="single-service">
                    <div class="service-title">
                        <img src="{{asset('/images/evaluation.webp')}}" alt="consulting" height="35">
                        <h3 class="m-0">Evaluation</h3>
                    </div>
                    <p class="m-0 p-0">
                        Nulla aliquet bibendum sem, non placer risus venenatis at. Prae sent vulputate bibendum dictum.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4" data-aos="flip-up">
                <div class="single-service">
                    <div class="service-title">
                        <img src="{{asset('/images/price.webp')}}" alt="consulting" class="img-fluid">
                        <h3 class="m-0">Price Consulting</h3>
                    </div>
                    <p class="m-0 p-0">
                        Nulla aliquet bibendum sem, non placer risus venenatis at. Prae sent vulputate bibendum dictum.
                    </p>
                </div>
            </div>
        </div>
    </div>
   </section>
   {{--end of services section --}}

   {{--start of milestones section--}}
   <section id="milestones-section">
       <div class="milestones">
           <div class="container text-center text-md-left">
               <div class="row">
                   <div class="col-12 col-md-3 mb-5 mb-md-0">
                       <div class="single-milestone">
                           <img src="{{asset('/images/mile-1.svg')}}" alt="mile-1" height="50">
                           <h1>425</h1>
                           <p>homes sold</p>
                       </div>
                   </div>
                   <div class="col-12 col-md-3 mb-5 mb-md-0">
                       <div class="single-milestone">
                           <img src="{{asset('/images/mile-2.svg')}}" alt="mile-1" height="50">
                           <h1>18</h1>
                           <p>awards</p>
                       </div>
                   </div>
                   <div class="col-12 col-md-3 mb-5 mb-md-0">
                       <div class="single-milestone">
                           <img src="{{asset('/images/mile-3.svg')}}" alt="mile-1" height="50">
                           <h1>25k</h1>
                           <p>followers</p>
                       </div>
                   </div>
                   <div class="col-12 col-md-3 mb-5 mb-md-0">
                       <div class="single-milestone">
                           <img src="{{asset('/images/mile-4.svg')}}" alt="mile-1" height="50">
                           <h1>1265</h1>
                           <p>rentals</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <section id="contact-bottom">
       <a href="#">contact now</a>
   </section>
   {{--end of milestones section--}}
   <div class="loading-screen">
    <div class="spinner"></div>
</div>
@endsection