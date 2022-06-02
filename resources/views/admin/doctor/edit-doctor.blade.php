@extends('admin.admin-master')
@section('products') active show-sub @endsection
@section('manage-products') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Update Doctor</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
      
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Update Products</h6>
        <form action="" method="POST" >
            @csrf
            <input type="hidden" name="id" value="{{ $doctor->id }}">
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
                    <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="doctor_name" value="{{ $doctor->doctor_name }}" placeholder="product name">
                    @error('doctor_name')
                       <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Department: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="department_name" value="{{ $doctor->department_name }}" placeholder="product code">
                    @error('department_name')
                    <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->
               
             
              <button class="btn btn-info mg-r-5" type="submit">Update Data</button>

          </form>

         <form action="" method="POST" enctype="multipart/form-data">
            @csrf 
            <input type="hidden" name="id" value="{{ $doctor->doctor_id }}">
            <input type="hidden" name="img_one" value="{{ $doctor->image_one }}">
            
          <div class="row row-sm mt-5">
             <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Main thambnail: <span class="tx-danger">*</span></label>
                        <img src="{{ asset($doctor->image_one) }}" alt="" height="120px;" width="120px;">
                    </div>
                  </div><!-- col-4 -->
                  
                 

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Main thambnail: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="image_one" >
                      @error('image_one')
                      <strong class="text-danger">{{ $message }}</strong> 
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                                    
              
            </div><!-- row -->
  
              <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5">Update Image</button>
              </div><!-- form-layout-footer -->
            </form> 
            </div><!-- form-layout -->
          </div><!-- card -->
    </div>

</div>
@endsection