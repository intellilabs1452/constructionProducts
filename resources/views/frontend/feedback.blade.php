@extends('frontend.layouts.app')

@section('content')
<link href="{{ asset('public/assets/css/Main.css') }}" rel="stylesheet"/>
<link href="{{ asset('public/assets/css/main2.css') }}" rel="stylesheet"/>
<script src="{{ asset('public/assets/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('public/assets/js/JQUERY%20Main.js') }}"></script>
<script src="{{ asset('public/assets/js/jquerymain2.js') }}"></script>
<section class="pt-4 mb-4">
    <div class="container" >
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4" style="color:#d9534f">{{ translate('Feedback Form') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('feedback') }}">"{{ translate('Feedback') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container" >
        <div class="bg-white shadow-sm rounded px-3 pt-3" style="box-shadow: 3px 4px 15px #e7bebd !important;border-radius: 10px !important;">
            <form id="reg2-form" class="form-default" role="form" action="{{ route('feedbacksubmit') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                 <div class="row">
               <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Enter Your Name</label>
                          <input type="text" class="form-control" value="" placeholder="{{  translate('Name') }}" name="name" required>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                             <label>Enter Your Mobile</label>
                          <input type="text" class="form-control" value="" placeholder="{{  translate('Mobile No') }}" name="mobile" required>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                             <label>Enter Your Email</label>
                          <input type="text" class="form-control" value="" placeholder="{{  translate('Email') }}" name="email" required>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                           <label>How did you hear about us</label> 
                           <select name="source" class="form-control" required>
                            
                              <option value="Google">Google</option> 
                              <option value="Social Media Ads">Social Media Ads</option> 
                              <option value="TV or print Ads">TV or print Ads</option> 
                              <option value="Website">Website</option> 
                              <option value="Other">Other</option> 
                            </select>
                        </div>
                    </div>
                </div>                   
                
                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>What was the main purpose of visit Today?</label>
                           <select name="purpose" class="form-control" required>
                                <option value="0">{{  translate('Purpose Of Visit') }}</option>
                                 <option value="Browse for a particular item">{{  translate('Browse for a particular item') }}</option>
                                  <option value="Looking for offers">{{  translate('Looking for offers') }}</option>
                                  <option value="Viewing the product details">{{  translate('Viewing the product details') }}</option>
                                  <option value="Urgent item requirements">{{  translate('Urgent item requirements') }}</option>
                                    <option value="Other">{{  translate('Other') }}</option>
                                               
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Were you able to Complete your primary purpose of visit?</label>
                           <select name="purposedone" class="form-control" required>
                                <option value="0">{{  translate('Select') }}</option>
                                <option value="yes">{{  translate('Yes') }}</option>
                                <option value="no">{{  translate('No') }}</option>
                                <option value="mix">{{  translate('I am not done yet') }}</option>
                                               
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                    <label>Overall, How satisfied are you with the website?</label>
                       <div class="col-md-12" style="margin-bottom: 30px;
    margin-top: 20px;">
                <input type="hidden" value="0" id="rating1" name="rating1">
                 <ul id="emoji2" style="width: 100%;">
        <li><img src="{{ asset('public/assets/images/emoji11.png') }}"/></li>
        <li><img src="{{ asset('public/assets/images/emoji22.png') }}"/></li>
        <li><img src="{{ asset('public/assets/images/emoji33.png') }}"/></li>
        <li><img src="{{ asset('public/assets/images/emoji44.png') }}"/></li>
        <li><img src="{{ asset('public/assets/images/emoji55.png') }}"/></li>
        </ul> </div>   
                    <br>
                     <label>How likely are you to recommend constructionproducts.ae to friend or business associate?</label>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 60px;">
                        
        
         <input type="hidden" value="0" id="rating2" name="rating2" >
                 <ul id="emoji" style="margin-top: 22px;width: 100%;">
        <li><img src="{{ asset('public/assets/images/emoji11.png') }}"/></li>
        <li><img src="{{ asset('public/assets/images/emoji22.png') }}"/></li>
        <li><img src="{{ asset('public/assets/images/emoji33.png') }}"/></li>
        <li><img src="{{ asset('public/assets/images/emoji44.png') }}"/></li>
        <li><img src="{{ asset('public/assets/images/emoji55.png') }}"/></li>
        </ul>
        
                </div>
                
                
               </div>
          
               
               <div class="row" style="margin-top:10px">
                   <div class="col-md-12">
                         <label>Share Your Feedback</label>
                       <textarea rows='10' style="width:100%" placeholder="Please share any additional feedback" name="feedback" required>
                       </textarea>
                   </div>
               </div>
             </div>
              <div class="col-md-5">
                        <img class="mw-100 mx-auto mb-4 formimage" src="https://constructionproducts.org/public/assets/img/feed.png" style="width: 100%;
    margin-top: 140px;">
              </div>
              </div>
           <div class="row">
           <div class="form-group col-md-12">
           <div class="mb-3">
              <label class="aiz-checkbox"> <input type="checkbox" name="agreement" required><span>{{ translate('I agree that my personal information is used for direct marketing of constructionproducts.ae and their partners products and services.')}}</span><span class="aiz-square-check"></span></label>
            </div>
         1. <b>Constructionproducts.ae</b> will process your personal data for the purpose of (a) creating an account.
         <br>2.	For sending Newsletters/Promotions as part of marketing our partners products and services. 
         <br>3.	<b>Constructionproducts.ae</b> is responsible for the processing of personal data in line with our  Privacy Policy.
         </div>
       </div>
       <div class="row">
            <div class="mb-5"><button type="submit" style="
    margin-left: 20px;
" class="btn btn-primary btn-block fw-600">{{  translate('Submit') }}</button>
             </div>
       </div>
            </form>                
        </div>
    </div>
</section>

@endsection

