@extends('resturant.admin')
@section('content')
 <div class="container-fluid">
     <div class="row offset-1 m-5">
         <div class="col-md-4">
             <form method="POST" action="/category/{{$category->id}}">
                @csrf
                @method("put")
            <div class="form-group">
                  <h3 class="text-bold">Edit {{$category->name}} Category</h3>
                 <label for=""> <b>Name</b></label>
                <input type="text" name="name" class="form-control"value="{{$category->name}}">
                  {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                  @error('name')
                  <small  class="text-danger">{{$message}}</small>
                  @enderror
                </div>
     
            <div>
                <input name="" id="" class="btn btn-warning" type="submit" value="Save">
            </div>
            </form>
    </div>
     </div>
    @endsection