@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
         <form method="POST" action="/branch/{{$branch->id}}" >
            @method("put")
            @csrf
     <div class="form-group">
       <label for=""><b>Location</b></label>
     <input type="text" name="location" id="" class="form-control" placeholder="{{$branch->location}}" aria-describedby="helpId">
@error('location')
     <small id="helpId" class="text-muted">{{$message}}</small>

@enderror
    </div>
     <div class="form-group">
        <label for=""><b> Phone Contact </b></label>
     <input type="text" name="phone_contact" id="" class="form-control" placeholder="{{$branch->phone_contact}}" aria-describedby="helpId">
@error('phone_contact')
     <small id="helpId" class="text-muted">{{$message}}</small>
@enderror
</div>
<div class="form-group">
  <label for=""><b>Info</b></label>
  <select name="resturent_info_id" class="form-control" placeholder="{{old("phone_contact")}}">
  <option>{{$branch->resturent_info->main_pic}}</option>
      @foreach (\App\Models\Resturent_Info::all() as $info)
          <option value="{{$info->id}}">{{$info->main_pic}}</option>
      @endforeach
  </select>
@error('resturent_info_id')
<small id="helpId" class="text-muted">Help text</small>
@enderror
</div>
<div>
    <button type="submit" class="btn btn-warning"> Update </button>
</div>
</form>
</div>
@endsection