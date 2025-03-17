<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-3 bg-success-subtle text-dark">
    @if(session('success'))
        <div class="alert bg-warning alert-dismissible show d-flex align-items-center shadow-lg" role="alert" style="border-left: 5px solid #198754; border-radius: 4px;">
        <i class="bi bi-check-circle-fill me-3" style="font-size: 1.5rem;"></i>
        <div class="flex-grow-1">
            {{ session('success') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
        <div class="d-flex justify-content-between">
            <div class="">
            <a class="btn btn-primary" href="/test">Back to Home</a>
            </div>
        </div>
        <div>
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name" placeholder="Enter name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description"value="{{old('description')}}"  id="description" rows="3" placeholder="Enter description"></textarea>
                </div>
                @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" value="{{old('image')}}"  name="image" id="image">
                </div>
                @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
