@extends('layouts.app')
@section('content')
       {{--Hero Section Start--}}
       <section data-aos="fade-right" id="hero-section" class=" d-flex align-items-end" style="background-image: url('/images/hero.webp')">
            <div class="container">
                <div class="hero-text">
                    <h1>Find Your Home</h1>
                    <form action="{{ route('listings.search') }}" method="post">
                        @csrf
                        <div class="form-wrapper">
                            <input type="text" placeholder="Type" name="property_search_type">
                            <input type="text" placeholder="Location" name="property_search_location">
                            <input type="text" placeholder="# of Rooms" name="property_search_rooms">
                            <input type="submit" value="Search" name="property_">
                        </div>
                    </form>
                </div>
            </div>
        </section>
       {{--Hero Section End--}}

       {{--Featured Section Start--}}
       <section id="featured-section" data-aos="fade-up">
           <div class="featured-text text-center">
               <p>The Best Deals</p>
               <h1>Featured Proprties</h1>
           </div>
           <div class="container mt-5">
               <div class="featured-listings">
                   <div class="row">
                     @if ($featured_listings->count() > 0)
                        @foreach ($featured_listings as $single_featured)
                        <div class="col-12 col-md-4 hover-inner-image mb-3 position-relative">
                            <div class="property-info">
                                <div>
                                    <a href="#">{{ $single_featured->property_type}}</a>
                                    <a href="#">{{ $single_featured->property_for}}</a>
                                </div>
                            </div>
                            <div class="single-featured-listing">
                               <div class="inner-image">
                                 <img src="{{ asset('/images/listing_1.jpg.webp') }}" alt="listing" class="img-fluid smooth-inner">
                               </div>
                                <div class="single-featured-listing-address position-relative">
                                     <div class="property-price">
                                         <span><a href="#">$ 217 346</a></span>
                                     </div>
                                    <img src="{{ asset('/images/address.webp') }}" alt="address">
                                    <p class="m-0"><a href="/property/{{ $single_featured->id}}">{{ $single_featured->property_address}}</a></p>
                                </div>
                                <div class="single-featured-info d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('/images/foot.webp') }}" alt="field" height="18">
                                        <p class="m-0">{{ $single_featured->property_space}}</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('/images/bathtub.webp') }}" alt="field" height="18">
                                        <p class="m-0">{{ $single_featured->property_bathrooms}}</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('/images/rooms.webp') }}" alt="field" height="22">
                                        <p class="m-0">{{ $single_featured->property_bedrooms}}</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('/images/garage.webp') }}" alt="field" height="18">
                                        <p class="m-0">{{ $single_featured->property_garges}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     @endif
                   </div>
               </div>
           </div>
       </section>
       {{--Featured Section End--}}
       {{--map section start--}}
       <section id="map-section" data-aos="fade-right">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-12 col-md-8 p-0 order-1 order-md-0">
                       <div class="map-wrapper">
                        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13537.550396071914!2d35.84328!3d31.9775067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc7b138ad3619f9b8!2sMecca%20Mall!5e0!3m2!1sen!2sjo!4v1621685746163!5m2!1sen!2sjo" width="100%" height="520" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                       </div>
                   </div>
                   <div class="col-12 col-md-4 p-0  position-relative">
                    <div class="map_overlay">
                        <svg fill="#55407d" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M100,0 a-200,150 0 0 0 -100,100 h100 v-100 z"></path>
                        </svg>
                        </div>
                     <div class="locations-wrapper">
                         <p>The Best Deals</p>
                         <h1>Choose a Location</h1>
                         <div class="locations">
                             <label for="location">
                                 <input type="radio" name="location">
                                 Chicago
                             </label>
                             <label for="location">
                                 <input type="radio" name="location">
                                 New York
                             </label>
                             <label for="location">
                                 <input type="radio" name="location">
                                 Orange County
                             </label>
                             <label for="location">
                                 <input type="radio" name="location">
                                North Dakota
                             </label>
                             <label for="location">
                                 <input type="radio" name="location">
                                 Maryland
                             </label>
                         </div>
                     </div>
                   </div>
               </div>
           </div>
       </section>
       {{--map section end--}}

       {{--Deal of the day start --}}
       <section id="today-section" data-aos="fade-left">
           <p class=" text-center">The best deals</p>
           <h1 class="text-center">Today's Hot Deal</h1>
           <div class="container my-5">
               <div class="row">
                   <div class="col-12 col-md-6 position-relative p-0  order-1 order-md-0">
                       <img src="{{ asset('/images/listing_2.webp') }}" alt="image" class="img-fluid">
                       <div class="property-info">
                        <div>
                            <a href="#">House</a>
                            <a href="#">For Sale</a>
                        </div>
                    </div>
                   </div>
                   <div class="col-12 col-md-6 p-0">
                     <div class="today-wrapper">
                        <div class="today-price">
                            <span><a href="#">$ 562 346</a></span>
                        </div>
                        <h3>Villa for sale</h3>
                        <div class="today-location">
                            <img src="{{asset('/images/address.webp')}}" alt="">
                            <p class="today-address">280 Doe Meadow Drive Landover, MD 20785</p>
                        </div>
                        <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
                        <div class="today-specific d-flex alignitems-center justify-content-between">
                            <div class="single-spec">
                                <img src="{{asset('/images/foot.webp')}}" alt="" height="20">
                                <span>1234 <br>sq ft</span>
                            </div>
                            <div class="single-spec">
                                <img src="{{asset('/images/bathtub.webp')}}" alt="" height="20">
                                <span>2 <br>bathrooms</span>
                            </div>
                            <div class="single-spec">
                                <img src="{{asset('/images/garage.webp')}}" alt="" height="20">
                                <span>2 <br> garage</span>
                            </div>
                            <div class="single-spec">
                                <img src="{{asset('/images/rooms.webp')}}" alt="" height="25">
                                <span>5 <br>bedrooms</span>
                            </div>
                        </div>
                     </div>
                   </div>
               </div>
           </div>
       </section>
       {{--Deal of the day end --}}

       {{--testamonials sectios start--}}
       <section id="test-section">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-12 col-md-7 p-0 position-relative" data-aos="fade-right">
                       <img src="{{asset('/images/test.webp')}}" alt="Happy Clients" class="img-fluid">
                       <div class="test-overlay"></div>
                   </div>
                   <div class="col-12 col-md-5" style="background-color:#f1f6fc;" data-aos="fade-left">
                       <div class="clients-test">
                            <p>The Best Deals</p>
                            <h1>Clients <br> testimonials</h1>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active single-test">
                                   <h4>"They helped us find our home"</h4>
                                   <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
                                   <small>Cristinne Smith</small>
                                  </div>
                                  <div class="carousel-item single-test">
                                    <h4>"They helped us find our home"</h4>
                                    <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
                                    <small>Cristinne Smith</small>
                                  </div>
                                  <div class="carousel-item single-test">
                                    <h4>"They helped us find our home"</h4>
                                    <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
                                    <small>Cristinne Smith</small>
                                  </div>
                                </div>
                              </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       {{--testamonials section end--}}
       <div class="loading-screen">
           <div class="spinner"></div>
       </div>
@endsection