@extends('frontend.layouts.app')

@section('content')

<section class="pt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4" style="color:#d9534f">{{ translate('Find Skilled Tradesman') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('feedback') }}">"{{ translate('Tradesman') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container">
        <div class="bg-white shadow-sm rounded px-3 pt-3" style="box-shadow: 3px 4px 15px #e7bebd !important;border-radius: 10px !important;">
            <form id="reg2-form" class="form-default" role="form" action="{{ route('applicatorsubmit') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                <div class="row">
                 <div class="col-md-7">                    
                    <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Select Category 
                             </div>
                        <div class="form-group col-md-12">
                           
                           <select name="category" class="form-control">
                                <option value="0">{{  translate('Select a category') }}</option>
                                 <option value="Individual Villa">{{  translate('Individual Villa') }}</option>
                                  <option value="Warehouse">{{  translate('Warehouse') }}</option>
                                  <option value="Large Construction Projects">{{  translate('Large Construction Projects') }}</option>
                                  <option value="Roads and bridges">{{  translate('Roads and bridges') }}</option>
                                  <option value="Swimming Pools">{{  translate('Swimming Pools') }}</option>
                                  <option value="Water Tanks">{{  translate('Water Tanks') }}</option>
                                  <option value="Other">{{  translate('Others') }}</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    
                     <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Purpose
                             </div>
                    <div class="col-md-12">
                    <input class="" type="radio" name="type" value="New Construction">New Construction &nbsp;&nbsp;
                     <input class="" type="radio" name="type" value="Maintenance">Maintenance
                        </div
                       
                     </div>
                    </div>
                     </div>
                    <br>
                     <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Type of Work
                             </div> 
                    <div class="col-md-12">
                        <div class="form-group">
                            <select name="typeofwork" class="form-control">
                                <option value="0">{{  translate('Type of work') }}</option>
                                 <option value="Flooring">{{  translate('Flooring') }}</option>
                                <option value="Painting">{{  translate('Painting') }}</option>
                                <option value="Plumbing">{{  translate('Plumbing') }}</option>
                                <option value="Carpenter">{{  translate('Carpenter') }}</option>
                                
                                <option value="Technicians">{{  translate('A/C Technicians') }}</option>
                                <option value="Glass & Mirrors">{{  translate('Glass & Mirrors') }}</option>
                                <option value="Concrete Repairs">{{  translate('Concrete Repairs') }}</option>
                                <option value="Facades">{{  translate('Facades') }}</option>
                                <option value="Waterproofing">{{  translate('Waterproofing') }}</option>
                                <option value="Tiles">{{  translate('Tiles') }}</option>
                                <option value="Sealants">{{  translate('Sealants') }}</option>
                            </select>
                        </div>
                    </div>
                       </div>
                    </div>
                  
                     
                     <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Enter Your Name
                             </div> 
                          <div class="col-md-12">
                          <div class="form-group">
                          <input type="text" class="form-control" value="" placeholder="{{  translate('Name') }}" name="name">
                        </div>
                    </div>
                    </div>
                    </div>
                  
                    
                     <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Enter Contact No
                             </div>  
                    <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" value="" placeholder="{{  translate('Contact No') }}" name="mobile" required>
                        </div>
                    </div>
                     </div>
                    </div>
                   
                    
                   <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Enter Email Address
                         </div>  
                        <div class="form-group col-md-12">
                          <input type="text" class="form-control" value="" placeholder="{{  translate('Email') }}" name="email" required>
                        </div>
                    </div>
                    </div>
                     
                     
                     <div class="row">
                     <div class="col-md-12">
                        <div class="col-md-4">
                            Enter Your Address
                        </div> 
                        <div class="form-group col-md-12">
                          <textarea class="form-control" value="" placeholder="{{  translate('Enter Your Address') }}" name="address" required>
                          </textarea>
                        </div>
                     </div>
                     </div>
                    
        </div>
                 <div class="col-md-5">
                        <img class="mw-100 mx-auto mb-4 formimage" src="https://constructionproducts.org/public/assets/img/skilled.jpg" style="width: 100%;
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
         </div>        
                </div> 
               
            </form>                
        </div>
    </div>
</section>

@endsection

