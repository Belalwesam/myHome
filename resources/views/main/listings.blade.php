@extends('layouts.app')
@section('content')

    <div class="container">
        @if ($listings->count() > 0)
            {{--Featured Section Start--}}
       <section id="featured-section">
        <div class="featured-text text-center">
            <p>The Best Deals</p>
            <h1>Latest Listings</h1>
        </div>
        <div class="container mt-5">
            <div class="featured-listings">
                <div class="row">
                    @foreach ($listings as $listing)
                    <div class="col-12 col-md-4 hover-inner-image mb-3 position-relative" data-aos="fade-right">
                        <div class="property-info">
                            <div>
                                <a href="#">{{ $listing->property_type}}</a>
                                <a href="#">{{ $listing->property_for}}</a>
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
                                <p class="m-0"><a href="/property/{{ $listing->id}}">{{ $listing->property_address}}</a></p>
                            </div>
                            <div class="single-featured-info d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('/images/foot.webp') }}" alt="field" height="18">
                                    <p class="m-0">{{ $listing->property_space}}</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('/images/bathtub.webp') }}" alt="field" height="18">
                                    <p class="m-0">{{ $listing->property_bathrooms}}</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('/images/rooms.webp') }}" alt="field" height="22">
                                    <p class="m-0">{{ $listing->property_bedrooms}}</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('/images/garage.webp') }}" alt="field" height="18">
                                    <p class="m-0">{{ $listing->property_garges}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="listing-pagination d-flex align-items-center justify-content-center mb-4">
        {{ $listings->links('pagination::bootstrap-4') }}
    </div>
    {{--Featured Section End--}}
        @else
            <h4 class="text-center my-5">Currently there are no active listings.</h4>
        @endif
    </div>
@endsection