<style>
.topnav {
  overflow: hidden;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown1 {
  float: left;
  overflow: hidden;
}

.dropdown1 .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  padding: 14px 16px;
  font-family: inherit;
  margin: 0;
}

.dropdown1-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown1-content a {
  float: none;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}



.dropdown1-content a:hover {
  background-color: #ddd;
}

.dropdown1:hover .dropdown1-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown1 .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown1 {float: none;}
  .topnav.responsive .dropdown1-content {position: relative;}
  .topnav.responsive .dropdown1 .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
@if(get_setting('topbar_banner') != null)
<div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner" data-value="removed" hidden>
    <a href="{{ get_setting('topbar_banner_link') }}" class="d-block text-reset">
        <img src="{{ uploaded_asset(get_setting('topbar_banner')) }}" class="w-100 mw-100 h-50px h-lg-auto img-fit">
    </a>
    <button class="btn text-white absolute-top-right set-session" data-key="top-banner" data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
        <i class="la la-close la-2x"></i>
    </button>
</div>
@endif
<!-- Top Bar -->
<div class="sticky-top top-navbar bg-black border-bottom border-soft-secondary z-1035" style="color:white; background-color:#003049 !important" hidden>
    <div class="container" style="max-width: 1500px;">
        <div class="row">
            <div class="col-lg-7 col">
                <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                    @if(get_setting('show_language_switcher') == 'on')
                    <li class="list-inline-item dropdown mr-3" id="lang-change">
                        @php
                            if(Session::has('locale')){
                                $locale = Session::get('locale', Config::get('app.locale'));
                            }
                            else{
                                $locale = 'en';
                            }
                        @endphp
                        <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2" data-toggle="dropdown" data-display="static">
                            <img src="{{ static_asset('assets/img/placeholder.jpg') }}" data-src="{{ static_asset('assets/img/flags/'.$locale.'.png') }}" class="mr-2 lazyload" alt="{{ \App\Language::where('code', $locale)->first()->name }}" height="11">
                            <span class="opacity-60">{{ \App\Language::where('code', $locale)->first()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            @foreach (\App\Language::all() as $key => $language)
                                <li>
                                    <a href="javascript:void(0)" data-flag="{{ $language->code }}" class="dropdown-item @if($locale == $language) active @endif">
                                        <img src="{{ static_asset('assets/img/placeholder.jpg') }}" data-src="{{ static_asset('assets/img/flags/'.$language->code.'.png') }}" class="mr-1 lazyload" alt="{{ $language->name }}" height="11">
                                        <span class="language">{{ $language->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif

                    @if(get_setting('show_currency_switcher') == 'on')
                    <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">
                        @php
                            if(Session::has('currency_code')){
                                $currency_code = Session::get('currency_code');
                            }
                            else{
                                $currency_code = \App\Currency::findOrFail(get_setting('system_default_currency'))->code;
                            }
                        @endphp
                        <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2 opacity-60" data-toggle="dropdown" data-display="static">
                            {{ \App\Currency::where('code', $currency_code)->first()->name }} {{ (\App\Currency::where('code', $currency_code)->first()->symbol) }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            @foreach (\App\Currency::where('status', 1)->get() as $key => $currency)
                                <li>
                                    <a class="dropdown-item @if($currency_code == $currency->code) active @endif" href="javascript:void(0)" data-currency="{{ $currency->code }}">{{ $currency->name }} ({{ $currency->symbol }})</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>

            <div class="col-5 text-right d-none d-lg-block">
                <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                    @auth
                        @if(isAdmin())
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="{{ route('admin.dashboard') }}" class="text-reset d-inline-block opacity-60">{{ translate('My Panel')}}</a>
                            </li>
                        @else

                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0 dropdown">
                                <a class="dropdown-toggle no-arrow text-reset" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="">
                                        <span class="position-relative d-inline-block">
                                            <i class="las la-bell fs-18"></i>
                                            @if(count(Auth::user()->unreadNotifications) > 0)
                                                <span class="badge badge-sm badge-dot badge-circle badge-color position-absolute absolute-top-right"></span>
                                            @endif
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0">
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="mb-0">{{ translate('Notifications') }}</h6>
                                    </div>
                                    <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                        <ul class="list-group list-group-flush" >
                                            @forelse(Auth::user()->unreadNotifications as $notification)
                                                <li class="list-group-item">
                                                    @if($notification->type == 'App\Notifications\OrderNotification')
                                                        @if(Auth::user()->user_type == 'customer')
                                                        <a href="javascript:void(0)" onclick="show_purchase_history_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                            <span class="ml-2">
                                                                {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                            </span>
                                                        </a>
                                                        @elseif (Auth::user()->user_type == 'seller')
                                                            @if(Auth::user()->id == $notification->data['user_id'])
                                                                <a href="javascript:void(0)" onclick="show_purchase_history_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                                    <span class="ml-2">
                                                                        {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                                    </span>
                                                                </a>
                                                            @else
                                                                <a href="javascript:void(0)" onclick="show_order_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                                    <span class="ml-2">
                                                                        {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                                    </span>
                                                                </a>
                                                            @endif
                                                        @endif
                                                    @endif
                                                </li>
                                            @empty
                                                <li class="list-group-item">
                                                    <div class="py-4 text-center fs-16">
                                                        {{ translate('No notification found') }}
                                                    </div>
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <div class="text-center border-top">
                                        <a href="{{ route('all-notifications') }}" class="text-reset d-block py-2">
                                            {{translate('View All Notifications')}}
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a style="font-size:15px" href="{{ route('profile') }}" class="text-reset d-inline-block ">{{ translate('Manage Profile')}}</a>
                            </li><li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a style="font-size:15px;color: yellow !important;" href="{{ route('dashboard') }}" class="text-reset d-inline-block ">{{ translate('My Panel')}}</a>
                            </li>
                        @endif
                        <li class="list-inline-item">
                            <a style="font-size:15px;" href="{{ route('logout') }}" class="text-reset d-inline-block ">{{ translate('Logout')}}</a>
                        </li>
                    @else
                        <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                            <a style="font-size:15px" href="{{ route('user.login') }}" class="text-reset d-inline-block ">{{ translate('Sign In')}}</a>
                        </li>
                        <li class="list-inline-item">
                            <a style="font-size:15px" href="{{ route('user.registration') }}" class="text-reset d-inline-block ">{{ translate('Create an Account')}}</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Top Bar -->
<header class="@if(get_setting('header_stikcy') == 'on') sticky-top @endif z-1020 bg-white border-bottom shadow-sm">
    <div class="position-relative logo-bar-area z-1" 
    style="background-color:white;font-weight: bold;
">
        <div class="container" style="max-width:1300px;">
            <div class="d-flex align-items-center">

                <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                    <a class="d-block py-20px mr-3 ml-0" href="{{ route('landing') }}" style="padding-top:5px;padding-bottom:5px">
                        @php
                            $header_logo = get_setting('header_logo');
                        @endphp
                        @if($header_logo != null)
                            <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-60px h-md-40px" height="40">
                        @else
                            <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-60px h-md-40px" height="40">
                        @endif
                    </a>

                    @if(Route::currentRouteName() != 'home')
                       <div class="d-none d-xl-block align-self-stretch category-menu-icon-box ml-auto mr-0">
                           
                            <div class="h-100 d-flex align-items-center" id="category-menu-icon">
                                <div class="dropdown-toggle navbar-light bg-light h-40px w-50px pl-2 rounded border c-pointer">
                                    <span class="navbar-toggler-icon" style="background-color: #d9534f"></span>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x" style="color:#891638"></i>
                    </a>
                </div>

                <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                    <div class="position-relative flex-grow-1">
                        <form action="{{ route('search') }}" method="GET" class="stop-propagation">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                    <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left"></i></button>
                                </div>
                                <div class="input-group" style="border: 1px solid #891638;">
                                    <input type="text" class="border-0 form-control" id="search" name="keyword" @isset($query)
                                        value="{{ $query }}"
                                    @endisset placeholder="{{translate('I am shopping for...')}}" autocomplete="off">
                                    <div class="input-group-append d-none d-lg-block">
                                        <button class="btn btn-primary badge-color" type="submit" style="border-radius: 0px;">
                                            <i class="la la-search la-flip-horizontal fs-18"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader"><div></div><div></div><div></div></div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content" class="text-left" style="color:black">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="#" class="nav-box-link">
                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                        </a>
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0" >
                    <div class="" id="compare" hidden>
                        @include('frontend.partials.compare')
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="wishlist">
                        @include('frontend.partials.wishlist')
                    </div>
                </div>

               
                 <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                    <div class="nav-cart-box dropdown h-100" id="cart_items">
                        @include('frontend.partials.cart')
                    </div>
                </div>
                <span class="spanborder" style="border:1px solid #891638 !important;margin-left: 11px;height: 30px;"></span>
                 
               
                
                <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdownnotify" hidden>
                   <div class="nav-cart-box dropdownnotify h-100" id="notify">
                     @auth
                       <a class="d-flex align-items-center text-reset h-100" data-toggle="dropdown" data-display="static" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="">
                                        <span class="position-relative d-inline-block" style="
    padding-top: 5px;
">
                                            <i class="las la-bell fs-18" style="color:#7b7b82;font-size:27px !important"></i>
                                            @if(count(Auth::user()->unreadNotifications) > 0)
                                                <span class="badge badge-sm badge-dot badge-circle badge-color position-absolute absolute-top-right"></span>
                                            @endif
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0">
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="mb-0">{{ translate('Notifications') }}</h6>
                                    </div>
                                    <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                        <ul class="list-group list-group-flush" >
                                            @forelse(Auth::user()->unreadNotifications as $notification)
                                                <li class="list-group-item">
                                                    @if($notification->type == 'App\Notifications\OrderNotification')
                                                        @if(Auth::user()->user_type == 'customer')
                                                        <a href="javascript:void(0)" onclick="show_purchase_history_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                            <span class="ml-2">
                                                                {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                            </span>
                                                        </a>
                                                        @elseif (Auth::user()->user_type == 'seller')
                                                            @if(Auth::user()->id == $notification->data['user_id'])
                                                                <a href="javascript:void(0)" onclick="show_purchase_history_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                                    <span class="ml-2">
                                                                        {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                                    </span>
                                                                </a>
                                                            @else
                                                                <a href="javascript:void(0)" onclick="show_order_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                                    <span class="ml-2">
                                                                        {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                                    </span>
                                                                </a>
                                                            @endif
                                                        @endif
                                                    @endif
                                                </li>
                                            @empty
                                                <li class="list-group-item">
                                                    <div class="py-4 text-center fs-16">
                                                        {{ translate('No notification found') }}
                                                    </div>
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <div class="text-center border-top">
                                        <a href="{{ route('all-notifications') }}" class="text-reset d-block py-2">
                                            {{translate('View All Notifications')}}
                                        </a>
                                    </div>
                                </div>
                        
@endauth
                   </div>
                </div>
                
                <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdownadmin" hidden>
                   <div class="nav-cart-box dropdownadmin h-100" id="cart_items">
                        @include('frontend.partials.adminpanel')
                    </div>
                </div>

            </div>
        </div>
        @if(Route::currentRouteName() != 'home')
       <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3" id="hover-category-menu">
            <div class="container">
                <div class="row gutters-10 position-relative">
                    <div class="col-lg-3 position-static">
                        @include('frontend.partials.category_menu')
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    @if ( get_setting('header_menu_labels') !=  null )
     
        <div class="border-top border-gray-200 py-1 mobilebg">
           
            <div class="container">
                
               <div class="topnav mobilebg" id="myTopnav" hidden>
  @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
                   <a href="{{ json_decode( get_setting('header_menu_links'), true)[$key] }}" class=" fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            {{ translate($value) }}
                 </a>
                  
                    @endforeach
  <a href="https://constructionproducts.org/categories" class="fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">Categories</a>
                   
     
     <a href="https://constructionproducts.org/brands" class="fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">Brands</a>
  <div class="dropdown1">
    <button class="dropbtn">Locations 
      <i class="las la-caret-down"></i>
    </button>
    <div class="dropdown1-content">
       @foreach (\App\Models\SellerLocation::orderBy('name', 'asc')->get() as $key => $location)
        <a href="https://constructionproducts.org/sellers/{{ $location->id }}" class="fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">{{$location->name}}</a>
        @endforeach
    </div>
  </div> 
  <a href="https://constructionproducts.org/technicalquery" class="fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">Technical Query</a>
  
 
   
  <a style="background-color: #d9534f;font-size: 0.875rem !important;text-transform:uppercase" href="{{ route('shops.create') }}" class="btn btn-primary btn-sm shadow-md">
                            {{ translate('Connect Your Business') }}
                        </a>                
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
                
                 <nav class="navbar navbar-expand-lg navbar-light mobilebg" style="height:46px">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" style="right:0;position:absolute" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
 
    <div class="collapse navbar-collapse mobilemenu_height" id="navbarSupportedContent" >
            <ul class="navbar-nav mr-auto" style="background:#891638;margin:0 auto;">
                 @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
                    <li class="list-inline-item mr-0" >
                       <a style="color:white !important ;font-weight:bold !important" href="{{ json_decode( get_setting('header_menu_links'), true)[$key] }}" class=" fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                            {{ translate($value) }}
                        </a>
                    </li>
                    @endforeach
                    
                    <li  class="list-inline-item mr-0"><a style="color:white !important;font-weight:bold !important" href="https://constructionproducts.org/categories" class="fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">Categories</a>
                     </li>
     
      <li ><a style="color:white !important;font-weight:bold !important" href="https://constructionproducts.org/brands" class="fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">Brands</a></li>
      <li><a style="color:white !important;font-weight:bold !important" class="fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset dropdown-toggle" id="mymenu">Locations</a>
                <ul class="submenumob">
                     <li><a href="https://constructionproducts.org/locations" class="fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">All Locations</a></li>
                     @foreach (\App\Models\SellerLocation::orderBy('name', 'asc')->get() as $key => $location)
                                   
                                <li><a href="https://constructionproducts.org/sellers/{{ $location->id }}" class="fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">{{$location->name}}</a></li>
                     @endforeach
                </ul>
                
                </li>
                 <li  class="list-inline-item mr-0"><a style="color:white !important;font-weight:bold !important" href="https://constructionproducts.org/technicalquery" class="fs-menu px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">Technical Query</a>
                     </li>
        
                    <li style="color:white !important;font-weight:bold !important" class="list-inline-item mr-0 " hidden><a href="#" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset dropdown-toggle text-reset py-2">Find</a>
            <!-- First Tier Drop Down -->
            <ul>
                <li><a href="https://constructionproducts.org/brands" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">Brand</a></li>
                <li><a href="https://constructionproducts.org/categories" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">Products</a></li>
                <li><a href="https://constructionproducts.org/applicators" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">Applicators</a></li>
            </ul>        
            </li>
               <li class="list-inline-item mr-0" hidden>
                       <a href="https://constructionproducts.org/techquery" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">Technical Query</a>
               </li>
                @if(Route::currentRouteName() == 'landing')
                <li>
  <a style="background-color: #d9534f;font-size: 0.875rem !important;text-transform:uppercase" href="https://constructionproducts.org/home" class="btn btn-primary btn-sm shadow-md">{{ translate('Go To Store') }}</a> </li>
   @endif
                      <li class="list-inline-item mr-0">
                      <a style="background-color: #d9534f;font-size: 0.875rem !important;text-transform:uppercase" href="{{ route('shops.create') }}" class="btn btn-primary btn-sm shadow-md">
                            {{ translate('Connect Your Business') }}
                        </a>
                          </li>
            </ul>
          
        </div>
    </nav>
            </div>
        </div>
    @endif
</header>
  <div>
    <a style="writing-mode: vertical-rl;text-orientation: upright;position: fixed;bottom: 30%;right: 0;background: #d9534f;padding: 5px;color: white;font-weight: bold;z-index:9999999;font-size: 17px;" href="{{ route('feedback') }}">FEEDBACK</a>
  </div>