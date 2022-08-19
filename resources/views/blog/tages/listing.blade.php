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

<h2>Tags listing</h2>

<div style="margin-top:20px; margin-bottom:40px;">
  <a href="{{route('tag.add')}}"><h4>Add Tags Record</h4></a>
</div>

<table>

  <tr>
    <th>Id</th>
    <th>Tags</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

  @if(isset($getalltags) && !$getalltags->isEmpty())

    @foreach($getalltags as $key=>$v)

    <tr>
      <td>{{$v->id}}</td> <!-- database name -->
      <td>{{$v->tags}}</td>
      <td>
      	@if($v->status == 1)
      	  active
        @else
           inactive
        @endif
    </td>
      <td>
        <a href="{{route('tag.edit',$v->id)}}">Edit</a>   
        <a href="{{route('tag.delete',$v->id)}}">Delete</a>
      </td>
    </tr>

    @endforeach

  @endif

</table>

  @if(isset($getalltags) && !$getalltags->isEmpty())

<div style="margin-top: 40px; text-align: center;">
  
    <!-- {!! $getalltags->links() !!} -->
    {!! $getalltags->render() !!}              <!-- for pagination -->

</div>
    
  @endif
</body>
</html>




@endsection