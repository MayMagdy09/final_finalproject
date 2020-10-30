@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
             <form method="POST" action="/info" enctype="multipart/form-data">
                 @csrf
     <div class="form-group">
       <label for=""> <b>Main_Pic</b></label>
       <input type="file" name="main_pic" class="form-control" placeholder="" aria-describedby="helpId">
       @error('main_pic')
       <small id="helpId" class="text-muted">{{$message}}</small>
       @enderror
     </div>
     <div class="form-group">
        <label for=""> <b>Description</b> </label>
       <input type="text" name="desc"  class="form-control" placeholder="" aria-describedby="helpId">
      @error('desc')
     <small id="helpId" class="text-muted">{{$message}}</small>
      @enderror
      </div>
   
      <div>
          <button type="submit" class="btn btn-warning"> add </button>
      </div>
    </form>
    </div>
    <div class="col-md-8">
<table class="table">
    <thead>
        <tr>
            <th>Main_pic</th>
            <th>Description</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($info as $info)
        <tr>
            <td style="width: 25px; height: 25px;"> <img src="{{asset('storage/'.$info->main_pic)}}" class="img img-fluid"> </td>
            <td>{{$info->desc}}</td>
        <td> <form action="/info/{{$info->id}}" method="POST">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-warning"> delete </button>
        </form>
    </td>
    <td> <a type="button" class="btn btn-danger" href="info/{{$info->id}}/edit" > edit </a></td>
        </tr>
    </tbody>
    @endforeach
</table>
    </div>
    </div>
</div>
@endsection