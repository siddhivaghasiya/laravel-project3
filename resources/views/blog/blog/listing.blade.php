@extends('adminlt.layout')

@section('content')

 

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


a {
    color: black;
    text-decoration: underline;
}

</style>
</head>
<body>

<h2>Blogs listing</h2>

<div style="margin-top:20px; margin-bottom:40px;">
  <a href="{{route('blog.add')}}"><h4>Add Blogs Record</h4></a>
</div>

<table>

  <tr>
    <th>Id</th>
    <th>title</th>
    <th>description</th>
    <th>Action</th>
  </tr>

  @if(isset($getallcategories) && !$getallcategories->isEmpty())

    @foreach($getallcategories as $key=>$v)

    <tr>
      <td>{{$v->id}}</td> <!-- database name -->
      <td>{{$v->categories}}</td>
      <td>
      	@if($v->status == 1)
      	  active
        @else
           inactive
        @endif
    </td>
      <td>
        <a href="{{route('categories.edit',$v->id)}}">Edit</a>   
        <a href="{{route('categories.delete',$v->id)}}">Delete</a>
      </td>
    </tr>

    @endforeach

  @endif

</table>

  @if(isset($getallcategories) && !$getallcategories->isEmpty())

<div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getallcategories->links() !!} -->
    {!! $getallcategories->render() !!}              <!-- for pagination -->

</div>
    
  @endif
</body>
</html>




@endsection