@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
             <form method="POST" action="/delivery" enctype="multipart/form-data">
                @csrf
     <div class="form-group">
       <label for=""><b>Region</b></label>
       <input type="text" name="region" id="" class="form-control" placeholder="" aria-describedby="helpId">
      @error('region')
     <small id="helpId" class="text-muted">{{$message}}</small>
      @enderror
     </div>
     <div class="form-group">
        <label for=""><b> Price </b></label>
        <input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
        @error('price')
        <small id="helpId" class="text-muted">{{$message}}</small>
        @enderror    
      </div>
      <div class="form-group">
        <label for=""><b>Branch</b></label>
        <select name="branche_id" class="form-control">
            <option></option>
            @foreach (\App\Models\Branch::all() as $branch)
                <option value="{{$branch->id}}">{{$branch->location}}</option>
            @endforeach 
        </select>
                  @error('branche_id')
                          <small id="helpId" class="text-muted">{{$message}}</small>
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
            <th>Region</th>
            <th>  Price </th>
            <th>Branch</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($delivery as $del)
        <tr>
        <td >{{$del->region}}</td>
            <td> {{$del->price}} </td>
            <td>
                {{$del->branch->location}}
            </td>
            {{-- <td>
            <img src="{{asset('storage/'.$del->resturent_info->main_pic)}}" class="img img-fluid">
            </td> --}}

        {{-- <td>{{$del->branche_id->location}}</td> --}}
        <td> <form action="/delivery/{{$del->id}}" method="POST"> 
            @csrf
            @method("delete")
           <button type="submit" class="btn btn-warning"> delete </button>
        </form></td>
            <td> <a type="button" class="btn btn-danger" href="/delivery/{{$del->id}}/edit "> edit </a></td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
    </div>
</div>
@endsection