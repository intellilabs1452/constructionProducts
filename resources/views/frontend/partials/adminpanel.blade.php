<style>
    .userpanel
    {
     padding: 5px; font-weight: normal;font-size: 15px;
    }
    .userpanel:hover
    {
    padding: 5px; font-weight: bold;font-size: 15px;color:#d9534f;
    }
</style> 
 
 <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0" style="margin-top: 37px;">
<li class="list-inline-item dropdown mr-3">
<a href="javascript:void(0)" class="d-flex align-items-center text-reset h-100" data-toggle="dropdown" data-display="static">
 <i class="las la-user-circle opacity-80" style="font-size:29px"></i>
</a>

     <ul class="dropdown-menu" style="min-width:10rem">
          @auth
          <li class="userpanel" style="border-bottom:1px solid #f5f1f1; color:darkred;font-weight:bold">Hi {{Auth::user()->name}}</li>
                        @if(isAdmin())
                            <li class="userpanel">
                                <span class="language"><a href="{{ route('admin.dashboard') }}">{{ translate('My Panel')}}</a></span>
                            </li>
                        @else

                          
                            <li class="userpanel">
                                <a style="font-size:15px" href="{{ route('profile') }}" class="text-reset d-inline-block ">{{ translate('Manage Profile')}}</a>
                            </li>
                            <li class="userpanel">
                                <a style="font-size:15px;" href="{{ route('dashboard') }}" class="text-reset d-inline-block ">{{ translate('My Panel')}}</a>
                            </li>
                        @endif
                        <li class="userpanel">
                            <a style="font-size:15px;" href="{{ route('logout') }}" class="text-reset d-inline-block ">{{ translate('Logout')}}</a>
                        </li>
                    @else
                        <li class="userpanel">
                            <a style="font-size:15px" href="{{ route('user.login') }}" class="text-reset d-inline-block ">{{ translate('Sign In')}}</a>
                        </li>
                        <li class="userpanel">
                            <a style="font-size:15px" href="{{ route('user.registration') }}" class="text-reset d-inline-block ">{{ translate('Create an Account')}}</a>
                        </li>
                    @endauth
                        </ul>
</li>
</ul>