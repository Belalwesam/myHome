@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
             <div class="d-flex align-items-center justify-content-between">
                <p class="m-0 d-none d-md-block">Welcome to myHome</p>
                <button class="btn btn-sm btn-success text-white" id="show-add-form"><i class="fas fa-plus mr-2"></i>add a new listing</button>
             </div>
            </div>
        </div>
        @if (session('add-listing-success')) 
            <div class="alert alert-success my-2">
                {{ session('add-listing-success') }}
            </div>
        @endif
        <h4 class="my-4 text-center my-l">my Listings</h4>
        <div class="listings-area">
            @if ($listings->count() > 0)
                    {{--mylistings Section Start--}}
                    <section id="featured-section" class="p-0">
                        <div class="container mt-5" id="reload-edit">
                            <div class="featured-listings">
                                <div class="row">
                                    @foreach ($listings as $single_listing)
                                    <div class="col-12 col-md-4 hover-inner-image mb-3 position-relative">
                                        <div id="listing-{{$single_listing->id}}">
                                            <div class="property-info">
                                                <div>
                                                    <a href="#">{{ $single_listing->property_type}}</a>
                                                    <a href="#">{{ $single_listing->property_for}}</a>
                                                </div>
                                            </div>
                                            <div class="single-featured-listing  hover-to-show">
                                            <div class="hover-actions d-flex justify-content-center align-items-center">
                                                <button class="editListingBtn btn btn-primary mr-3"
                                                data-type = "{{$single_listing->property_type}}"
                                                data-for = "{{$single_listing->property_for}}"
                                                data-space = "{{$single_listing->property_space}}"
                                                data-address = "{{$single_listing->property_address}}"
                                                data-bedrooms = "{{$single_listing->property_bedrooms}}"
                                                data-garges = "{{$single_listing->property_garges}}"
                                                data-bathrooms = "{{$single_listing->property_bathrooms}}"
                                                data-desc = "{{$single_listing->property_desc}}"
                                                data-id = "{{$single_listing->id}}"
                                                ><i class="fas fa-edit"></i></button>
                                                <form action="{{ route('listing.destroy' , $single_listing->id) }}" method="POST" class="d-inline">
                                                    {{ csrf_field() }}
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger deleteListingBtn" data-id="{{ $single_listing->id}}"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                            <div class="inner-image">
                                                <img src="{{ asset('/images/listing_1.jpg.webp') }}" alt="listing" class="img-fluid smooth-inner">
                                            </div>
                                                <div class="single-featured-listing-address position-relative">
                                                    <div class="property-price">
                                                        <span><a href="#">$ 217 346</a></span>
                                                    </div>
                                                    <img src="{{ asset('/images/address.webp') }}" alt="address">
                                                    <p class="m-0"><a href="#">{{ $single_listing->property_address}}</a></p>
                                                </div>
                                                <div class="single-featured-info d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('/images/foot.webp') }}" alt="field" height="18">
                                                        <p class="m-0">{{ $single_listing->property_space}}</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('/images/bathtub.webp') }}" alt="field" height="18">
                                                        <p class="m-0">{{ $single_listing->property_bathrooms}}</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('/images/rooms.webp') }}" alt="field" height="22">
                                                        <p class="m-0">{{ $single_listing->property_bedrooms}}</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('/images/garage.webp') }}" alt="field" height="18">
                                                        <p class="m-0">{{ $single_listing->property_garges}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                    {{--my-listings Section End--}}
            @else
                <h6 class="my-4">You have no listings.</h6>
             @endif
        </div>
    </div>

    {{-- start 0f editing a listing modal --}}
    <div class="edit-form">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Edit Listing
                            <button type="button" class="close-hidden-edit-form-btn close float-right" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="form-grid">
                                        <div class="right-form-grid">
                                            <label for="property_type">
                                                Property's Type
                                            </label>
                                            <select name="property_type_edit" id="prop_type" class="form-control">
                                                <option value="">--Please select--</option>
                                                <option value="house">House</option>
                                                <option value="villa">Villa</option>
                                                <option value="compound">Compound</option>
                                                <option value="apartment">Apartment</option>
                                                <option value="office">Office</option>
                                                <option value="commercial">Commercials</option>
                                            </select>
                                        </div>
                                        <div class="left-form-grid">
                                            <label for="property_type">
                                                Property is for :
                                            </label>
                                            <select name="property_for_edit"  id="prop_for" class="form-control">
                                                <option value="">--Please select--</option>
                                                <option value="sale">Sale</option>
                                                <option value="rent">Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="property_space">
                                        Property's Space :
                                    </label>
                                    <input type="number"  id="prop_space" class="form-control" placeholder="example : 1542 sq ft" name="property_space_edit">
                                </div>
                                <div class="form-group">
                                    <label for="Address">Property's Address :</label>
                                    <input type="text"  id="prop_address" class="form-control" name="property_address_edit" placeholder="example : 4812 Haul Road Saint Paul, MN 55102">
                                </div>
                                <div class="form-group">
                                    <label for="property_bedrooms">
                                        Property's Bedrooms :
                                    </label>
                                    <select name="property_bedrooms_edit" id="prop_bedrooms" class="form-control">
                                        <option value="0">--Please select--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-grid">
                                        <div class="right-form-grid">
                                            <label for="Property_bathrooms">Bathrooms</label>
                                            <select name="property_bathrooms_edit"  id="prop_bathrooms" class="form-control">
                                                <option value="0">--Please select--</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="left-form-grid">
                                            <label for="Property_garages">Garges</label>
                                            <select name="property_garges_edit"  id="prop_garges" class="form-control">
                                                <option value="0">--Please select--</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Say something about the property!</label>
                                    <textarea name="property_desc_edit"  id="prop_desc" cols="30" rows="5" placeholder="Property description" class="form-control"></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="hidden-form-action float-right">
                                        <button type="submit" class="btn btn-primary btn-sm" id="edit-listing">Edit Listing</button>
                                        <button class="btn btn-secondary btn-sm close-hidden-edit-form-btn">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="edit-form-overlay"></div>
    {{-- end 0f editing a listing modal --}}
    
    {{--start of new listing adding form--}}
    <div class="hidden-form @if (count($errors) > 0)show-hidden-form @endif">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">New Property Listing<button type="button" class="close-hidden-form-btn close float-right" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button></div>
                        <div class="card-body">
                            <form action="{{ route('listing.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="form-grid">
                                        <div class="right-form-grid">
                                            <label for="property_type">
                                                Property's Type
                                            </label>
                                            <select name="property_type" id="" class="form-control @if (count($errors) > 0)border border-danger @endif">
                                                <option value="">--Please select--</option>
                                                <option value="house">House</option>
                                                <option value="villa">Villa</option>
                                                <option value="compound">Compound</option>
                                                <option value="apartment">Apartment</option>
                                                <option value="office">Office</option>
                                                <option value="commercial">Commercials</option>
                                            </select>
                                        </div>
                                        <div class="left-form-grid">
                                            <label for="property_type">
                                                Property is for :
                                            </label>
                                            <select name="property_for" id="" class="form-control @if (count($errors) > 0)border border-danger @endif">
                                                <option value="">--Please select--</option>
                                                <option value="sale">Sale</option>
                                                <option value="rent">Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="property_space">
                                        Property's Space :
                                    </label>
                                    <input type="number" class="form-control @if (count($errors) > 0)border border-danger @endif" placeholder="example : 1542 sq ft" name="property_space">
                                </div>
                                <div class="form-group">
                                    <label for="Address">Property's Address :</label>
                                    <input type="text" class="form-control @if (count($errors) > 0)border border-danger @endif" name="property_address" placeholder="example : 4812 Haul Road Saint Paul, MN 55102">
                                </div>
                                <div class="form-group">
                                    <label for="property_bedrooms">
                                        Property's Bedrooms :
                                    </label>
                                    <select name="property_bedrooms" id="" class="form-control">
                                        <option value="0">--Please select--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-grid">
                                        <div class="right-form-grid">
                                            <label for="Property_bathrooms">Bathrooms</label>
                                            <select name="property_bathrooms" id="" class="form-control">
                                                <option value="0">--Please select--</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="left-form-grid">
                                            <label for="Property_garages">Garges</label>
                                            <select name="property_garges" id="" class="form-control">
                                                <option value="0">--Please select--</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Say something about the property!</label>
                                    <textarea name="property_desc" id="" cols="30" rows="5" placeholder="Property description" class="form-control"></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="hidden-form-action float-right">
                                        <button type="submit" class="btn btn-primary btn-sm">Add Listing</button>
                                        <button class="btn btn-secondary btn-sm close-hidden-form-btn">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-overlay @if (count($errors) > 0)show-hidden-form-overlay @endif"></div>
    {{--end new listing adding form--}}
@endsection