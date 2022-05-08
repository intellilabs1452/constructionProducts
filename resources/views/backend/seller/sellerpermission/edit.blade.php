@extends('backend.layouts.app')

@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
    <h5 class="mb-0 h6">{{translate('Role Information')}}</h5>
</div>


<div class="col-lg-7 mx-auto">
    <div class="card">
        <div class="card-body p-0">
            <ul class="nav nav-tabs nav-fill border-light">
      				@foreach (\App\Language::all() as $key => $language)
      					<li class="nav-item">
      						<a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3" href="{{ route('roles.edit', ['id'=>$permission->id, 'lang'=> $language->code] ) }}">
      							<img src="{{ static_asset('assets/img/flags/'.$language->code.'.png') }}" height="11" class="mr-1">
      							<span>{{$language->name}}</span>
      						</a>
      					</li>
    	            @endforeach
      			</ul>
 <form class="p-4" action="{{ route('sellerpackages.update_permission', $permission->id) }}" method="POST">
                <input name="_method" type="hidden" value="POST">
                <input name="_method" type="hidden" value="POST">
                <input type="hidden" name="id" value="{{ $permission->id }}">
            	   @csrf
                <div class="form-group row">
                    <label class="col-md-3 col-from-label" for="name">{{translate('Name')}} <i class="las la-language text-danger" title="{{translate('Translatable')}}"></i></label>
                    <div class="col-md-9">
                        <input type="text" placeholder="{{translate('Package Name')}}" id="name" name="name" class="form-control" value="{{ $package_name->name }}" required>
                    </div>
                </div>
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Permissions') }}</h5>
                </div>
                <br>
                @php
                    $permissions = json_decode($permission->permissions);
                @endphp
                <div class="form-group row">
                    <label class="col-md-2 col-from-label" for="banner"></label>
                    <div class="col-md-8">
                        @if (addon_is_activated('pos_system'))
                          <div class="row">
                              <div class="col-md-10">
                                  <label class="col-from-label">{{ translate('POS System') }}</label>
                              </div>
                              <div class="col-md-2">
                                  <label class="aiz-switch aiz-switch-success mb-0">
                                      <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="1" @php if(in_array(1, $permissions)) echo "checked"; @endphp>
                                      <span class="slider round"></span>
                                  </label>
                              </div>
                          </div>
                        @endif
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Purchase History') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="2" @php if(in_array(2, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Upload of brochures/link of video applications') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="3" @php if(in_array(3, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Wishlist') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="4" @php if(in_array(4, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Compare') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="5" @php if(in_array(5, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Products') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="6" @php if(in_array(6, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                       
                          <div class="row">
                              <div class="col-md-10">
                                  <label class="col-from-label">{{ translate('Product Bulk Upload') }}</label>
                              </div>
                              <div class="col-md-2">
                                  <label class="aiz-switch aiz-switch-success mb-0">
                                      <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="7" @php if(in_array(7, $permissions)) echo "checked"; @endphp>
                                      <span class="slider round"></span>
                                  </label>
                              </div>
                          </div>
                      
                      <!--  <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Digital Products') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="8" @php if(in_array(8, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Uploaded Files') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="9" @php if(in_array(9, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row" hidden>
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Coupon') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="10" @php if(in_array(10, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row" hidden>
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Classified Products') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="11" @php if(in_array(11, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Orders') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="12" @php if(in_array(12, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Product Reviews') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="13" @php if(in_array(13, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Business Settings') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="14" @php if(in_array(14, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        
                          <div class="row">
                              <div class="col-md-10">
                                  <label class="col-from-label">{{ translate('Payment History') }}</label>
                              </div>
                              <div class="col-md-2">
                                  <label class="aiz-switch aiz-switch-success mb-0">
                                      <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="15" @php if(in_array(15, $permissions)) echo "checked"; @endphp>
                                      <span class="slider round"></span>
                                  </label>
                              </div>
                          </div>
                   
                       
                          <div class="row" hidden>
                              <div class="col-md-10">
                                  <label class="col-from-label">{{ translate('Money Withdraw') }}</label>
                              </div>
                              <div class="col-md-2">
                                  <label class="aiz-switch aiz-switch-success mb-0">
                                      <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="16" @php if(in_array(16, $permissions)) echo "checked"; @endphp>
                                      <span class="slider round"></span>
                                  </label>
                              </div>
                          </div>
                      
                        
                          <div class="row" hidden>
                              <div class="col-md-10">
                                  <label class="col-from-label">{{ translate('Commission History') }}</label>
                              </div>
                              <div class="col-md-2">
                                  <label class="aiz-switch aiz-switch-success mb-0">
                                      <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="17" @php if(in_array(17, $permissions)) echo "checked"; @endphp>
                                      <span class="slider round"></span>
                                  </label>
                              </div>
                          </div>
                       
                       
                          <div class="row">
                              <div class="col-md-10">
                                  <label class="col-from-label">{{ translate('Conversations') }}</label>
                              </div>
                              <div class="col-md-2">
                                  <label class="aiz-switch aiz-switch-success mb-0">
                                      <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="18" @php if(in_array(18, $permissions)) echo "checked"; @endphp>
                                      <span class="slider round"></span>
                                  </label>
                              </div>
                          </div>
                       
                          <div class="row">
                              <div class="col-md-10">
                                  <label class="col-from-label">{{ translate('Support Tickets') }}</label>
                              </div>
                              <div class="col-md-2">
                                  <label class="aiz-switch aiz-switch-success mb-0">
                                      <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="19" @php if(in_array(19, $permissions)) echo "checked"; @endphp>
                                      <span class="slider round"></span>
                                  </label>
                              </div>
                          </div>
                      
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Manage Profile') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="20" @php if(in_array(20, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row" hidden>
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Addon Manager') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="21" @php if(in_array(21, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="row" hidden>
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Uploaded Files') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="22" @php if(in_array(22, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row" hidden>
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('Blog System') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="23" @php if(in_array(23, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('System') }}</label>
                            </div>
                            <div class="col-md-2">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="24" @php if(in_array(21, $permissions)) echo "checked"; @endphp>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        
                         <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('No of Locations') }}</label>
                            </div>
                            <div class="col-md-2">
                               
                                    <input type="text" name="locations" class="form-control" value="{{$permission->locations }}" style="width: 90px;height: 28px;">
                                    
                                </label>
                            </div>
                        </div>
                        
                         <div class="row" hidden>
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('No of Segments') }}</label>
                            </div>
                            <div class="col-md-2">
                               
                                    <input type="text" name="segments" class="form-control" value="{{$permission->segments }}" style="width: 90px;height: 28px;">
                                    
                                </label>
                            </div>
                        </div>
                        
                         <div class="row" hidden>
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('No of Speciality') }}</label>
                            </div>
                            <div class="col-md-2">
                               
                                    <input type="text" name="speciality" class="form-control" value="{{$permission->speciality }}" style="width: 90px;height: 28px;">
                                    
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <label class="col-from-label">{{ translate('No of Categories') }}</label>
                            </div>
                            <div class="col-md-2">
                               
                                    <input type="text" name="categories" class="form-control" value="{{$permission->categories }}" style="width: 90px;height: 28px;">
                                    
                                </label>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-sm btn-primary">{{translate('Save')}}</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
