<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>
<body>
@include('home.side_nav')
<div class="container-fluid mt-4 mb-4">
    <div class="row">
        @foreach($book as $books)
            <div class="col card mx-1" style="width: 18rem;">
                <img src="{{$books->BookImage}}" class="card-img-top" style="width: 100%;height: 18rem" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$books->BookTitle}}</h5>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
