<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page}}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <table class="table table-hover table-dark">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $index => $book)
          <tr>
            <th scope="row">{{$index}}</th>
            <td>{{$book['title']}}</td>
            <td><img width="60px" height="60px" src="{{ asset('storage/books/') ."/". $book->pic}}" alt="null"></td>
            <td>{{ $book->category->name ?? '-' }}</td>
            <td>{{$book['price']}}</td>
            <td>
              <form action="{{route('books.destroy',$book['id'])}}" method="POST">
              @csrf
              @method('Delete')
              <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
            <td>
            <form action="{{route('books.edit',$book['id'])}}">
              <button type="submit" class="btn btn-warning" > Update
              </button>
            </form>

            </td>
            <td>
              <form action="{{route('books.show',$book['id'])}}"  >
                <button type="submit" class="btn btn-success">Details</button>
              </form>

              </td>
          </tr>
          @endforeach
        </tbody>
      </table>


      {{ $books->links() }}
</body>
</html>
