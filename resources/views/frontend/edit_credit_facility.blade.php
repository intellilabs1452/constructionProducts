@extends('frontend.layouts.app')

@section('content')

    <section class="gry-bg py-4">
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-8 col-lg-8 col-md-12 mx-auto">
                        <div class="card">
                            <div class="text-center pt-4">
                                <h1 class="h4 fw-600">
                                    {{ translate('Edit Credit Facility Form.')}}
                                </h1>
                             
                            </div>
                            <div class="px-3 py-3 py-lg-4">
                                <div class="">
                                 <form id="reg2-form" class="form-default" role="form" action="{{ route('user.updateregister2') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                         <input type="hidden" name="user_id"  value="{{ $id }}">
                                          <input type="hidden" name="id"  value="{{ $user->id }}">
                                          
                                           <div class="form-group">
                                            <input type="text" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" value="{{ $user->company_name }}" placeholder="{{  translate('Company Name') }}" name="company_name">
                                            @if ($errors->has('company_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('company_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                     <div class="form-group">
                                            <input type="text" class="form-control{{ $errors->has('street_address') ? ' is-invalid' : '' }}" value="{{ $user->street_address }}" placeholder="{{  translate('Street address') }}" name="street_address">
                                            @if ($errors->has('street_address'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('street_address') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="row">
                                                                                <div class="form-group col-md-6">
                                            <input type="text" class="form-control{{ $errors->has('postbox') ? ' is-invalid' : '' }}" value="{{ $user->postbox }}" placeholder="{{  translate('Post Box') }}" name="postbox">
                                            @if ($errors->has('postbox'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('postbox') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group col-md-6">
                                            <select name="emirate" class="form-control{{ $errors->has('emirate') ? ' is-invalid' : '' }}">
                                                <option value="0">{{  translate('Select Emirate') }}</option>
                                                @foreach ($emirates as $key => $value)
                        
                            <option value="{{ $value->id }}" @if($user->emirate == $value->id) selected  @endif>{{ $value->name }} </option>
                       
                    @endforeach
                                            </select>
                                            @if ($errors->has('emirate'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('emirate') }}</strong>
                                                </span>
                                            @endif
                                        </div>


</div>

  <div class="row">
                                                                                <div class="form-group col-md-6">
                                           
                                        <select name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}">
                                                <option value="0">{{  translate('Select Country') }}</option>
                                                 @foreach ($country as $key => $value)
                        
                            <option value="{{ $value->id }}"  @if($user->country == $value->id) selected  @endif>{{ $value->name }} </option>
                       
                    @endforeach
                                            </select>
                                            @if ($errors->has('country'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control{{ $errors->has('office_email') ? ' is-invalid' : '' }}" value="{{ $user->office_email }}" placeholder="{{  translate('Office Email') }}" name="office_email">
                                            @if ($errors->has('office_email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('office_email') }}</strong>
                                                </span>
                                            @endif
                                        </div>


</div>

 <div class="row">
                                                                                <div class="form-group col-md-6">
                                            <input type="text" class="form-control{{ $errors->has('office_telephone') ? ' is-invalid' : '' }}" value="{{ $user->office_telephone }}" placeholder="{{  translate('Office Telephone') }}" name="office_telephone">
                                            @if ($errors->has('office_telephone'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('office_telephone') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control{{ $errors->has('office_fax') ? ' is-invalid' : '' }}" value="{{ $user->office_fax }}" placeholder="{{  translate('Office Fax') }}" name="office_fax">
                                            @if ($errors->has('office_fax'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('office_fax') }}</strong>
                                                </span>
                                            @endif
                                        </div>


</div>
 <div class="row">
 <div class="form-group col-md-6">
                            <div class="input-group" data-toggle="aizuploader" data-type="document">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}
                                    </div>
                                </div>
                                <div class="form-control">{{ translate('Trade License No') }}</div>
                                <input type="hidden" name="trade_license" class="selected-files" value="{{ $user->trade_license }}">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                            </div>
                            <div class="form-group col-md-6">
                                        
                                            <input type="text" placeholder="Validity" name="trade_license_validity" class="form-control{{ $errors->has('trade_license_validity') ? ' is-invalid' : '' }}" value="{{ $user->trade_license_validity }}">
                                                
                                            @if ($errors->has('trade_license_validity'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('trade_license_validity') }}</strong>
                                                </span>
                                            @endif
                                        </div>
 </div>
                            
                            <div class="row">
 <div class="form-group col-md-6">
                            <div class="input-group" data-toggle="aizuploader" data-type="document">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}
                                    </div>
                                </div>
                                <div class="form-control">{{ translate('Chamber Of Commerce') }}</div>
                                <input type="hidden" name="chamber_of_commerce" class="selected-files" value="{{ $user->chamber_of_commerce }}">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                            </div>
                            <div class="form-group col-md-6">
                                         
                                             <input type="text" placeholder="Validity" name="coc_validity" class="form-control{{ $errors->has('coc_validity') ? ' is-invalid' : '' }}" value="{{ $user->coc_validity }}">
                                              
                                            @if ($errors->has('coc_validity'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('coc_validity') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                            </div>
                            
                            <div class="row">
 <div class="form-group col-md-6">
                            <div class="input-group" data-toggle="aizuploader" data-type="document">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}
                                    </div>
                                </div>
                                <div class="form-control">{{ translate('VAT Certificate No') }}</div>
                                <input type="hidden" name="vat_certificate_no" class="selected-files" value="{{ $user->vat_certificate_no }}">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                            </div>
                            <div class="form-group col-md-6">
                                          
                                             <select name="vat_typeof_industry" class="form-control{{ $errors->has('vat_typeof_industry') ? ' is-invalid' : '' }}">
                                                <option value="0">{{  translate('Select Type of Industry') }}</option>
                                                  @foreach ($typeofindustry as $key => $value)
                        
                            <option value="{{ $value->id }}"  @if($user->vat_typeof_industry == $value->id) selected  @endif>{{ $value->type }} </option>
                       
                    @endforeach
                                            </select>
                                            @if ($errors->has('vat_typeof_industry'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('vat_typeof_industry') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                            </div>
                            <div class="row">
                                                                                <div class="form-group col-md-6">
                                            <input type="text" class="form-control{{ $errors->has('sister_companies') ? ' is-invalid' : '' }}" value="{{ $user->sister_companies }}" placeholder="{{  translate('Sister Companies/ Group Name') }}" name="sister_companies">
                                            @if ($errors->has('sister_companies'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('sister_companies') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group col-md-6">
                                          
                                            <select name="sister_companies_type" class="form-control{{ $errors->has('sister_companies_type') ? ' is-invalid' : '' }}">
                                                <option value="0">{{  translate('Select type of Business') }}</option>
                                                 @foreach ($typeofbusiness as $key => $value)
                        
                            <option value="{{ $value->id }}" @if($user->sister_companies_type == $value->id) selected  @endif>{{ $value->type }} </option>
                       
                    @endforeach
                                            </select>
                                            @if ($errors->has('sister_companies_type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('sister_companies_type') }}</strong>
                                                </span>
                                            @endif
                                        </div>


</div> 

                            <div class="row">
                                                                                <div class="form-group col-md-6">
                                            <input type="text" class="form-control{{ $errors->has('trade_ref') ? ' is-invalid' : '' }}" value="{{ $user->trade_ref }}" placeholder="{{  translate('Trade References/Person Name') }}" name="trade_ref">
                                            @if ($errors->has('trade_ref'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('trade_ref') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control{{ $errors->has('trade_ref_tel') ? ' is-invalid' : '' }}" value="{{ $user->trade_ref_tel }}" placeholder="{{  translate('Telephone no') }}" name="trade_ref_tel">
                                            @if ($errors->has('trade_ref_tel'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('trade_ref_tel') }}</strong>
                                                </span>
                                            @endif
                                        </div>


</div> 

                             <div class="row">
                                                                                <div class="form-group col-md-6">
                                             <select name="credit_facility_required" class="form-control{{ $errors->has('credit_facility_required') ? ' is-invalid' : '' }}">
                                                <option value="0">{{  translate('Credit Facility Required') }}</option>
                                                <option value="yes" @if($user->credit_facility_required == 'yes') selected  @endif>{{  translate('Yes') }}</option>
                                                <option value="no" @if($user->credit_facility_required == 'no') selected  @endif>{{  translate('No') }}</option>
                                            </select>
                                            @if ($errors->has('credit_facility_required'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('credit_facility_required') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group col-md-6">
                                             <select name="credit_period" class="form-control{{ $errors->has('credit_period') ? ' is-invalid' : '' }}">
                                                <option value="0">{{  translate('Select Credit Period') }}</option>
                                                  <option value="30" @if($user->credit_period == '30') selected  @endif>{{ translate('30 Days') }}</option>
                                                <option value="60" @if($user->credit_period == '60') selected  @endif>{{  translate('60 Days') }}</option>
                                                <option value="90" @if($user->credit_period == '90') selected  @endif>{{  translate('90 Days') }}</option>
                                                  <option value="120" @if($user->credit_period == '120') selected  @endif>{{  translate('120 Days') }}</option>
                                                
                                            </select>
                                            @if ($errors->has('credit_period'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('credit_period') }}</strong>
                                                </span>
                                            @endif
                                        </div>


</div>

                             <div class="row">
                                            <div class="form-group col-md-12">
                                            <input type="text" class="form-control{{ $errors->has('initial_credit_limit') ? ' is-invalid' : '' }}" value="{{ $user->initial_credit_limit }}" placeholder="{{  translate('Initial Credit Limit(AED)') }}" name="initial_credit_limit">
                                            @if ($errors->has('initial_credit_limit'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('initial_credit_limit') }}</strong>
                                                </span>
                                            @endif
                                        </div>

</div>
                                      

  <div class="row">
 <div class="form-group col-md-12">
                              <select name="credit_terms" class="form-control{{ $errors->has('credit_terms') ? ' is-invalid' : '' }}">
                                                <option value="0">{{  translate('Select Terms') }}</option>
                                                  @foreach ($creditterms as $key => $value)
                        
                            <option value="{{ $value->id }}" @if($user->credit_terms == $value->id) selected  @endif>{{ $value->term }} </option>
                       @endforeach
                                            </select>
                                            @if ($errors->has('credit_terms'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('credit_terms') }}</strong>
                                                </span>
                                            @endif
                                      
                            </div>
                          
                            </div>
                            
                              <div class="row">
 <div class="col-md-6">
                            <div class="input-group" data-toggle="aizuploader" data-type="document">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}
                                    </div>
                                </div>
                                <div class="form-control">{{ translate('Personnel Business Card') }}</div>
                                <input type="hidden" name="authorized_person" class="selected-files" value="{{ $user->authorized_person }}>
                            </div>
                            <div class="file-preview box sm">
                            </div>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="designation" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}">
                                                <option value="0">{{  translate('Select Designation') }}</option>
                                                  @foreach ($designation as $key => $value)
                        
                            <option value="{{ $value->id }}" @if($user->credit_terms == $value->id) selected  @endif>{{ $value->name }} </option>
                       @endforeach
                                 </select>
                                            @if ($errors->has('designation'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('designation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                            </div>

 <div class="row">
                                                                                <div class="form-group col-md-6">
                                            <input type="text" class="form-control{{ $errors->has('authorized_office_email') ? ' is-invalid' : '' }}" value="{{ $user->authorized_office_email }}" placeholder="{{  translate('Office Email') }}" name="authorized_office_email">
                                            @if ($errors->has('authorized_office_email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('authorized_office_email') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control{{ $errors->has('authorized_tel_no') ? ' is-invalid' : '' }}" value="{{ $user->authorized_tel_no }}" placeholder="{{  translate('Tel no') }}" name="authorized_tel_no">
                                            @if ($errors->has('authorized_tel_no'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('authorized_tel_no') }}</strong>
                                                </span>
                                            @endif
                                        </div>


</div>

 <div class="row">
       <div class="form-group col-md-12">
           <h4 style="align:center">Agreement</h4>
         1. By submitting this application, I authorize <a href="cs.intellilabs.in">constructionproducts.ae</a> to make enquiries into the banking and business/trade references that you have supplied.
         <br>2.	All invoices are to be paid within agreed Credit Period. 
         <br>3.	I authorize <a href="cs.intellilabs.in">constructionproducts.ae</a> to stop deliveries if there is overdue payment exceeding 7 days from the agreed credit period.
         <br>4.	I agree to allow constructionproducts.ae to communicate electronically at the email and phone number provided. 
         <br>5.	I agree that I am responsible for providing any updates on the changes if any to Trade/commercial licence documents and to the information provided in this documents related to business address , personnel name etc.</div>
       </div>
       
       <div class="row">
            <div class="form-group col-md-12">
                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $user->name }}">
            </div>
             <div class="form-group col-md-12">
                <input type="text" name="user_designation" placeholder="Designation" class="form-control" value="{{ $user->user_designation }}">
            </div>
             <div class="form-group col-md-6">
                <input type="date" name="registration_date" placeholder="Date" class="form-control" value="{{ $user->registration_date }}">
            </div>
             <div class="form-group col-md-6">
                <input type="text" name="place" placeholder="Place" class="form-control" value="{{ $user->place }}">
            </div>
           

      </div>  

  <div style="float:right">
       <button type="submit" class="btn btn-primary btn-block fw-600">{{  translate('Update') }}</button>
  </div>
                                        

                                      
                                    </form>
                                  
                              
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
    @if(get_setting('google_recaptcha') == 1)
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif

    <script type="text/javascript">

        @if(get_setting('google_recaptcha') == 1)
        // making the CAPTCHA  a required field for form submission
        $(document).ready(function(){
            // alert('helloman');
            $("#reg-form").on("submit", function(evt)
            {
                var response = grecaptcha.getResponse();
                if(response.length == 0)
                {
                //reCaptcha not verified
                    alert("please verify you are humann!");
                    evt.preventDefault();
                    return false;
                }
                //captcha verified
                //do the rest of your validations here
                $("#reg-form").submit();
            });
        });
        @endif

        var isPhoneShown = true,
            countryData = window.intlTelInputGlobals.getCountryData(),
            input = document.querySelector("#phone-code");

        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            if(country.iso2 == 'bd'){
                country.dialCode = '88';
            }
        }

        var iti = intlTelInput(input, {
            separateDialCode: true,
            utilsScript: "{{ static_asset('assets/js/intlTelutils.js') }}?1590403638580",
            onlyCountries: @php echo json_encode(\App\Country::where('status', 1)->pluck('code')->toArray()) @endphp,
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                if(selectedCountryData.iso2 == 'bd'){
                    return "01xxxxxxxxx";
                }
                return selectedCountryPlaceholder;
            }
        });

        var country = iti.getSelectedCountryData();
        $('input[name=country_code]').val(country.dialCode);

        input.addEventListener("countrychange", function(e) {
            // var currentMask = e.currentTarget.placeholder;

            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);

        });

        function toggleEmailPhone(el){
            if(isPhoneShown){
                $('.phone-form-group').addClass('d-none');
                $('.email-form-group').removeClass('d-none');
                isPhoneShown = false;
                $(el).html('{{ translate('Use Phone Instead') }}');
            }
            else{
                $('.phone-form-group').removeClass('d-none');
                $('.email-form-group').addClass('d-none');
                isPhoneShown = true;
                $(el).html('{{ translate('Use Email Instead') }}');
            }
        }
    </script>
@endsection
