@extends('layouts.admin.header')
@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Subscription Plans</h4>
                        <div class="add-product">
                            <a href="{{ route('getcreatePlan') }}">Add Plan</a>
                        </div>
                        <table>
                            <tr>
                                <th>S. No</th>
                                <th>Plan Name</th>
                                <th>Price</th>
                                <th>Interval</th>
                            </tr>
                        @foreach($plans as $key => $plan)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $plan->nickname }}</td>
                                <td>$ {{ $plan->amount / 100}}</td>
                                <td>{{ $plan->interval }}</td>
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="{{ route('viewQuiz', $plan->quiz_id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><a onclick="return confirm('Are you sure ?');" href="{{ route('deleteQuiz', $plan->quiz_id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></button>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>2019 <a href="http://mogulbody.smallbizplace.com">MOGULBODY</a> LLC Privacy Policy Terms and Conditions Contact Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection