@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
            <h3>Add Admin</h3>
            
            <form method="POST" action="/user">
                @csrf                    
                <div class="form-group mt-4">
                  <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{old("name")}}" placeholder="Name">
                {{-- <small id="name_msg" class="text-danger"></small>  --}}
                @error('name')
                    <small  class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <div class="form-group mt-4">
                  <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{old("email")}}" placeholder="Email">
                {{-- <small id="name_msg" class="text-danger"></small>  --}}
                @error('email')
                    <small  class="text-danger">{{$message}}</small>
                @enderror
                </div>
      
                

                <input class="btn btn-warning" type="submit" value="Save">
            </form>
    </div>
    <div class="col-md-8">
        <h3>All Users</h3>
        @if (session()->has("error"))
            <small class="text-danger">
                {{session()->get("error")}}
            </small>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>                           
                    <th>Email</th>                           
                    <th>Role</th>                           
                                               
                    <th>&nbsp;</th>                           
                   
                </tr>
            </thead>
            <tbody>
                @forelse (App\Models\User::all() as $u)
                <tr>
                    <td>{{$u->name}}</td>                            
                    <td>{{$u->email}}</td>                            
                    <td>{{$u->role}}</td> 
                    
                 </tr>
                @empty
                <tr>
                    <td colspan="3">No Users</td>
                </tr>
                @endforelse
               
               
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection