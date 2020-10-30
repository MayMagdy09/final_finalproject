@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
             <form method="POST" action="/item">
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
               <input type="text" name="price"class="form-control" value="{{old("price")}}" >
               @error('price')
                <small  class="text-danger">{{$message}}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for=""><b>Offer Price</b></label>
                <input type="text" name="price"class="form-control" value="{{old("offer_price")}}" >
                @error('offer_price')
                 <small  class="text-danger">{{$message}}</small>
                 @enderror
               </div>
               <div class="form-group">
                <label for=""><b>Descreption</b></label>
                <input type="text" name="price"class="form-control" value="{{old("desc")}}" >
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
            <th>Item_Image</th>
        </tr>
    </thead>
    <tbody>
       
        <tr>
            <td scope="row">Name</td>
            <td>Price</td>
            <td>Offer Price</td>
            <td>Description</td>
            <td>Category</td>
            <td>Item_Image</td>
            <td> <button type="button" class="btn btn-warning"> delete </button></td>
            <td> <button type="button" class="btn btn-danger"> edit </button></td>
        </tr>
    </tbody>
</table>
    </div>
    </div>
</div>
@endsection