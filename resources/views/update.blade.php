<!DOCTYPE html>
<html>
<head>
  <title>{{$page}}</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>{{$page}}</h2>
  <form method="POST" action="{{route('books.update',$book['id'])}}">
   @csrf
   @method('PUT')
    <div class="form-group">
      <label for="productTitle">Title:</label>
      <input type="text" class="form-control" name="title" id="productTitle" placeholder="Enter product title">
    </div>
    <div class="form-group">
      <label for="productTitle">description:</label>
      <input type="text" class="form-control" name="description" id="productTitle" placeholder="Enter product description">
    </div>
    <div class="form-group">
      <label for="productPrice">Price:</label>
      <input type="text" class="form-control" name="price" id="productPrice" placeholder="Enter product price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>