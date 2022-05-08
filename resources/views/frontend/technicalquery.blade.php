@extends('frontend.layouts.app')

@section('content')
<style>
    .bootstrap-select{border: 1px solid #88888b;}
    
</style>
<section class="pt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4" style="color:#d9534f">{{ translate('Technical Query Form') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('technicalquery') }}">"{{ translate('Technical Query') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container" >
        
        <div class="bg-white shadow-sm rounded px-3 pt-3" style="box-shadow: 3px 4px 15px #e7bebd !important;
    border-radius: 10px !important;">
            <form id="reg2-form" class="form-default" role="form" action="{{ route('technicalquerysubmit') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                    <div class="row">
               <div class="col-md-7">
                   
                     <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Email ID
                             </div> 
                          <div class="col-md-12">
                          <div class="form-group">
                              @php
                                if(Auth::check())
                                $email=auth()->user()->email;
                                else
                                $email='';
                              @endphp
                          <input type="email" class="form-control" value="{{$email}}" placeholder="{{  translate('Enter Email Id') }}" name="emailid">
                        </div>
                    </div>
                    </div>
                    </div>
                      
                     <div class="row">
                     <div class="col-md-12">
                            <div class="col-md-4">
                            Select Category 
                             </div>
                        <div class="form-group col-md-12" style="border:none" >
                           <select class="form-control aiz-selectpicker cat" name="category_id" id="category_id"
                                data-live-search="true" required>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" style="font-weight:bold;background-color:#891638;color:white">{{ $category->getTranslation('name') }}</option>
                                @foreach ($category->childrenCategories as $childCategory)
                                @include('categories.child_category', ['child_category' => $childCategory])
                                @endforeach
                                @endforeach
                            </select>
                       
                        </div>
                    </div>
                    </div>
                    
                  
                    
                    
                  
                     
                     <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Project Name
                             </div> 
                          <div class="col-md-12">
                          <div class="form-group">
                          <input type="text" class="form-control" value="" placeholder="{{  translate('Enter Project Name') }}" name="name">
                        </div>
                    </div>
                    </div>
                    </div>
                  
                    
                     <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Client
                             </div>  
                    <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" value="" placeholder="{{  translate('Enter Client Name') }}" name="client" required>
                        </div>
                    </div>
                     </div>
                    </div>
                   
                    
                   <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Consultant
                         </div>  
                        <div class="form-group col-md-12">
                          <input type="text" class="form-control" value="" placeholder="{{  translate('Enter Consultant Name') }}" name="consultant" required>
                        </div>
                    </div>
                    </div>
                    
                     <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Contractor
                         </div>  
                        <div class="form-group col-md-12">
                          <input type="text" class="form-control" value="" placeholder="{{  translate('Enter Contractor Name') }}" name="contractor" required>
                        </div>
                    </div>
                    </div>
                     
                     
                     <div class="row">
                     <div class="col-md-12">
                        <div class="col-md-4">
                           Briefly Describe the requirement
                        </div> 
                        <div class="form-group col-md-12">
                          <textarea class="form-control" value="" placeholder="{{  translate('Briefly Describe the requirement') }}" name="description" required>
                          </textarea>
                        </div>
                     </div>
                     </div>
                    
         <div class="row">
                     <div class="col-md-12">
                         <div class="col-md-4">
                            Upload Specification, drawings, photos if any		 </div>  
                        <div class="form-group col-md-12">
                          <input type="file" class="form-control" value=""  name="doct" >
                        </div>
                    </div>
                    </div>
                         
                
              
       
      
       
         </div> 
     
         <div class="col-md-5">
                        <img class="mw-100 mx-auto mb-4 formimage" src="https://constructionproducts.org/public/assets/img/technical-support.png" style="width: 100%;
    margin-top: 140px;">
                         </div>
                </div> 
                
                <div class="row">
               <div class="form-group col-md-12">
               <div class="mb-3">
               <label class="aiz-checkbox"> <input type="checkbox" name="agreement" required><span>{{ translate('I agree that my personal information is used for direct marketing of constructionproducts.ae and their partners products and services.')}}</span><span class="aiz-square-check"></span></label>
            </div>
         1.  <b>Constructionproducts.ae</b> will process your personal data for the purpose of (a) creating an account.
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

