@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
             <form>
     <div class="form-group">
       <label for=""><b>Estimated Time Request</b></label>
       <input type="text" name="estimated_time_request" id="" class="form-control" placeholder="" aria-describedby="helpId">
       <small id="helpId" class="text-muted">Help text</small>
     </div>
     <div class="form-group">
        <label for=""><b>Status</b></label>
        <input type="text" name="status" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
      </div>
      <div class="form-group">
        <label for=""><b>User</b></label>
        <input type="text" name="user_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
      </div>
      <div class="form-group">
        <label for=""><b>Delevery location </b></label>
        <input type="text" name="delevery_location_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
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
            <th>Estimated Time Request</th>
            <th>Status</th>
            <th>User</th>
            <th>Delevery location</th>
       
        
        </tr>
    </thead>
    <tbody>
       
        <tr>
            <td scope="row">Estimated Time Request</td>
            <td>Status</td>
            <td>User</td>
            <td>Delevery location</td>
          
            <td> <button type="button" class="btn btn-warning"> delete </button></td>
            <td> <button type="button" class="btn btn-danger"> edit </button></td>
        </tr>
    </tbody>
</table>
    </div>
    </div>
</div>
@endsection