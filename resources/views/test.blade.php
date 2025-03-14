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
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Image</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->Name }}</td>
                <td>{{ $post->Description }}</td>
                <td>
                    @if($post->Image)
                        <img src="Images/{{ $post->Image }}" alt="Post Image" style="max-width: 100px;">
                    @else
                        No Image
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
