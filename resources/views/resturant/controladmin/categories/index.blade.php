@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
             <form method="POST" action="/category">
                @csrf
            <div class="form-group">
                  <h3 class="text-bold">Add New Food Category</h3>
                 <label for=""> <b>Food Category</b></label>
                <input type="text" name="name" class="form-control"value="{{old("name")}}">
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
    <div class="col-md-8">
<table class="table offset-3">
    <thead>
        <tr>
            <th> Food Categories </th>
            <th>&nbsp;</th>
           
        </tr>
    </thead>
    <tbody>
            
            @forelse ($categories as $category)
            <tr>
            <td scope="row"><a href="/category/{{$category->id}}" class="linked">{{$category->name}}</a></td>
            <td style="width: 50px"><a class="btn btn-warning btn-sm ml-3" href="category/{{$category->id}}/edit" >Edit</a></td>
                <td>
                    <form action="/category/{{$category->id}}" method="POST">
                        @csrf
                        @method("delete")
                        <input style="width: 50px" class="btn btn-sm btn-danger ml-3" type="submit" value="Delete">

                    </form>
                </td>
                <td></td>
            </tr>
                
            @empty
            <tr>
                
                <td colspan="3">No category</td>
            </tr>
            @endforelse
        </tbody>
</table>
    </div>
    </div>
</div>
@endsection