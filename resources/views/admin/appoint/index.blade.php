@extends('admin.admin-master')
@section('brand') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">Brand</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Brand list</h6>
                    @if(session('Catupdated'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('Catupdated')}}</strong>
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
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p">Sl</th>
                                    <th class="wd-15p"> Name</th>
                                    <th class="wd-15p">Email</th>
                                    <th class="wd-15p">Phone</th>
                                    <th class="wd-15p">Doctor Name</th>
                                    <th class="wd-15p">Date</th>
                                    <th class="wd-15p">Message</th>
                                    <th class="wd-20p">Status</th>
                                    <th class="wd-25p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp

                                @foreach ($data as $row)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->doctor_name }}</td>
                                    <td>{{ $row->date }}</td>
                                    <td>{{ $row->message }}</td>
                                    <td>{{ $row->status}}</td>

                                    <td>
                                    <a href="{{ url('/admin/appoint/approve/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                                    <a href="{{ url('/admin/appoint/delete/'.$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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