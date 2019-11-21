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
                                <th>S. No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Diagnosis</th>
                                <th>Active</th>
                                <th>Body Type</th>
                                <th>Setting</th>
                            </tr>
                        @foreach($patientList as $patient)
                            <tr>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->email }}</td>
                                <td>{{ $patient->gender }}</td>
                                <td>{{ $patient->teens }}</td>
                                <td>{{ $patient->diagnosis }}</td>
                                <td>{{ $patient->active }}</td>
                                <td>{{ $patient->body_type }}</td>
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="{{ route('viewQuiz', $patient->quiz_id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><a onclick="return confirm('Are you sure ?');" href="{{ route('deleteQuiz', $patient->quiz_id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></button>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                        <!-- <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div> -->
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