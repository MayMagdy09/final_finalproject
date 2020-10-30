@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
             <form method="POST" action="/branch" enctype="multipart/form-data">
                @csrf
     <div class="form-group">
       <label for=""><b>Location</b></label>
       <input type="text" name="location" id="" class="form-control" placeholder="" aria-describedby="helpId">
@error('location')
     <small id="helpId" class="text-muted">{{$message}}</small>

@enderror
    </div>
     <div class="form-group">
        <label for=""><b> Phone Contact </b></label>
        <input type="text" name="phone_contact" id="" class="form-control" placeholder="" aria-describedby="helpId">
@error('phone_contact')
     <small id="helpId" class="text-muted">{{$message}}</small>
@enderror
    </div>
      <div class="form-group">
        <label for=""><b>Info</b></label>
        <select name="resturent_info_id" class="form-control">
            <option></option>
            @foreach (\App\Models\Resturent_Info::all() as $info)
                <option value="{{$info->id}}">{{$info->main_pic}}</option>
            @endforeach
        </select>
    @error('resturent_info_id')
    <small id="helpId" class="text-muted">Help text</small>
      @enderror
      </div>
      <div>
          <button type="submit" class="btn btn-warning"> Add </button>
      </div>
    </form>
    </div>
    <div class="col-md-8">
<table class="table">
    <thead>
        <tr>
            <th>Location</th>
            <th> Phone Contact</th>
            <th>Info</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($branch as $location)
        <tr>
        <td >{{$location->location}}</td>
        <td>{{$location->phone_contact}}</td>
        {{-- <td>{{$location->resturent_info->main_pic}}</td> --}}
        <td style="width: 20px;height: 20px;"> <img src="{{asset('storage/'.$location->resturent_info->main_pic)}}" class="img img-fluid" ></td>
        <td><form action="/branch/{{$location->id}}" method="POST">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-warning"> delete </button>
        </form></td>
    <td> <a type="button" class="btn btn-danger" href="/branch/{{$location->id}}/edit"> edit </a></td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
    </div>
</div>
@endsection