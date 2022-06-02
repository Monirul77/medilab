@extends('admin.admin-master')
@section('doctors') active show-sub @endsection
@section('manage-doctors') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">admin</a>
      <span class="breadcrumb-item active">manage Doctor</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-12">  
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif 
            
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('status')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif  

            @if(session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('delete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif  
              <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Doctors List</h6>    
                <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-15p">Image</th>
                        <th class="wd-15p">Doctor Name</th>
                        <th class="wd-15p">Department </th>
                        <th class="wd-20p">Status</th>  
                        <th class="wd-25p">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($doctors as $row)
                      <tr>
                        <td>
                            <img src="{{ asset($row->image_one) }}" width="50px;" height="50px;" alt="">
                        </td>
                        <td>{{ $row->doctor_name }}</td>
                        <td>{{ $row->department_name }}</td>
                         
                        <td> {{$row->status}}</td>
                         
                        <td>
                            <a href="{{ url('admin/edit/doctor/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                            <a href="{{ url('/admin/doctor/delete/'.$row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Shure To Delete')"><i class="fa fa-trash"></i></a>
                            
                            <a href="{{ url('admin/doctor/active/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                            
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->
              </div><!-- card -->
        </div>

    </div>

</div>
@endsection