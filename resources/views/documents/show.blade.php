<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Show Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center text-light mb-4">{{ $document->name }}</h1>
    <div class="text-center mb-4">
        <a href="/documents/{{ $document->id }}/edit" class="btn btn-primary">Edit document</a>
    </div>
    <div class="card bg-dark text-white">
        <div class="card-body">
            <p>{{ $document->content }}</p>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

