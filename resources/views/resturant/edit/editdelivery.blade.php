@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
         <form method="POST" action="/delivery/{{$delivery->id}}">
              @csrf
              @method("put")
     <div class="form-group">
       <label for=""><b>Region</b></label>
     <input type="text" name="region" id="" class="form-control" placeholder="{{$delivery->region}}" aria-describedby="helpId">
      @error('region')
     <small id="helpId" class="text-muted">{{$message}}</small>
      @enderror
     </div>
     <div class="form-group">
        <label for=""><b> Price </b></label>
        <input type="text" name="price" id="" class="form-control" placeholder="{{$delivery->price}}" aria-describedby="helpId">
        @error('price')
        <small id="helpId" class="text-muted">{{$message}}</small>
        @enderror    
      </div>
      <div class="form-group">
        <label for=""><b>Location</b></label>
        <select name="branche_id" class="form-control">
        <option>{{$delivery->branche_id}}</option>
            @foreach (\App\Models\Branch::all() as $branch)
            <option value="{{$branch->id}}">{{$branch->location}}</option>
        @endforeach 
        </select>
              @error('branche_id')
                      <small id="helpId" class="text-muted">{{$message}}</small>
       @enderror
       </div>
       <div>
                <button type="submit" class="btn btn-warning"> Update </button>
        </div>
</form>
         </div>
        </div> 
    </div>
    @endsection