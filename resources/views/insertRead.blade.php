
@extends('welcome')
@section('content')
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="insertData"method="POST"enctype="multipart/form-data">
        @csrf
            <div class="mb-2">
                <input type="text"placeholder="Enter your Name" class="form-control"name="name" id="">
            </div>
            <div class="mb-2">
                <input type="text"placeholder="Enter product's price"class="form-control"name=" price" id="">
            </div>
            <div class="mb-2">
                <input type="file"class="form-control"name="image" id="">
            </div>
        <button type="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" >Add Record</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">
    <table class="table mt-5">
        <thead class="bg-danger text-white fw-bold">
           <th> ID </th>
           <th>Product Name</th>
           <th>Product price</th>
           <th>Product Image</th>
           <th>Update</th>
           <th>Delete</th>
        </thead>
        <tbody class="text-danger bg-lite fs-4">
            @foreach($data as $item)
            <tr>

                    <td class="pt-5"><input type="hidden" value="{{$item['Id']}}" name="id">{{$item['Id']}}</td>
                    <td class="pt-5"><input type="hidden" value="{{$item['PName']}}" name="name">{{$item['PName']}}</td>
                    <td class="pt-5"><input type="hidden" value="{{$item['PPrice']}}" name="price">{{$item['PPrice']}}</td>
                    <td><img src="image/{{$item['PImage']}}" width="100px" height="100px" alt=""></td>
                    <td ><a href="{{'/updatedelete/'.$item['Id']}}" class="btn btn-outline-danger">update</a></td>
                    <td ><a href="{{'/delete/'.$item['Id']}}" class="btn btn-outline-danger">Delete</a></td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
