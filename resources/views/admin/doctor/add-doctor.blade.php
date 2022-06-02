@extends('admin.admin-master')
@section('products') active show-sub @endsection
@section('add-products') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">Add Doctors</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Add New Doctors</h6>
                <form action="{{route('add-doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Doctor Name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="doctor_name" value="{{ old('doctor_name') }}" placeholder="doctor name">
                                    @error('doctor_name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div><!-- col-4 -->
                            

                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">department: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="department_name" value="{{ old('department_name') }}" placeholder="department name">
                                    @error('department_name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div><!-- col-4 -->

                          

 


                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="file" name="image_one">
                                    @error('image_one')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div><!-- col-4 -->

                             

                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Add Doctors</button>
                        </div><!-- form-layout-footer -->
                </form>
            </div><!-- form-layout -->
        </div><!-- card -->
    </div>

</div>
@endsection