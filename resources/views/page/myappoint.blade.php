@extends('layouts.fontend-master')
@section('content')



<div class="page-section">
<div class="container">


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">doctor_name</th>
      <th scope="col">Department</th>
      <th scope="col">date</th>
      <th scope="col">message</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($appointments as $data)
    <tr>
      
      
        
      <td>{{$data->id}}</td>
      
      <td>{{$data->doctor_name}}</td>
      <td>{{$data->department}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->message}}</td>
     
      <td>{{$data->status}}</td>
      
   
      <td><a href="{{url('/appoint/cancel/'.$data->id)}} "class="btn btn-sm btn-danger" onclick="return confirm('Are You Shure To Delete')">Remove</a> </td>
      
      
       
      
    </tr>
    @endforeach
  </tbody>
</table>
 
</div>

</div>

 
 


@endsection
