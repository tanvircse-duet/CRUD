<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class=" container p-3 bg-success-subtle text-dark">
        <div class="d-flex justify-content-between">
            <div class="">
            <a href="/home">HOME</a>

            </div>
            <div class="">
            <a class="btn btn-primary" href="/create">Add New Post</a>
            </div>
        </div>
        <table class="table table-bordered mt-5">
          <thead>
            <tr>
              <th scope="col" class="text-center align-middle">Id</th>
              <th scope="col"class="text-center align-middle">Name</th>
              <th scope="col" class="text-center align-middle">Description</th>
              <th scope="col" class="text-center align-middle">Image</th>
              <th scope="col" class="text-center align-middle">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row" class="text-center align-middle">{{ $post->id }}</th>
                <td class="text-center align-middle">{{ $post->Name }}</td>
                <td class="text-center align-middle">{{ $post->Description }}</td>
                <td class="text-center align-middle">
                    @if($post->Image)
                    <img src="{{ asset($post->Image) }}" width="80px" alt="Post Image" style="max-width: 100px;">

                    @else
                        No Image
                    @endif
                </td>
                <td class="text-center align-middle">
                  <a href="{{route('edit',$post->id)}}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
