 {{-- Navigation start --}}
 <div class="upper-header">
    <div class="upper-header-wrapper">
        <div class="connect">
            <ul class="list-unstyled">
                <li>
                    <img src="{{ asset('/images/phone-call.svg') }}" alt="phone" width="20">
                    <span>+546 990221 123</span>
                </li>
                <li>
                    <img src="{{ asset('/images/placeholder.svg') }}" alt="pin" width="20">
                    <span>Main Str, no 23, New York</span>
                </li>
                <li>
                    <img src="{{ asset('/images/envelope.svg') }}" alt="envelope" width="20">
                    <span>hosting@contact.com</span>
                </li>
            </ul>
        </div>
        <div class="socials d-flex align-items-center">
            <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
            @guest
            <div class="login-register">
                <h5><a href="{{ route('login')}}">Login</a> / <a href="{{ route('register.page') }}">Register</a></h5>
            </div>
            @endguest
        </div>
    </div>
</div>
<div class="my-nav bg-white shadow" id="this-nav">
    <div class="logo">
        <a href="#">my<span>Home</span></a>
    </div>
        <div class="my-nav-links">
            <ul class="list-unstyled">
                <li><a href="/" class="mynav-link">Home</a></li><li><a href="{{ route('myhome.about') }}" class="mynav-link">About us</a></li><li><a href="{{ route('main.listings') }}" class="mynav-link">Listings</a></li><li><a href="{{ route('myhome.contact') }}" class="mynav-link">Contact</a></li>@auth<li><a class="mynav-link" href="{{ route('user.dashboard')}}">profile</a></li>@endauth
            </ul>
        </div>
        <div id="toggle-nav-btn" class="toggle-nav-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
</div>
<div class="mobile-overlay"></div>
<div class="my-mobile-nav" style="z-index: 1000;">
    <div id="close-mobile-nav-btn">X</div>
    <div class="login-register">
       @guest
         <h6><a href="{{ route('login')}}">Login</a> / <a href="{{ route('register.page') }}">Register</a></h6>   
       @endguest
    </div>
    <ul class="list-unstyled">
        <li><a href="/">Home</a></li><li><a href="/about">About us</a></li><li><a href="/listings">Listings</a></li><li><a href="/contact">Contact</a></li>@auth<li><a href="{{ route('user.dashboard')}}">profile</a></li>@endauth
    </ul>
</div>
{{-- Navigation end  --}}