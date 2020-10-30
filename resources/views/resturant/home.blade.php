@extends('resturant.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div  class="carousel slide" data-ride="carousel"  >
                <ol class="carousel-indicators">
                    <li data-target="first slide" data-slide-to="0" class="active"></li>
                    <li data-target="second slide" data-slide-to="1"></li>
                    <li data-target="third slide " data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{asset('imgs/pageadmin2.jpg')}}" style="size:100%; width:100%;" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('imgs/pic4.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('imgs/pic2.jpg')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                <img src="{{asset("imgs/pic1.jpg")}}" style="height: 175px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-warning mt-5">Order Now</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                <img src="{{asset("imgs/pic2.jpg")}}" style="height: 175px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-warning mt-5">Order Now</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 ">
                <div class="card" style="width: 18rem;">
                <img src="{{asset("imgs/pic3.jpg")}}" style="height: 175px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-warning mt-5">Order Now</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    
@endsection