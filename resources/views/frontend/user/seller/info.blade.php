@extends('frontend.layouts.app')

@section('content')
<style>
.image{
    box-shadow: 3px 4px 15px #e7bebd !important;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
}

</style>
<div class="container">
    <div class="aiz-titlebar mt-2 mb-4">
      
      <div class="row align-items-center">
        <div class="col-md-12">
            <h1 class="h2" style="font-size:18px;float:right"><b>
               <a href="{{route('createshop')}}" class="btn btn-primary btn-sm" target="_blank" style="font-size: 14px;background-color:#891638 !important">{{ translate('Go to Registration form')}}</a>
                </b>
            </h1>
        </div>
      </div>
    </div>
</div>
    {{-- Basic Info --}}
    <div class="container">
    <div class="card">
        
        <div class="card-header">
            <h5 class="mb-0 h6" style="font-size:18px;color:#891638"><i><b>{{ translate('Connect your Business , Get started today!!') }}</b></i>-How it works?</h5>
            
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <p style="text-align:left;font-size:18px"><b>Constructionproducts.ae</b> have simplified the day to day business of selling Construction Products with the power of technology. 
 Connect your Business makes it easy to connect with Customers even in remote areas  and do business through our e-platform website or mobile app.
</p>
            </div>
            <div class="col-lg-3">
                <figure>
                            <img class="image" style="height:160px;width:100%" src="https://constructionproducts.org/public/assets/images/aerial-view-business-team.jpg" alt="">
                        </figure>
            </div>
            <div class="col-lg-3">
                <figure>
                            <img class="image"  style="height:160px;width:100%" src="https://constructionproducts.org/public/assets/images/corporate-business-handshake-partners.jpg" alt="">
                        </figure>
            </div>
        </div>
          
        </div>
        
        <div class="card-header">
            <h5 class="mb-0 h6" style="font-size:18px;color:#891638"><i><b>{{ translate('Showcase your Products and Solutions.') }}</b></i></h5>
            
        </div>
        
        <div class="card-body" >
             <div class="row">
        <div class="col-lg-6 col-xl-6">
          <p style="text-align:left;font-size:18px"><b>Constructionproducts.ae</b> makes it easy and conveneint for the Customers to see your products at the comfort of their home, office or site. 
Our e-platform provides you with the option to upload, update and modify your Product details including images, stock status, set special prices based on Minimum Order Quantity, Flexibility of pay
ment options and provide daily deals or promotions.</p>
        </div>
             <div class="col-lg-3">
                <figure>
                            <img class="image" style="height:160px;width:100%" src="https://constructionproducts.org/public/assets/images/info1.png" alt="">
                        </figure>
            </div>
            <div class="col-lg-3">
                <figure>
                            <img class="image" style="height:160px;width:100%" src="https://constructionproducts.org/public/assets/images/info2.png" alt="">
                        </figure>
            </div>
            </div>
        </div>
            
        <div class="card-body">  <div class="row"> 
               <div class="col-lg-6">
    

<p style="text-align:left;font-size:18px"><b>Constructionproducts.ae</b> give you many options to increase your sales. Our mission is to connect the customer with your business.
You have the option to sell at set prices based on quantity or to give the choice for the customer to negotiate directly with you. This makes it convenient and stress free for you to have direct communication with the customer so that you can have the full control  over enquiry, negotiation, payment terms and delivery options, in a way that best suits your business needs.
</p>
        
        
        </div>
            <div class="col-lg-3">
                <figure>
                            <img class="image" style="height:160px;width:100%" src="https://constructionproducts.org/public/assets/images/info4.png" alt="">
                        </figure>
            </div>
             <div class="col-lg-3">
                <figure>
                            <img class="image" style="height:160px;width:100%" src="https://constructionproducts.org/public/assets/images/info3.png" alt="">
                        </figure>
            </div>
          
        </div></div>
  
 
        
    </div>
    
     <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6" style="font-size:18px;color:#891638"><i><b>{{ translate('Step 1') }}</b></i></h5>
            
        </div>
        <div class="card-body">
        <div class="row">
             <div class="col-lg-7 col-md-6 col-sm-6">
                <figure>
                            <img class="stepsicon" src="https://constructionproducts.org/public/assets/images/mobile.png" alt="">
                        </figure>
            </div>
           
        </div>
          <p style="font-size:18px">Visit <a href="constructionproducts.org">Constructionproducts.ae</a>. Create an account in our website, it is fast and free</p>
        </div>
        
        <div class="card-header">
            <h5 class="mb-0 h6" style="font-size:18px;color:#891638"><i><b>{{ translate('Step 2') }}</b></i></h5>
            
        </div>
        <div class="card-body">
             <div class="row">
             <div class="col-lg-7 col-md-6 col-sm-6">
                <figure>
                            <img class="stepsicon" src="https://constructionproducts.org/public/assets/images/subscription.png" alt="">
                        </figure>
            </div>
           
        </div>
          <p style="font-size:18px">Click on Connect your Business. Review the different Package options (Diamond, Platinum,Gold, Silver) and Select the desired package
          </p>
         </div>
          
           <div class="card-header">
            <h5 class="mb-0 h6" style="font-size:18px;color:#891638"><i><b>{{ translate('Step 3') }}</b></i></h5>
            
        </div>
        <div class="card-body" style="font-size:18px">
             <div class="row">
             <div class="col-lg-7 col-md-6 col-sm-6">
                <figure>
                            <img class="stepsicon" src="https://constructionproducts.org/public/assets/images/folder.png" alt="">
                        </figure>
            </div>
           
        </div>
        <div class="steplist">
      Upload copies of 
          <ul>
             <li> Business Trade Licence</li>
 <li>Emirates ID /Passport Copy</li>
 <li>VAT Certificate</li>
 <li>Company Profile (optional)</li>
          </ul></div>
</div>

 <div class="card-header">
            <h5 class="mb-0 h6" style="font-size:18px;color:#891638"><i><b>{{ translate('Step 4') }}</b></i></h5>
            
        </div>
       <div class="card-body" style="font-size:18px">
            <div class="row">
             <div class="col-lg-7 col-md-6 col-sm-6">
                <figure>
                            <img class="stepsicon" src="https://constructionproducts.org/public/assets/images/buy.png" alt="">
                        </figure>
            </div>
           
        </div>
          <p>We will verify your account and confirm for you to start selling !!

          </p>
         </div>
         <div class="card-header">
            <h5 class="mb-0 h6" style="font-size:18px;color:#891638"><i><b>{{ translate('Step 5') }}</b></i></h5>
            
        </div>
       
           <div class="card-body">
        <div class="row">
             <div class="col-lg-7 col-md-6 col-sm-6">
                <figure>
                            <img class="stepsicon" src="https://constructionproducts.org/public/assets/images/approved.png" alt="">
                        </figure>
            </div>
           
        </div>
          <p style="font-size:18px">Upload your Product details and images</p>
        </div>
         
         <div class="col-md-12">
            <h1 class="h2" style="font-size:18px;text-align:center"><b>
               <a href="{{route('createshop')}}" class="btn btn-primary btn-sm" target="_blank" style="font-size: 14px;">{{ translate('Go to Registration form')}}</a>
                </b>
            </h1>
        </div>
    </div>

</div>

@endsection

