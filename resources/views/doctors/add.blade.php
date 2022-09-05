@extends('adminlt.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>

  <style>
    form {
       margin-top: 27px;
      margin-right: 250px;
    }

    .card.card-primary {
        margin-top: 40px;
    }

    .container {
        width: 1046px;
    }
      </style>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="{{asset('adminlt/jquery.validate.min.js')}}"></script>
  <script src="{{asset('adminlt/additional-methods.min.js')}}"></script>
</head>
<body>



<div class="container">
  <h2>Doctors Form</h2>
  <form action="{{route('doctors.save-add')}}" method="POST"  enctype="multipart/form-data" id="doctors">

    @csrf

     <div class="form-group">
      <label >Image:</label>
      <input type="file" class="form-control" id="image"  name="image">
    </div>

    <div class="form-group">
      <label >Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>


    <div class="form-group">
      <label >Position:</label>
      <input type="text" class="form-control" id="position" placeholder="Enter position" name="position">
    </div>

    <div class="form-group">
      <label >Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
    </div>

    <div class="form-group">
      <label >Department:</label>
      <select class="form-control"  name="department" id="department">
        <option value="">select department</option>

        @if(isset($getdepartment) && !$getdepartment->isEmpty())
           @foreach($getdepartment as $key=>$v)

        <option value="{{$v->id}}">{{$v->title}}</option>

           @endforeach
        @endif
    </select>
    </div>

     <div class="form-group">
      <label >Status:</label>
      <select class="form-control"  name="status" id="status">
        <option value="">select status</option>
        <option value="1">Active</option>
        <option value="2">Inactive</option>
      </select>
     </div>

    <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{route('doctors.listing')}}" class="btn btn-danger">Cancle</a>
</form>
</div>

<script>

  $(document).ready(function() {
    $("#doctors").validate({
      rules: {
        image: {required:true},
        name: {required:true},
        position: {required:true},
        description: {required:true},
        department: {required:true},
        status:  {required: true},
      },
      messages: {
        image: { required: "this field is required."},
        name: { required: "this field is required."},
        position: { required: "this field is required."},
        description: { required: "this field is required."},
        department: { required: "this field is required."},
        status: { required: "this field is required.."},
     }
    });
  });
</script>
@include('adminlt.common.toster')
</body>
</html>



@endsection
