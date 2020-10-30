@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
             <form method="POST" action="/item" enctype="multipart/form-data">
               @csrf
              <div class="form-group">
                <h3 class="text-bold">Add New Menu Item</h3>
                <label for=""><b>Name</b></label>
                <input type="text" name="name"class="form-control" value="{{old("name")}}" >
                @error('name')
                <small  class="text-danger">{{$message}}</small>
                @enderror
               </div>
              <div class="form-group">
               <label for=""><b>Price</b></label>
               <input type="number" name="price"class="form-control" value="{{old("price")}}" >
               @error('price')
                <small  class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for=""><b>Offer Price</b></label>
                <input type="number" name="offer_price"class="form-control" value="{{old("offer_price")}}" >
                @error('offer_price')
                 <small  class="text-danger">{{$message}}</small>
                 @enderror
               </div>
               <div class="form-group">
                <label for=""><b>Descreption</b></label>
                <input type="textarea" name="desc"class="form-control" value="{{old("desc")}}" >
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
               <div class="form-group mt-4">
                <label for="">Item Images</label>
              <input type="file" multiple name="imgs[]" class="form-control">
              
                    @error('imgs')
                        <small  class="text-danger">{{$message}}</small>
                    @enderror
              </div>
      <div>
          <input  class="btn btn-warning" type="submit" value="Save">
      </div>
    </form>
    </div>
    <div class="col-md-8">
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Offer Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->offer_price}}</td>
            <td>{{$item->desc}}</td>
            <td>{{$item->category->name}}</td>
            <td> @if ($item->item_img->count()>0)
                                <img src="{{asset('storage/'.$item->item_img->first()->name)}}" class="img img-fluid">
          @else
          no image
            @endif
        </td>
            <td style="width: 50px">
                <a class="btn btn-warning btn-sm" href=" /item/{{$item->id}}/edit" >edit</a>
            </td>
            <td style="width: 50px">
                <form action="/item/{{$item->id}}" method="POST">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-sm btn-danger" >delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No Categories</td>
        </tr>
        @endforelse
       
       
    </tbody>
</table>
    </div>
    </div>
</div>
@endsection