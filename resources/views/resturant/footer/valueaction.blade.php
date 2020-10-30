@extends('resturant.app')
@section('content')
<div class="container">
    <h3 class="display-4 font-weight-bold text-center mt-2">Values In Action</h3>
    <div class="mt-4">
    <img src="{{asset("/imgs/valueaction.jpg")}}">
    </div>
    <div class="mt-5 col-md-10">
        <h2 class="font-weight-bold">Our journey towards good.</h2>
        <p>From the start, we've been committed to doing the right thing. And every day, all around the globe, we put people, processes and practices into place to make quality food, more responsible sourcing choices, a stronger community and a better planet. In accordance with our McDonald’s values, we’re here to make a difference, and here’s how.</p>
    </div>
    <div class="row">
        <div class="col-6 mt-5">
            <img src="{{asset("imgs/value1.jpg")}}">
            <h2 class="font-weight-bold mt-5">Sustainability Priorities</h2>
            <p>See how we’re making a difference in the communities we serve.</p>
            <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
          </div>
          <div class="col-6 mt-5">
            <img src="{{asset("imgs/value2.jpg")}}"  class="ml-3">
            <h2 class="font-weight-bold mt-5 ml-3">Good Food</h2>
            <p class="ml-3">Check out nutrition and ingredient information, as well as our commitment to providing responsibly sourced food.</p>
            <a name="" id="" class="btn btn-warning text-center ml-3" href="#" role="button"> Learn More </a>
          </div>
       </div>
       <div class="row">
        <div class="col-6 mt-5">
            <img src="{{asset("imgs/value3.jpg")}}">
            <h2 class="font-weight-bold mt-5">Good Planet</h2>
            <p>We create positive impacts for the planet. </p>
            <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
          </div>
          <div class="col-6 mt-5">
            <img src="{{asset("imgs/value4.jpg")}}" class="ml-3">
            <h2 class="font-weight-bold mt-5 ml-3">Our People & Communities</h2>
            <p class="ml-3">Investing in people is a top priority. So is giving back to the community.</p>
            <a name="" id="" class="btn btn-warning text-center ml-3" href="#" role="button"> Learn More </a>
          </div>
        </div>
        <div class="row ml-2 mt-5">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset("imgs/passhistory.jpg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center font-weight-bold">Our History</h5>
                          <p class="card-text text-center">From drive-thru restaurants to Chicken McNuggets® to college credits from Hamburger U, we’ve had quite a journey.</p>
                          <a href="/history" class="btn btn-warning mt-1">Learn More</a>
                        </div>
                      </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset("imgs/history1.jpg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center font-weight-bold">Leadership Team                </h5>
                          <p class="card-text text-center">Ray Kroc left a legacy. Our executives preserve it.</p>
                          <a href="/Leadership" class="btn btn-warning mt-5">Learn More</a>
                        </div>
                      </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset("imgs/history3.jpg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center font-weight-bold">Careers Beyond the Restaurant</h5>
                          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-warning mt-2 text-center">Learn More</a>
                        </div>
                      </div>
            </div>
       </div>
</div>
@endsection