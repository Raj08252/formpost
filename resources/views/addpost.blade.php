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
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Add Post:-</title>
<style>
    body
    {
        background-color:cyan;
    }
</style>
</head>
  <body>
  <h1 class="text-center">Add Posts:-</h1><a  style="float:right;" href="{{url('/')}}"><button class="btn btn-primary">View Posts</button></a>
  <div class="container mt-4" style="background-color:yellow;">
<form action="{{url('/addpost')}}" method="post" enctype="multipart/form-data">
        @csrf

    <div class="form-group">
        <label for="pn" class="control-label">Post Name</label>
        <input type="text" name="pn" class="form-control" value={{ old('pn') }}><br>
        <span class="text-danger">
            @error('pn')
                {{ $message }}
            @enderror
        </span></div>

        <div class="form-group">
        <label for="pd" class="control-label">Post description</label>
        <input type="text" name="pd" class="form-control" value={{ old('pd') }}><br>
        <span class="text-danger">
            @error('pd')
                {{ $message }}
            @enderror
       </span></div>

       <div class="form-group">
       <label for="pa" class="control-label">Post Author</label>
        <input type="text" name="pa" class="form-control" value={{ old('pa') }}><br>
        <span class="text-danger">
            @error('pa')
                {{ $message }}
            @enderror
        </span></div>

        <div class="form-group">
       <label for="pc" class="control-label">Post Created</label>
        <input type="date" name="pc" class="form-control" value={{ old('pc') }}><br>
        <span class="text-danger">
            @error('pc')
                {{ $message }}
            @enderror
        </span></div>
        
      <input type="submit" class="btn btn-primary"><br>

    </form><br>       
</div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
