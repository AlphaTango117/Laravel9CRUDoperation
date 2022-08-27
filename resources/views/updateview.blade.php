
@extends('welcome')
@section('content')
<div class="col-md-4 m-auto border mt-3 p-2 border-info">
<h2 class="text-center text-warning">Update View</h2>

<form action="{{'/updatedata/'.$product['Id']}}" method="post">
    @csrf
   <div class="mb-2">
       <label for="">Product Name</label>
       <input type="text" class="form-control" name="name" value="{{$product['PName']}}">
   </div>
   <div class="mb-2">
       <label for="">Product price</label>
       <input type="text" class="form-control" name="price" value="{{$product['PPrice']}}">
   </div>
   <br>

   <button type="submit" class="btn btn-outline-warning rounded-pill">Update</button>
</form>
</div>
@endsection
