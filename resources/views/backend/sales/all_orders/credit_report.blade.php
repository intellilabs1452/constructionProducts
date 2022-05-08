@extends('backend.layouts.app')

@section('content')
@php $i=1; @endphp
<div class="aiz-titlebar text-left mt-2 mb-3">
	<div class=" align-items-center">
       <h1 class="h3">{{translate('Credit Report')}}</h1>
	</div>
</div>

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <!--card body-->
            <div class="card-body">
               
                <table class="table table-bordered aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>{{ translate('Sl No') }}</th>
                            <th>{{ translate('Name') }}</th>
                            <th>{{ translate('Order Date') }}</th>
                             <th>{{ translate('Total Credit Days Allowed') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $key => $value)
                       @php $now = time();
                       $date=date('Y-m-d', $value->date);
                       $your_date = strtotime($date);   
                       $datediff = $now - $your_date;
                       $datediff= round($datediff / (60 * 60 * 24));
                       $credit_days=($value->credit_period)-($datediff);
                       @endphp
                        
                            <tr>
                                <td>{{ $i++}}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ date('d-m-Y h:i A', $value->date) }}</td>
                                <td>{{ $value->credit_period}} ({{ $credit_days }} days)</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</div>

@endsection



