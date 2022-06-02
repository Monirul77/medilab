@extends('layouts.fontend-master')

@section('content')



<div class="page-section">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('success')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

    <form class="main-form" action="{{route('appointment-done')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row mt-5 ">
 
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" name="name" class="form-control" placeholder="Full name" required>
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" name="email" class="form-control" placeholder="Email address.." required>
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input type="date" name="date" class="form-control" required>
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="doctor_name" id="departement" class="custom-select" required>
            <option value="general">Choose Doctor</option>
            @foreach ($doctors as $item)

            <option value="{{$item->doctor_name}}">{{$item->doctor_name}}</option>

            @endforeach
          </select>
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="department" id="departement" class="custom-select" required>
            <option value="general">Choose Department</option>
            @foreach ($doctors as $item)

            <option value="{{$item->department_name}}">{{$item->department_name}}</option>

            @endforeach
          </select>
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <input type="text" name="phone" class="form-control" placeholder="Number.." required>
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
    </form>
  </div>
</div> <!-- .page-section -->

@endsection