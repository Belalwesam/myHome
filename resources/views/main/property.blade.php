@extends('layouts.app')
@section('content')
    @if ($property->count() > 0)
        {{--Deal of the day start --}}
       <section id="today-section">
        <p class=" text-center">The best deals</p>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-6 position-relative p-0  order-1 order-md-0">
                    <img src="{{ asset('/images/listing_2.webp') }}" alt="image" class="img-fluid">
                    <div class="property-info">
                     <div>
                         <a href="#">{{$property->property_type}}</a>
                         <a href="#">{{$property->property_for}}</a>
                     </div>
                 </div>
                </div>
                <div class="col-12 col-md-6 p-0">
                  <div class="today-wrapper">
                     <div class="today-price">
                         <span><a href="#">$ 562 346</a></span>
                     </div>
                     <h3>{{$property->property_desc}}</h3>
                     <div class="today-location">
                         <img src="{{asset('/images/address.webp')}}" alt="">
                         <p class="today-address">{{$property->property_address}}</p>
                     </div>
                     <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
                     <div class="today-specific d-flex alignitems-center justify-content-between">
                         <div class="single-spec">
                             <img src="{{asset('/images/foot.webp')}}" alt="" height="20">
                             <span>{{$property->property_space}} <br>sq ft</span>
                         </div>
                         <div class="single-spec">
                             <img src="{{asset('/images/bathtub.webp')}}" alt="" height="20">
                             <span>{{$property->property_bathrooms}} <br>bathrooms</span>
                         </div>
                         <div class="single-spec">
                             <img src="{{asset('/images/garage.webp')}}" alt="" height="20">
                             <span>{{$property->property_garges}} <br> garage</span>
                         </div>
                         <div class="single-spec">
                             <img src="{{asset('/images/rooms.webp')}}" alt="" height="25">
                             <span>{{$property->property_bedrooms}} <br>bedrooms</span>
                         </div>
                     </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    {{--Deal of the day end --}}
    @endif
@endsection