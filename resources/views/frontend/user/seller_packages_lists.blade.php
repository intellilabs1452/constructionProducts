

@extends('frontend.layouts.app')
<style>

.columns {
  float: left;
  width: 25%;
  padding: 8px;
  background:white;
  box-shadow: 0 0 10px #ababab;
  transition: all .5s ease 0s;
}

.price {
  list-style-type: none;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgb(217 83 79 / 53%);
  transform: scale(1.05);
}

.price .header4 {
  background-color: #ff4b4b;
  color: white;
  font-size: 25px;
  text-align: center !important;
  border-radius: 10px 10px 50% 50%;
    transition: all .5s ease 0s;
}
.price .header1 {
  background-color: #ff9624;
  color: white;
  font-size: 25px;
  text-align: center !important;
  border-radius: 10px 10px 50% 50%;
    transition: all .5s ease 0s;
}
.price .header2 {
  background-color: #40c952;
  color: white;
  font-size: 25px;
  text-align: center !important;
  border-radius: 10px 10px 50% 50%;
    transition: all .5s ease 0s;
}.price .header3 {
  background-color: #4b64ff;
  color: white;
  font-size: 25px;
  text-align: center !important;
  border-radius: 10px 10px 50% 50%;
    transition: all .5s ease 0s;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 8px;
  text-align: left;
  font-size:14px !important;
  background-color:white;
}

