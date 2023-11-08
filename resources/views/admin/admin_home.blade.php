<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Panel</title>
</head>
<body>
@include('home.side_nav')
<div class="container">
    <h1 class="text-center mt-5">Book Information Form</h1>
    @if(session()->has('message'))
        <script>
            Swal.fire({
                text:"{{session()->get('message')}}",
            })
        </script>

    @endif
    <form class="mt-5" action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="book-title">Book Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>

        <div class="form-group">
            <label for="book-author">Book Author</label>
            <input type="text" class="form-control" name="author" required>
        </div>

        <div class="form-group">
            <label for="book-genre">Book Genre</label>
            <input type="text" class="form-control" name="genre" required>
        </div>

        <div class="form-group">
            <label for="book-year">Book Year</label>
            <input type="number" class="form-control" name="year" required>
        </div>

        <div class="form-group">
            <label for="book-image">Book Image</label>
            <input type="file" class="form-control-file" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>
</body>
</html>
