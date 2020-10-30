@extends('resturant.app')
@section('content')

    <h1 class="display-4 font-weight-bold text-center"> Leadership Team </h1>
    <div class="row ml-5">
      <div class="col-md-8">
      <img src="{{asset("imgs/leadership1.jpg")}}" class="mr-5">
      </div>
      <div class="col-md-8 mt-5">
      <h2 class="font-weight-bold">Ray Kroc left a legacy. Our executives preserve it.</h2>
      <p>McDonald’s U.S. leadership team draws from a proud history and set of values that made the company an icon of American business. Meet our President and CEO, as well as other McDonald’s U.S. executive team members who continue to build our legacy and ensure our Golden Arches shine bright.</p>
      </div>
    </div>
   <div class="row">
    <div class="col-6 mt-5">
        <img src="{{asset("imgs/person1.jpg")}}">
        <h2 class="font-weight-bold mt-5">Chris Kempczinski</h2>
        <p>McDonald’s President and CEO</p>
        <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
      </div>
      <div class="col-6 mt-5">
        <img src="{{asset("imgs/person2.jpg")}}">
        <h2 class="font-weight-bold mt-5">Joe Erlinger</h2>
        <p>President, McDonald’s USA</p>
        <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
      </div>
   </div>
   <div class="row mt-5">
    <div class="col-6 mt-5">
        <img src="{{asset("imgs/person3.jpg")}}">
        <h2 class="font-weight-bold mt-5">Mário Barbosa</h2>
        <p>Zone President East, McDonald’s USA</p>
        <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
      </div>
      <div class="col-6 mt-5">
        <img src="{{asset("imgs/person4.jpg")}}">
        <h2 class="font-weight-bold mt-5">Michelle Borninkhof</h2>
        <p>CIO and Vice President, U.S. Technology</p>
        <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
      </div>
      <div class="row mt-5 ml-2">
        <div class="col-6 mt-5">
            <img src="{{asset("imgs/person5.jpg")}}">
            <h2 class="font-weight-bold mt-5">Spero Droulias</h2>
            <p>Chief Financial Officer, McDonald’s USA</p>
            <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
          </div>
          <div class="col-6 mt-5">
            <img src="{{asset("imgs/person6.jpg")}}">
            <h2 class="font-weight-bold mt-5">Morgan Flatley            </h2>
            <p>Chief Marketing Officer, McDonald’s USA </p>
            <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
          </div>
   </div>
   <div class="row mt-5 ml-2">
    <div class="col-6 mt-5">
        <img src="{{asset("imgs/person7.jpg")}}">
        <h2 class="font-weight-bold mt-5">Marion Gross</h2>
        <p>Chief Supply Chain Officer, North America</p>
        <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
      </div>
      <div class="col-6 mt-5">
        <img src="{{asset("imgs/person8.jpg")}}">
        <h2 class="font-weight-bold mt-5">Mahrukh Hussain            </h2>
        <p>General Counsel, McDonald’s USA </p>
        <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
      </div>
</div>
<div class="row mt-5 ml-2">
    <div class="col-6 mt-5">
        <img src="{{asset("imgs/person9.jpg")}}">
        <h2 class="font-weight-bold mt-5">Mason Smoot</h2>
        <p>Senior Vice President and Chief Restaurant Officer, McDonald’s USA</p>
        <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
      </div>
      <div class="col-6 mt-5">
        <img src="{{asset("imgs/person10.jpg")}}">
        <h2 class="font-weight-bold mt-5">Charlie Strong </h2>
        <p>Chief Field Officer, McDonald’s USA</p>
        <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
      </div>
</div>
<div class="row mt-5 ml-2">
    <div class="col-6 mt-5">
        <img src="{{asset("imgs/person11.jpg")}}">
        <h2 class="font-weight-bold mt-5">David Tovar</h2>
        <p>Vice President, U.S. Communications</p>
        <a name="" id="" class="btn btn-warning text-center" href="#" role="button"> Learn More </a>
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
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="{{asset("imgs/history2.jpg")}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center font-weight-bold">Values in Action
                </h5>
                  <p class="card-text text-center">Find a listing of jobs at our Corporate or Regional offices near you.</p>
                  <a href="/action" class="btn btn-warning mt-5">Learn More</a>
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

@endsection