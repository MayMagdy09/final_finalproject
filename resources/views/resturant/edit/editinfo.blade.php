@extends('resturant.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <form method="POST" action="/info/{{$info->id}}">
                @csrf
                @method("put")
    <div class="form-group">
      <label for=""> <b>Main_Pic</b></label>
    <input type="file" name="main_pic" class="form-control" placeholder="{{$info->main_pic}}" aria-describedby="helpId">
      @error('main_pic')
      <small id="helpId" class="text-muted">{{$message}}</small>
      @enderror
    </div>
    <div class="form-group">
       <label for=""> <b>Description</b> </label>
    <input type="text" name="desc"  class="form-control" placeholder="{{$info->desc}}" aria-describedby="helpId">
      @error('desc')
     <small id="helpId" class="text-muted">{{$message}}</small>
      @enderror
      </div>
   
      <div>
          <button type="submit" class="btn btn-warning"> update </button>
      </div>
    </form>
        </div>
</div>
    
@endsection