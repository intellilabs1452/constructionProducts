@extends('frontend.layouts.user_panel')

@section('panel_content')

<div class="aiz-titlebar mt-2 mb-4">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('Add Your Product') }}</h1>
        </div>
    </div>
</div>
 @php
                    $package_id=Auth::user()->seller_package_id;
                    $packages=App\SellerPermission::where('package_id',$package_id)->first();
                    $permissions=$packages->permissions;
                   
 @endphp
<form class="" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" id="choice_form">
    <div class="row gutters-5">
        <div class="col-lg-8">
            @csrf
            <input type="hidden" name="added_by" value="seller">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Product Information')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Product Name')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="name"
                                placeholder="{{ translate('Product Name') }}" onchange="update_sku()" required>
                        </div>
                    </div>
                    <div class="form-group row" id="category">
                        <label class="col-md-3 col-from-label">{{translate('Category')}}</label>
                        <div class="col-md-8">
                            <select class="form-control aiz-selectpicker" name="category_id" id="category_id"
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
                    <div class="form-group row" id="brand">
                        <label class="col-md-3 col-from-label">{{translate('Brand')}}</label>
                        <div class="col-md-8">
                            <select class="form-control aiz-selectpicker" name="brand_id" id="brand_id"
                                data-live-search="true">
                                <option value="">{{ translate('Select Brand') }}</option>
                                @foreach (\App\Brand::all() as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->getTranslation('name') }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Unit')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="unit"
                                placeholder="{{ translate('Unit (e.g. KG, Pc etc)') }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Minimum Purchase Qty')}}</label>
                        <div class="col-md-8">
                            <input type="number" lang="en" class="form-control" name="min_qty" value="1" min="1"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Tags')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control aiz-tag-input" name="tags[]"
                                placeholder="{{ translate('Type and hit enter to add a tag') }}">
                        </div>
                    </div>
                     <div class="form-group row">
                                 <label class="col-md-3 col-from-label">
                                     {{ translate('Location') }} <span class="text-primary">*</span></label>
                            <div class="col-md-8">
                            <select class="form-control aiz-selectpicker" data-live-search="true" data-selected-text-format="count" name="location[]" id="location" multiple>
                                    @foreach ($locations as $key => $location)
                                    <option value="{{ $location->id }}"
                                        data-content="<span><span>{{ $location->name }}</span></span>"></option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                                         <div class="form-group row" hidden>
                                 <label class="col-md-3 col-from-label">
                                     {{ translate('Segment') }} <span class="text-primary">*</span></label>
                            <div class="col-md-8 new">
                            <select class="form-control aiz-selectpicker segment_id" data-live-search="true" data-selected-text-format="count" name="segment[]" id="segment" multiple data-max-options="{{ $segments->segments}}">
                                    @foreach (\App\Segment::orderBy('name', 'asc')->get() as $key => $segment)
                                    <option value="{{ $segment->id }}"
                                        data-content="<span><span>{{ $segment->name }}</span></span>"></option>
                                    @endforeach
                            </select>
                            </div>
                            </div>
                            
                                                 <div class="form-group row" hidden>
                                 <label class="col-md-3 col-from-label">
                                     {{ translate('Speciality') }} <span class="text-primary">*</span></label>
                            <div class="col-md-8">
                            <select class="form-control aiz-selectpicker" data-live-search="true" data-selected-text-format="count" name="speciality[]" id="speciality" multiple data-max-options="{{ $segments->speciality}}">
                                    @foreach (\App\Speciality::orderBy('name', 'asc')->get() as $key => $speciality)
                                    <option value="{{ $speciality->id }}"
                                        data-content="<span><span>{{ $speciality->name }}</span></span>"></option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                             <div class="form-group row">
                                 <label class="col-md-3 col-from-label">
                                     {{ translate('Skilled Trades') }} </label>
                            <div class="col-md-8">
                            <select class="form-control aiz-selectpicker" data-live-search="true" data-selected-text-format="count" name="skilledtrade[]" id="skilledtrade" multiple>
                                    @foreach (\App\SkilledTrade::orderBy('name', 'asc')->get() as $key => $skilledtrade)
                                    <option value="{{ $skilledtrade->id }}"
                                        data-content="<span><span>{{ $skilledtrade->name }}</span></span>"></option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                    @php
                    $pos_addon = \App\Addon::where('unique_identifier', 'pos_system')->first();
                    @endphp
                    @if ($pos_addon != null && $pos_addon->activated == 1)
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Barcode')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="barcode"
                                placeholder="{{ translate('Barcode') }}">
                        </div>
                    </div>
                    @endif

                    @php
                    $refund_request_addon = \App\Addon::where('unique_identifier', 'refund_request')->first();
                    @endphp
                    @if ($refund_request_addon != null && $refund_request_addon->activated == 1)
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Refundable')}}</label>
                        <div class="col-md-8">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" name="refundable" checked>
                                <span></span>
                            </label>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Product Images')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"
                            for="signinSrEmail">{{translate('Gallery Images')}}</label>
                        <div class="col-md-8">
                            <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="photos" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Thumbnail Image')}}
                            <small>(290x300)</small></label>
                        <div class="col-md-8">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="thumbnail_img" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(in_array('3', json_decode($permissions)) && $package_id>0)
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Product Videos')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Video Provider')}}</label>
                        <div class="col-md-8">
                            <select class="form-control aiz-selectpicker" name="video_provider" id="video_provider">
                                <option value="youtube">{{translate('Youtube')}}</option>
                                <option value="dailymotion">{{translate('Dailymotion')}}</option>
                                <option value="vimeo">{{translate('Vimeo')}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Video Link')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="video_link"
                                placeholder="{{ translate('Video Link') }}">
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Product Variation')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" value="{{translate('Colors')}}" disabled>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control aiz-selectpicker" data-live-search="true" name="colors[]"
                                data-selected-text-format="count" id="colors" multiple disabled>
                                @foreach (\App\Color::orderBy('name', 'asc')->get() as $key => $color)
                                <option value="{{ $color->code }}"
                                    data-content="<span><span class='size-15px d-inline-block mr-2 rounded border' style='background:{{ $color->code }}'></span><span>{{ $color->name }}</span></span>">
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input value="1" type="checkbox" name="colors_active">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" value="{{translate('Attributes')}}" disabled>
                        </div>
                        <div class="col-md-8">
                            <select name="choice_attributes[]" id="choice_attributes"
                                class="form-control aiz-selectpicker" data-live-search="true"
                                data-selected-text-format="count" multiple
                                data-placeholder="{{ translate('Choose Attributes') }}">
                                @foreach (\App\Attribute::all() as $key => $attribute)
                                <option value="{{ $attribute->id }}">{{ $attribute->getTranslation('name') }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <p>{{ translate('Choose the attributes of this product and then input values of each attribute') }}
                        </p>
                        <br>
                    </div>

                    <div class="customer_choice_options" id="customer_choice_options">

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Product price + stock')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Unit price')}}</label>
                        <div class="col-md-6">
                            <input type="number" lang="en" min="0" value="0" step="0.01"
                                placeholder="{{ translate('Unit price') }}" name="unit_price" class="form-control"
                                required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 control-label" for="start_date">{{translate('Discount Date Range')}}</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control aiz-date-range" name="date_range" placeholder="{{translate('Select Date')}}" data-time-picker="true" data-format="DD-MM-Y HH:mm:ss" data-separator=" to " autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Discount')}}</label>
                        <div class="col-md-6">
                            <input type="number" lang="en" min="0" value="0" step="0.01"
                                placeholder="{{ translate('Discount') }}" name="discount" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control aiz-selectpicker" name="discount_type">
                                <option value="amount">{{translate('Flat')}}</option>
                                <option value="percent">{{translate('Percent')}}</option>
                            </select>
                        </div>
                    </div>

                    <div id="show-hide-div">
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{translate('Quantity')}}</label>
                            <div class="col-md-6">
                                <input type="number" lang="en" min="0" value="0" step="1"
                                    placeholder="{{ translate('Quantity') }}" name="current_stock" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">
                                {{translate('SKU')}}
                            </label>
                            <div class="col-md-6">
                                <input type="text" placeholder="{{ translate('SKU') }}" name="sku" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="sku_combination" id="sku_combination">

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Product Description')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Description')}}</label>
                        <div class="col-md-8">
                            <textarea class="aiz-text-editor" name="description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            @if(in_array('3', json_decode($permissions)) && $package_id>0)
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Brochure')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"
                            for="signinSrEmail">{{translate('PDF Specification')}}</label>
                        <div class="col-md-8">
                            <div class="input-group" data-toggle="aizuploader" data-type="document">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="pdf" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div></div>
                        <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Description')}}</label>
                        <div class="col-md-8">
                            <textarea class="aiz-text-editor" name="pdf_description"></textarea>
                        </div> 
                        </div>
                   
                    
                </div>
            </div>
            @endif
            <div class="card" hidden>
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('SEO Meta Tags')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Meta Title')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="meta_title"
                                placeholder="{{ translate('Meta Title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Description')}}</label>
                        <div class="col-md-8">
                            <textarea name="meta_description" rows="8" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">{{ translate('Meta Image') }}</label>
                        <div class="col-md-8">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="meta_img" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">
                        {{translate('Shipping Configuration')}}
                    </h5>
                </div>

                <div class="card-body">
                    @if (get_setting('shipping_type') == 'product_wise_shipping')
                    <div class="form-group row">
                        <label class="col-md-6 col-from-label">{{translate('Free Shipping')}}</label>
                        <div class="col-md-6">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="radio" name="shipping_type" value="free" checked>
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-6 col-from-label">{{translate('Flat Rate')}}</label>
                        <div class="col-md-6">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="radio" name="shipping_type" value="flat_rate">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="flat_rate_shipping_div" style="display: none">
                        <div class="form-group row">
                            <label class="col-md-6 col-from-label">{{translate('Shipping cost')}}</label>
                            <div class="col-md-6">
                                <input type="number" lang="en" min="0" value="0" step="0.01"
                                    placeholder="{{ translate('Shipping cost') }}" name="flat_shipping_cost"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    @else
                    <p>
                        {{ translate('Shipping configuration is maintained by Admin.') }}
                    </p>
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Low Stock Quantity Warning')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="name">
                            {{translate('Quantity')}}
                        </label>
                        <input type="number" name="low_stock_quantity" value="1" min="0" step="1" class="form-control">
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">
                        {{translate('Stock Visibility State')}}
                    </h5>
                </div>

                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-md-6 col-from-label">{{translate('Show Stock Quantity')}}</label>
                        <div class="col-md-6">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="radio" name="stock_visibility_state" value="quantity" checked>
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-6 col-from-label">{{translate('Show Stock With Text Only')}}</label>
                        <div class="col-md-6">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="radio" name="stock_visibility_state" value="text">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-6 col-from-label">{{translate('Hide Stock')}}</label>
                        <div class="col-md-6">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="radio" name="stock_visibility_state" value="hide">
                                <span></span>
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Cash On Delivery')}}</h5>
                </div>
                <div class="card-body">
                    @if (get_setting('cash_payment') == '1')
                    <div class="form-group row">
                        <label class="col-md-6 col-from-label">{{translate('Status')}}</label>
                        <div class="col-md-6">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" name="cash_on_delivery" value="1" checked="">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    @else
                    <p>
                        {{ translate('Cash On Delivery activation is maintained by Admin.') }}
                    </p>
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Estimate Shipping Time')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="name">
                            {{translate('Shipping Days')}}
                        </label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="est_shipping_days" min="1" step="1"
                                placeholder="{{translate('Shipping Days')}}">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">{{translate('Days')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('VAT & Tax')}}</h5>
                </div>
                <div class="card-body">
                    @foreach(\App\Tax::where('tax_status', 1)->get() as $tax)
                    <label for="name">
                        {{$tax->name}}
                        <input type="hidden" value="{{$tax->id}}" name="tax_id[]">
                    </label>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="number" lang="en" min="0" value="0" step="0.01"
                                placeholder="{{ translate('Tax') }}" name="tax[]" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control aiz-selectpicker" name="tax_type[]">
                                <option value="amount">{{translate('Flat')}}</option>
                                <option value="percent">{{translate('Percent')}}</option>
                            </select>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="col-12">
            <div class="mar-all text-right">
                <button type="submit" name="button" value="publish"
                    class="btn btn-primary">{{ translate('Upload Product') }}</button>
            </div>
        </div>
    </div>

