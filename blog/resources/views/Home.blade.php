@extends('Layout.app')
@section('title')
Home page

@endsection
@section('content')

<div id="home">
    <div class="image">
        <div class="container">
            <div class="row ">
                <div class="col-12  d-flex align-items-center justify-content-center text-light darkknight p-2">
                    <h1>The Dark Knight</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container text-center my-5">
    <h2>
        Movies
    </h2>
    <div class="row">
        <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/services.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
                </div>
          </div>

          <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/services.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
                </div>
          </div>

          <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/services.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary">Learn More</button>
                </div>
                </div>
          </div>

        </div>

</div>

<div class="jumbotron jumbotron-fluid bg-secondary ">
    <div class="container text-center my-1">
        <h2>Recent Projects</h2><br><br>
        <div class="row">
        <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/projects.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
                </div>
          </div>

          <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/projects.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
          </div>

          <div class="col-md-4 p-1">
          <div class="card" style="width:100%">
            <img src="{{asset('image/projects.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
                </div>
          </div>

        </div>
    </div>
</div>


<div class="container mb-5 mt-5">
    <h2>Contact With Me</h2><br><br>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d14583.537514219646!2d90.30954492471197!3d23.96452835980554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d23.965214399999997!2d90.3182568!4m5!1s0x3755dd49d1fdc857%3A0xa21b74c2bbe4bd35!2sNarsinghapur%20Kashimpur%20Road!3m2!1d23.9563562!2d90.3165149!5e0!3m2!1sen!2sbd!4v1627660285398!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </div>
    </div>



@endsection
