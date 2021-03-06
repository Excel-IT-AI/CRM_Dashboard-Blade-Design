
@extends('master.master')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h6 class="page-title"><h2 class="text-center">Search Client Installment</h2> </h6>

            </div>

        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card bg-secondary">
                <div class="card-body">
                    <!--<h4 class="card-title">Validation type</h4>-->
                    <!--<p class="card-title-desc">Here you can find insallment for the user</p>-->
                    <form method="POST" action="@if(Auth::guard('admin')->check()) {{route('admin.installments.find')}} @elseif(Auth::guard('super_admin')->check()) {{route('super_admin.installments.find')}}  @elseif(Auth::guard('employee')->check()) {{route('employee.installments.find')}} @endif" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">File No</label>
                            <input type="text" name="file_no" required class="form-control" id="validationCustom03" required>
                            @error('record')
                                <span class="text-danger">
                                    Please provide a valid No.
                                </span>
                            @enderror

                        </div>
                        <div class="col-12">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>



</div>
@endsection

@section('script')
<script src="assets/js/pages/form-validation.init.js"></script>
@endsection
