<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="header-left">
                    <ul>
                        <li><a href="{{ route('home') }}"><i class="fa fa-user"></i>Home</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                        <li><a href=""><i class="fa fa-user"></i> My Cart</a></li>
                        <li><a href=""><i class="fa fa-user"></i> Checkout</a></li>
                        <li><a href="#" id="contact"><i class="fa fa-user"></i> Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        @guest

                            <li><a href="{{ route('login') }}"><i class="fa fa-user"></i> {{ __('Login') }}</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}"><i class="fa fa-user"></i> {{ __('Register') }}</a></li>
                            @endif
                        @else
                            @if(Auth::user()->role == 'admin')
                                <li><a href="{{ route('dashboard') }}">Admin Portal </a></li>
                            @endif
                            <li>{{ Auth::user()->name }} </li>
                            
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><i class="fa fa-user"></i> {{ __('Logout') }}</a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1>Star Mobile</h1>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->
