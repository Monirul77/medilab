@extends('layouts.fontend-master')

@section('content')


<div class="page-section">

<div class="container">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14610.692730342846!2d90.42813611925409!3d23.72336220364103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b836d22c153f%3A0x680476b0e92d28cb!2sGolapbag%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1653719576624!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>



<div class="page-section">
    <div class="container">
       
        <div class="row">
        <h1 class="text-center wow fadeInUp">Leave Message</h1>
        @if(Session('message_sent'))
               <div class="alert alert-success" role="alert">
                 {{Session('message_sent')}}
               </div>

                @endif
        </div>

        <form class="main-form" action="{{route('send-mail')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address.." required>
                </div>
              
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="phone" class="form-control" placeholder="Number..">
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