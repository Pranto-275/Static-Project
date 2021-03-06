@extends('Layout.app')

@section('title')
The Dark Knight
@endsection


@section('content')

<div class="container-fluid bg-dark pt-5">
    <div class="row p-5">
    <div class="col-md-12 text-center">
        <h4 class="text-white">My Services</h4>
    </div>
    </div>
    </div>



    <div class="container mt-5">
        <div class="row">
        <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/services.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
                </div>
          </div>
          <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/services.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
                </div>
          </div>
          <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/services.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
          </div>

        </div>
    </div>


    <div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-md-6">

        <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Your Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Your Mobile</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Your Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Your Message</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>



      <button type="submit" class="btn btn-block btn-primary">Send Now</button>
    </form>

        </div>

        <div class="col-md-6">
            <h5>Address</h5>
            <p>Kashimpur Gazipur</p>
            <p>01830445326</p>
            <p>pranto.rahaman38@gmail.com</p>
        </div>

    </div>
    </div>

@endsection
