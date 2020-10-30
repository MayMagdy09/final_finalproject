@extends('resturant.admin')
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-4">
             <form>
     <div class="form-group">
       <label for=""><b>Item</b></label>
       <input type="text" name="item_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
       <small id="helpId" class="text-muted">Help text</small>
     </div>
     <div class="form-group">
        <label for=""><b>Order</b></label>
        <input type="text" name="order_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
      </div>
      <div class="form-group">
        <label for=""><b>Quentity</b></label>
        <input type="number" name="qty" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
      </div>
      <div class="form-group">
        <label for=""><b>Price</b></label>
        <input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
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
            <th>Item</th>
            <th>Order</th>
            <th>Quentity</th>
            <th>Price</th>
       
        
        </tr>
    </thead>
    <tbody>
       
        <tr>
            <td scope="row">Item</td>
            <td>Order</td>
            <td>Quentity</td>
            <td>Price</td>
          
            <td> <button type="button" class="btn btn-warning"> delete </button></td>
            <td> <button type="button" class="btn btn-danger"> edit </button></td>
        </tr>
    </tbody>
</table>
    </div>
    </div>
</div>
@endsection