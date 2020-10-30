@extends('resturant.admin')
@section('content')
 <div class="container-fluid">
     <div class="row offset-1 m-5">
         <div class="col-md-4">
             <form method="POST" action="/item/{{$item->id}}" enctype="multipart/form-data">
               @csrf
               @method("patch") 
              <div class="form-group">
                <h3 class="text-bold">Edit {{$item->name}} Menu Item</h3>
                <label for=""><b>Name</b></label>
                <input type="text" name="name"class="form-control" value="{{$item->name}}" >
                @error('name')
                <small  class="text-danger">{{$message}}</small>
                @enderror
               </div>
              <div class="form-group">
               <label for=""><b>Price</b></label>
               <input type="number" name="price"class="form-control" value="{{$item->price}}" >
               @error('price')
                <small  class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for=""><b>Offer Price</b></label>
                <input type="number" name="offer_price"class="form-control" value="{{$item->offer_price}}" >
                @error('offer_price')
                 <small  class="text-danger">{{$message}}</small>
                 @enderror
               </div>
               <div class="form-group">
                <label for=""><b>Descreption</b></label>
                <input type="textarea" name="desc"class="form-control" value="{{$item->desc}}" >
                @error('desc')
                 <small  class="text-danger">{{$message}}</small>
                 @enderror
               </div>
               <div class="form-group mt-4">
                <label for="">Category</label>
                <select name="category_id" class="form-control">                            
                    @foreach (\App\Models\Category::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
               </div>
               
               {{-- <div class="form-group mt-4">
                <img src="{{asset('storage/'.$ii->name)}}"/>
              </div> --}}
      <div>
          <input  class="btn btn-warning" type="submit" value="Save">
      </div>
    </form>
</div>
@endsection