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

tr.x {
    font-size: 19px;
    color: coral;
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

<table class="table table-dark table-bordered">

  <tr class="x">
    <th>Id</th>
    <th>image</th>
    <th>title</th>
    <th>description</th>
    <th>popular post</th>
    <th>categories</th>
    <th>tags</th>
    <th>status</th>
    <th>Action</th>
  </tr>

  @if(isset($getallblog) && !$getallblog->isEmpty())

    @foreach($getallblog as $key=>$v)

     <?php 

        $mycategories = \App\Models\Categories::where('id',$v->categories)->first();
        $mytags = \App\Models\Tags::where('id',$v->tags)->first();

       ?>


    <tr>
      <td>{{$v->id}}</td> <!-- database name -->
      <td>{{$v->image}}</td> <!-- database name -->
      <td>{{$v->title}}</td> <!-- database name -->
      <td>{{$v->description}}</td> <!-- database name -->
      <td>
        @if($v->popular_post == 1)
           Yes
        @else
           No
        @endif
      </td>
      <td>
      @if($mycategories !=null)
        {{$mycategories->categories}}
       @else
        -
       @endif
      </td>
      <td>
       @if($mytags !=null)
        {{$mytags->tags}}
       @else
        -
       @endif
      </td>
      <td>
      	@if($v->status == 1)
      	  active
        @else
           inactive
        @endif
    </td>
      <td>
        <a href="{{route('blog.edit',$v->id)}}">Edit</a>   
        <a href="{{route('blog.delete',$v->id)}}">Delete</a>
      </td>
    </tr>

    @endforeach

  @endif

</table>

  @if(isset($getallblog) && !$getallblog->isEmpty())

<div style="margin-top: 40px; text-align: center;">
  
    {!! $getallblog->links() !!}

</div>
    
  @endif
</body>
</html>




@endsection