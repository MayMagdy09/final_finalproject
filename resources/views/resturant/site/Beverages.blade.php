@extends('resturant.app')
@section('content')
<div class="row mt-5">
<div class="col-md-3">
    <div style="border: 1px solid black;">
        <a class="dropdown-item font-weight-bold" href="#"><img src="{{asset("/imgs/fullmenu.jpg")}}" style=" width: 80px;">View Full Menu</a>
    </div>
<div class="mt-4" style="border: 1px solid black;">
    <a class="dropdown-item" href="/beverages"><img src="{{asset("/imgs/beverages.jpg")}}" style="height: 40px; width: 40px;">Beverages</a>
    <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/breakfast.jpg")}}" style="height: 40px; width: 40px;">Breakfast</a>
    <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/burgers.jpg")}}"style="height: 40px; width: 40px;">Burgers</a>
    <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/chickensandwich.jpg")}}" style="height: 40px; width: 40px;">Chicken & Sandwiches</a>
    <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/combo.jpg")}}" style="height: 40px; width: 40px;">Combo Meal</a>
    <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/desserts.jpg")}}" style="height: 40px; width: 40px;">Desserts & Shakes</a>
    <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/happymeal.jpg")}}" style="height: 40px; width: 40px;">Happy Meal®</a>
    <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/cafedrink.jpg")}}" style="height: 40px; width: 40px;">McCafé® Drinks</a>
    <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/cafebakery.jpg")}}" style="height: 40px; width: 40px;">McCafé® Bakery</a>
    <a class="dropdown-item" href="/category"><img src="{{asset("/imgs/snacks.jpg")}}" style="height: 40px; width: 40px;">Snacks & Sides</a>
</div>
</div>
<div class="col-md-9">
<h1 class="display-4 font-weight-bold text-center">Beverages</h1>
<div class="row">
<div class="col">
    @foreach ($items as $item)
       <img src="{{asset("storage/".$item->item_img->first()->name)}}"><span class="text-md-center">{{$item->name}}</span>
    @endforeach
</div>
</div>
</div>
</div>
@endsection