.price .grey4 {
 
    
    font-size: 25px !important;
    text-align: center;
    color: #ff4b4b;
}
.btn_buy1
{
    background-color: #ff9624 !important;
      border: #ff9624 !important;
}
.btn_buy2
{
    background-color: #40c952 !important;
     border: #40c952 !important;
}
.btn_buy3
{
    background-color: #4b64ff !important;
     border: #4b64ff !important;
    
}
.btn_buy4{
    background-color: #ff4b4b !important;
    border: #ff4b4b !important;
}
.price .grey1 {
 
    
    font-size: 25px !important;
    text-align: center;
    color: #ff9624;
}.price .grey2 {
 
   
    font-size: 25px !important;
    text-align: center;
    color: #40c952;
}.price .grey3 {
 
    
    font-size: 25px !important;
    text-align: center;
    color: #4b64ff;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}


@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
@section('content')
<section class="py-8 text-white" style="background:rgb(217 83 79 / 51%);padding: 20px 0px 27px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto text-center">
                <h1 class="mb-0 fw-700">{{ translate('Premium Packages for Sellers') }}</h1>
            </div>
        </div>
    </div>
</section>

<section class="py-4 py-lg-5">
    <div class="container" hidden>
         @php
              $packageid=Auth::user()->seller_package_id;
            @endphp
         <div class="col-md-12" hidden><b>
             <table style="width:100%">
                 
                 <tr><td width="37%"></td>
                    @foreach ($seller_packages as $key => $seller_package)
                     <td> <img style="margin-left:-20px !important" class="mw-100 mx-auto mb-4" src="{{ uploaded_asset($seller_package->logo) }}" height="100"> <h5 class="mb-3 h5 fw-600" style="margin-top:-20px;color:red;margin-left:-20px">{{strtoupper($seller_package->name)}}</h5></td>
                    @endforeach
                 </tr>
                 <tr>
                   <td>Categories/Products</td>
                   <td >All</td><td>2</td><td>4</td><td>8</td>
                 </tr>
                 
                 <tr>
                   <td>Locations</td>
                   <td>All</td><td>4</td><td>2</td><td>1</td>
                 </tr>
                 
                 <tr>
                   <td>Subscription Payment Flexibility</td>
                   <td><i class="las la-check checkgreen " aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                 </tr>
                 
                  <tr>
                   <td>Upload of brochures</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td>Restricted</td>
                   <td>Restricted</td>
                  </tr>
                  
                   <tr>
                   <td>Upload of Video links</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Flash Deals</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Newsletter/blog-Yes</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Prominent Display of Logo in Home Page and all searches</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-close closered" aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Reports - Sales</td>
                   <td><i class="la la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check checkgreen"  aria-hidden="true"></i></td>
                   <td><i class="la la-check checkgreen"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Stock/inventory display</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Wishlist of customers</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Customer searches</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Product reviews</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Online Store</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Project Details</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Technical Query/Ref</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Purchase History</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Product bulk upload</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Compare</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   <td><i class="la la-close closered"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Business settings</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Payment History</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   </tr>
                   
                   <tr>
                   <td>Manage Profile</td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="las la-check checkgreen" aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   <td><i class="la la-check"  aria-hidden="true"></i></td>
                   </tr>
                   
                   
                  
                 
         <tr> 
         <td> 
         
         </td>   
             <div style=" margin-left: -117px;">
       <!-- <div class="row row-cols-xxl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gutters-10 justify-content-center">-->
           
            @foreach ($seller_packages as $key => $seller_package)
             @php
             if($seller_package->id==$packageid)
             {
             $text="background-color:#898282;";
             $disable="disabled";
             }
             else
             {
             $text="";
             $disable="";
             }
              @endphp
              
           
        <td>
          <div class="col" style="margin-left: -60px;">
                   
                        <div>
                            
                           
                            <div class="">
                               @if ($seller_package->amount == 0)
                                    <span style="margin-left: 32px;">{{ translate('Free') }}</span>
                                @else
                                    <span style="margin-left: 14px;">{{ single_price($seller_package->amount) }}</span>
                                @endif
</div>
                           
                            <div >
                                @if ($seller_package->amount == 0)
                                    <button class="btn btn-primary" onclick="get_free_package({{ $seller_package->id}})" style="padding: 11px;{{$text}}" {{$disable}}>{{ translate('BUY NOW')}}</button>
                                @else
                                    @if (addon_is_activated('offline_payment') )
                                        <button class="btn btn-primary" onclick="select_payment_type({{ $seller_package->id}})" >{{ translate('BUY NOW')}}</button>
                                    @else
                                        <button class="btn btn-primary" onclick="show_price_modal({{ $seller_package->id}})" style="padding: 11px;{{$text}}" {{$disable}}>{{ translate('BUY NOW')}}</button>
                                    @endif
                                @endif
                            </div>
                            
                            
                        </div>
                    
            </div>
          
        </td>
            @endforeach
            
        </div></div>
        </tr>  
         </table></b>
            </div>
    </div>
  @php
    $packageid=Auth::user()->seller_package_id;
     $i=0;
  @endphp   
  <div class="container">
  @foreach ($seller_packages as $key => $seller_package)
 
     @php
      $i++;
      
             if($seller_package->id==$packageid)
             {
             $text="background-color:#898282;";
             $disable="disabled";
             }
             else
             {
             $text="";
             $disable="";
             }
     @endphp
    <div class="columns">
    <ul class="price">
    <li class="header{{$i}}"><img style="margin-left:-20px !important" class="mw-100 mx-auto mb-4" src="{{ uploaded_asset($seller_package->logo) }}" height="100"> <h5 style="margin-top:-20px;color:white;margin-left:-20px"><b>{{strtoupper($seller_package->name)}}</b></h5></li>
    <li class="grey{{$i}}" ><b>@if ($seller_package->amount == 0)
                                    <span>{{ translate('Free') }}</span>
                                @else
                                    <span>{{ single_price($seller_package->amount) }}</span>
                                @endif</b></li>
                                 @php $j=0;  @endphp 
    @foreach (json_decode($seller_package->permissions) as $key => $element)
   
     @php  $j++;
     if($element->value=='yes')
     {
     $element->value='';
     $style="yes";
     }
      elseif($element->value=='no')
     {
     $element->value='';
     $style="no";
     }
     else
     {
      $style="";
     }
     
     if(($j % 2) == 0){ 
      $bgcolor="background:#f3f3f3";
      }
      else
      {
      $bgcolor="background:white";
      }
     @endphp 
    <li style="{{$bgcolor}}">{{$element->name}}-<b>{{$element->value}}</b> @if($style=="yes")<i class="las la-check checkgreen" style="font-weight:bold" aria-hidden="true"></i>@elseif($style=="no")<i class="la la-close closered"  aria-hidden="true"></i>@endif</li>
    @endforeach
    <li class="grey"> @if ($seller_package->amount == 0)
                                    <button class="btn btn-primary btn_buy{{$i}}" onclick="get_free_package({{ $seller_package->id}})" style="padding: 11px;{{$text}}" {{$disable}}>{{ translate('PURCHASE PACKAGE')}}</button>
                                @else
                                    @if (addon_is_activated('offline_payment') )
                                        <button class="btn btn-primary" onclick="select_payment_type({{ $seller_package->id}})" >{{ translate('PURCHASE PACKAGE')}}</button>
                                    @else
                                        <button class="btn btn-primary btn_buy{{$i}}" onclick="show_price_modal({{ $seller_package->id}})" style="padding: 11px;{{$text}}" {{$disable}}>{{ translate('PURCHASE PACKAGE')}}</button>
                                    @endif
                                @endif</li>
  </ul>
</div>
@endforeach
</div>
</section>

@endsection

@section('modal')

    <!-- Select Payment Type Modal -->
    <div class="modal fade" id="select_payment_type_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Select Payment Type') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="package_id" name="package_id" value="">
                    <div class="row">
                        <div class="col-md-2">
                            <label>{{ translate('Payment Type')}}</label>
                        </div>
                        <div class="col-md-10">
                            <div class="mb-3">
                                <select class="form-control aiz-selectpicker" onchange="payment_type(this.value)"
                                        data-minimum-results-for-search="Infinity">
                                    <option value="">{{ translate('Select One')}}</option>
                                    <option value="online">{{ translate('Online payment')}}</option>
                                    <option value="offline">{{ translate('Offline payment')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1" id="select_type_cancel" data-dismiss="modal">{{translate('Cancel')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Online payment Modal -->
    <div class="modal fade" id="price_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Purchase Your Package') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="" id="package_payment_form" action="{{ route('seller_packages_list.purchase') }}" method="post">
                    @csrf
                    <input type="hidden" name="seller_package_id" value="">
                    <div class="modal-body gry-bg px-3 pt-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>{{ translate('Payment Method')}}</label>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <select class="form-control selectpicker" data-live-search="true" name="payment_option">
                                        @if (get_setting('paypal_payment') == 1)
                                            <option value="paypal">{{ translate('Paypal')}}</option>
                                        @endif
                                        @if (get_setting('stripe_payment') == 1)
                                            <option value="stripe">{{ translate('Stripe')}}</option>
                                        @endif
                                        @if(get_setting('sslcommerz_payment') == 1)
                                            <option value="sslcommerz">{{ translate('sslcommerz')}}</option>
                                        @endif
                                        @if(get_setting('instamojo_payment') == 1)
                                            <option value="instamojo">{{ translate('Instamojo')}}</option>
                                        @endif
                                        @if(get_setting('razorpay') == 1)
                                            <option value="razorpay">{{ translate('RazorPay')}}</option>
                                        @endif
                                        @if(get_setting('paystack') == 1)
                                            <option value="paystack">{{ translate('PayStack')}}</option>
                                        @endif
                                        @if(get_setting('voguepay') == 1)
                                            <option value="voguepay">{{ translate('Voguepay')}}</option>
                                        @endif
                                        @if(get_setting('payhere') == 1)
                                            <option value="payhere">{{ translate('Payhere')}}</option>
                                        @endif
                                        @if(get_setting('ngenius') == 1)
                                            <option value="ngenius">{{ translate('Ngenius')}}</option>
                                        @endif
                                        @if(get_setting('iyzico') == 1)
                                            <option value="iyzico">{{ translate('Iyzico')}}</option>
                                        @endif
                                        @if(get_setting('proxypay') == 1)
                                            <option value="proxypay">{{ translate('Proxypay')}}</option>
                                        @endif
                                        @if(get_setting('nagad') == 1)
                                            <option value="nagad">{{ translate('Nagad')}}</option>
                                        @endif
                                        @if(get_setting('bkash') == 1)
                                            <option value="bkash">{{ translate('Bkash')}}</option>
                                        @endif
                                        @if(addon_is_activated('african_pg'))
                                            @if(get_setting('mpesa') == 1)
                                                <option value="mpesa">{{ translate('Mpesa')}}</option>
                                            @endif
                                            @if(get_setting('flutterwave') == 1)
                                                <option value="flutterwave">{{ translate('Flutterwave')}}</option>
                                            @endif
                                            @if (get_setting('payfast') == 1)
                                              <option value="payfast">{{ translate('PayFast')}}</option>
                                            @endif
                                            
                                        @endif
                                         <option value="offline">{{ translate('Offline')}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <button type="button" class="btn btn-sm btn-secondary transition-3d-hover mr-1" data-dismiss="modal">{{translate('Cancel')}}</button>
                            <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">{{translate('Confirm')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- offline payment Modal -->
    <div class="modal fade" id="offline_customer_package_purchase_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ translate('Offline Package Purchase ') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="offline_customer_package_purchase_modal_body"></div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        function select_payment_type(id) {
            $('input[name=package_id]').val(id);
            $('#select_payment_type_modal').modal('show');
        }

        function payment_type(type) {
            var package_id = $('#package_id').val();
            if (type == 'online') {
                $("#select_type_cancel").click();
                show_price_modal(package_id);
            } else if (type == 'offline') {
                $("#select_type_cancel").click();
                $.post('{{ route('offline_customer_package_purchase_modal') }}', {
                    _token: '{{ csrf_token() }}',
                    package_id: package_id
                }, function (data) {
                    $('#offline_customer_package_purchase_modal_body').html(data);
                    $('#offline_customer_package_purchase_modal').modal('show');
                });
            }
        }

        function show_price_modal(id) {
            $('input[name=seller_package_id]').val(id);
            $('#price_modal').modal('show');
        }


        function get_free_package(id) {
            $('input[name=seller_package_id]').val(id);
            $('#package_payment_form').submit();
        }
    </script>
@endsection
