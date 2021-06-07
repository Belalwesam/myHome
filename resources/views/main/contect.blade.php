@extends('layouts.app')
@section('content')
     {{--start of hero section---}}
   <section class="top-hero-page" style="background-image: url('/images/hero-contact.webp'); background-position:right 20%;">
        <h2>Contact</h2>
    </section>
    {{--end of hero section--}}
    {{--start of get in touch section--}}
    <section id="get-in-section">
        <div class="get-in-text mb-5">
            <p>the best deals</p>
            <h1>Get in touch</h1>
        </div>
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="left-contact">
                        <div class="contact-logo">
                            <a href="/">my<span>home</span></a>
                        </div>
                        <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mid-contact">
                        <div class="single-contact justify-content-md-start justify-content-center">
                            <div class="img-wrapper">
                                <img src="{{ asset('/images/contact-2.svg') }}" alt="phone call" height="20">
                            </div>
                            <p>+546 990221 123</p>
                        </div>
                        <div class="single-contact justify-content-md-start justify-content-center">
                            <div class="img-wrapper">
                                <img src="{{ asset('/images/contact-1.svg') }}" alt="phone call" height="20">
                            </div>
                            <p>Main Str, no 23, New York</p>
                        </div>
                        <div class="single-contact justify-content-md-start justify-content-center">
                            <div class="img-wrapper">
                                <img src="{{ asset('/images/contact-3.svg') }}" alt="phone call" height="20">
                            </div>
                            <p>hosting@contact.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="right-contact">
                        <img src="{{asset('/images/touch.webp')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--end of get in touch section--}}
    {{--start of contact form section--}}
    <div class="contact-form">
        <form action="#" method="post">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 mb-2 mb-md-0">
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="col-12 col-md-4 mb-2 mb-md-0">
                        <input type="email" placeholder="Your email">
                    </div>
                    <div class="col-12 col-md-4 mb-2 mb-md-0">
                        <input type="text" placeholder="Subject">
                    </div>
                </div>
                <textarea class="mb-4 mt-0 mt-md-3" name="" id="" cols="30" rows="7" placeholder="Your message"></textarea>
            </div>
            <div class="text-center">
                <button type="submit">
                    Send e-mail
                </button>
            </div>
        </form>
    </div>
    {{--end of contact form section--}}
    <div class="loading-screen">
        <div class="spinner"></div>
    </div>
@endsection