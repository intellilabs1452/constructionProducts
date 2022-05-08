<div class="card-columns">
    @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category->id) as $key => $first_level_id)
        <div class="card shadow-none border-0">
            <ul class="list-unstyled mb-3">
                <li class="fw-600 border-bottom pb-2 mb-3">
                    <a class="text-reset" href="{{ route('products.category', \App\Category::find($first_level_id)->slug) }}">{{ \App\Category::find($first_level_id)->getTranslation('name') }}</a>
                </li>
                @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id) as $key => $second_level_id)
                    <li class="mb-2">
                        <a class="text-reset" href="{{ route('products.category', \App\Category::find($second_level_id)->slug) }}">{{ \App\Category::find($second_level_id)->getTranslation('name') }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
    
</div>
<div style="position:absolute;bottom:0;margin-bottom:-40px">
  
     <h3 style="font-size:15px;padding-top: 5px;color: #d9534f;border-top:1px solid #cdc4c4;margin-bottom:-2px">PREMIUM SELLERS</h3>
     <div class="card-columns" style="column-count:5 !important">
   @foreach (\App\Seller::where('verification_status', 1)->take(10)->get() as $key => $seller)
      @if($seller->user != null && $seller->user->seller_package_id == 1)
        <div class="card shadow-none border-0">
            <ul class="list-unstyled mb-3">
                <li class="fw-600 pb-2 mb-3">
                   
                   <a href="{{ route('shop.visit', $seller->user->shop->slug) }}" class="d-block p-3">
                                            <img style="width:60px"
                                                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                data-src="@if ($seller->user->shop->logo !== null) {{ uploaded_asset($seller->user->shop->logo) }} @else {{ static_asset('assets/img/placeholder.jpg') }} @endif"
                                                alt="{{ $seller->user->shop->name }}"
                                                class="img-fluid lazyload" title="{{$seller->user->shop->name}}"
                                            >
                                        </a>
                        <h3 hidden style="font-size:12px;text-transform:capitalize;color: #003049;">{{$seller->user->shop->name}}</h3>
                </li>
               
            </ul>
        </div>
     @endif
     @endforeach
    
</div>
</div>
