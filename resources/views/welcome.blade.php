<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <title>View Posts</title>
    <style>
    body{
        background-color:cyan;
    }
 </style>
  </head>
  <body>
 <h1 class="text-center">CRUD Posts</h1>   <a href="{{url('/addposts')}}" style="float:right;"><button class="btn btn-primary">Add Posts</button></a>  
<div class="container">
<table class="table table-striped table-dark">
<thead>
<tr>
<th>Id</th>
<th>Post name</th>
<th>Post Description</th>
<th>Post Author</th>
<th>Post Created at</th>
<th>Edit</th>
<th>Delete</th>
</tr>    
</thead>
<tbody>
  @foreach($posts as $post)
<tr>
<td>{{$post->id}}</td>
<td>{{$post->pn}}</td>
<td>{{$post->pd}}</td>
<td>{{$post->pa}}</td>
<td>{{$post->pc}}</td>
<td><a href="{{url('/editpost',$post->id)}}"><button class="btn btn-primary">Edit</button></a></td>
<td><a href="{{url('/deletepost',$post->id)}}"><button class="btn btn-danger">Delete</button></a></td>
</tr>
@endforeach    
</tbody>    
</table>
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
