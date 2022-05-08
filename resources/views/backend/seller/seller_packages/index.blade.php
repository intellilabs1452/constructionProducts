@extends('backend.layouts.app')

@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col-md-6">
			<h1 class="h3">{{translate('All Classifies Packages')}}</h1>
		</div>
		<div class="col-md-6 text-md-right">
			<a href="{{ route('seller_packages.create') }}" class="btn btn-circle btn-info">
				<span>{{translate('Add New Package')}}</span>
			</a>
		</div>
	</div>
</div>

<div class="row">
    @foreach ($seller_packages as $key => $seller_package)
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card">
                <div class="card-body text-center">
                    <img alt="{{ translate('Package Logo')}}" src="{{ uploaded_asset($seller_package->logo) }}" class="mw-100 mx-auto mb-4" height="150px">
                    <p class="mb-3 h6 fw-600">{{$seller_package->name}}</p>
                    <p class="h4">{{single_price($seller_package->amount)}}</p>
                    <p class="fs-15"><a href="{{route('sellerpermission.edit', ['id'=>$seller_package->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}">{{translate('Permissions') }}</a>
                    </p>
                    <div class="mar-top">
                        <a href="{{route('seller_packages.edit', ['id'=>$seller_package->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}" class="btn btn-sm btn-info">{{translate('Edit')}}</a>
                        <a href="#" data-href="{{route('seller_packages.destroy', $seller_package->id)}}" class="btn btn-sm btn-danger confirm-delete" >{{translate('Delete')}}</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
