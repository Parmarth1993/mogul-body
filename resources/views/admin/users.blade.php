@extends('layouts.admin.header')
@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Dashboard</h4>
                        <div class="add-product">
                            <!-- <a href="product-edit.html">Add Product</a> -->
                        </div>
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Created</th>
                                <th>Setting</th>
                            </tr>
                        @foreach($users as $user)
                        	@if($user->type !='admin')
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><a onclick="return confirm('Are you sure ?');" href="{{ route('deleteUser', $user->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></button>
                                </td>
                            </tr>
                            @endif
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