</form>

@endsection

@section('script')
<script type="text/javascript">
    $("[name=shipping_type]").on("change", function (){
            $(".product_wise_shipping_div").hide();
            $(".flat_rate_shipping_div").hide();
            if($(this).val() == 'product_wise'){
                $(".product_wise_shipping_div").show();
            }
            if($(this).val() == 'flat_rate'){
                $(".flat_rate_shipping_div").show();
            }

        });

        function add_more_customer_choice_option(i, name){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:"POST",
                url:'{{ route('products.add-more-choice-option') }}',
                data:{
                attribute_id: i
                },
                success: function(data) {
                    var obj = JSON.parse(data);
                    $('#customer_choice_options').append('\
                    <div class="form-group row">\
                        <div class="col-md-3">\
                            <input type="hidden" name="choice_no[]" value="'+i+'">\
                            <input type="text" class="form-control" name="choice[]" value="'+name+'" placeholder="{{ translate('Choice Title') }}" readonly>\
                        </div>\
                        <div class="col-md-8">\
                            <input type="text" class="form-control aiz-tag-input" name="choice_options_'+i+'[]" placeholder="{{ translate('Enter choice values') }}" data-on-change="update_sku">\
                        </div>\
                    </div>');
                   AIZ.plugins.tagify();
            }
        });


        }

        $('input[name="colors_active"]').on('change', function() {
            if(!$('input[name="colors_active"]').is(':checked')){
                $('#colors').prop('disabled', true);
                AIZ.plugins.bootstrapSelect('refresh');
            }
            else{
                $('#colors').prop('disabled', false);
                AIZ.plugins.bootstrapSelect('refresh');
            }
            update_sku();
        });

        $(document).on("change", ".attribute_choice",function() {
            update_sku();
        });

        $('#colors').on('change', function() {
            update_sku();
        });

        $('input[name="unit_price"]').on('keyup', function() {
            update_sku();
        });

        $('input[name="name"]').on('keyup', function() {
            update_sku();
        });

        function delete_row(em){
            $(em).closest('.form-group row').remove();
            update_sku();
        }

        function delete_variant(em){
            $(em).closest('.variant').remove();
        }

        function update_sku(){
            $.ajax({
               type:"POST",
               url:'{{ route('products.sku_combination') }}',
               data:$('#choice_form').serialize(),
               success: function(data){
                   $('#sku_combination').html(data);
                    AIZ.plugins.fooTable();
                   if (data.length > 1) {
                       $('#show-hide-div').hide();
                   }
                   else {
                        $('#show-hide-div').show();
                   }
               }
           });
        }

        $('#choice_attributes').on('change', function() {
            $('#customer_choice_options').html(null);
            $.each($("#choice_attributes option:selected"), function(){
                add_more_customer_choice_option($(this).val(), $(this).text());
            });
            update_sku();
        });
        
        $(document).on("change", "#category_id",function() {
            update_segment(this.value);
        });
         function update_segment(id){
            // $('.segment_id').empty();
            $.ajax({
               type:"POST",
               url:'{{ route('products.update_segment') }}',
            data:$('#choice_form').serialize(),
               success: function(data){
                   console.log(data);
                 $('.new').empty().append('<select class="form-control aiz-selectpicker segment_id" data-live-search="true" name="segment[]" multiple data-max-options="2">'+data+'</select>');
                  AIZ.plugins.bootstrapSelect('refresh');
               }
           });
        }

</script>
@endsection
