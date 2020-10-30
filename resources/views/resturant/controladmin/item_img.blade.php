@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
             <form>
     <div class="form-group">
       <label for=""><b>Pic</b></label>
       <input type="file" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
       <small id="helpId" class="text-muted">Help text</small>
     </div>
     <div class="form-group">
        <label for=""><b>Comment</b></label>
        <input type="text" name="comments" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
      </div>
      <div class="form-group">
        <label for=""><b>Item_Name</b></label>
        <input type="text" name="item_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
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
            <th>pic</th>
            <th>comment</th>
            <th>Item_Name</th>
         
        </tr>
    </thead>
    <tbody>
       
        <tr>
            <td scope="row">pic</td>
            <td>comment</td>
            <td>Item_Name</td>
          
            <td> <button type="button" class="btn btn-warning"> delete </button></td>
            <td> <button type="button" class="btn btn-danger"> edit </button></td>
        </tr>
    </tbody>
</table>
    </div>
    </div>
</div>
@endsection