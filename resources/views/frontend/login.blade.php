<html>
    <head>
         <!-- CSS Files -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/vendors.css') }}">
  
    <link rel="stylesheet" href="../assets/css/bootstrap-rtl.min.css'">
    <link rel="stylesheet" href="../assets/css/aiz-core.css">
    <link rel="stylesheet" href="../assets/css/custom-style.css">
    </head>
    <body style="background-image: url(https://constructionproducts.org/public/uploads/all/a0kFLXwNb0vs4xB4p5lCwCljcIQXEwNfZZFaoHDB.jpg);background-repeat: no-repeat; background-size: cover; ">
         <section class="gry-bg py-5">
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
                        <div class="card" style="background: #7fffd400;border:none;top:20%">
                            <div class="text-center pt-4">
                                <img src="https://constructionproducts.org/public/uploads/all/e4R7QXPRSjJ1TYThJUyRg2ovRL8I161P34rAApVJ.svg">
                                <h1 class="h4 fw-600" style="color:white;font-size:45px">
                                    {{ translate('Website under Construction')}}
                                </h1>
                            </div>

                            <div class="px-4 py-3 py-lg-4">
                                <div class="">
                                    <form class="form-default" role="form" action="{{ route('demologinsubmit') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                         
                                                <input type="text" class="form-control" value="" placeholder="{{ translate('Email Or Phone')}}" name="username" id="username">
                                           
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="{{ translate('Password')}}" name="password" id="password">
                                        </div>

                                      

                                        <div class="mb-5">
                                            <button type="submit" class="btn btn-primary btn-block fw-600"   style="background: #232324;
    border-color: #ffc107;">{{  translate('Login') }}</button>
                                        </div>
                                    </form>

                                   

                                  
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    </body>
</html>
  


