<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40; /* Dark background */
            color: #f8f9fa; /* Light text color */
        }
        .form-control {
            background-color: #495057; /* Darker background for form elements */
            color: #f8f9fa; /* Light text color for form elements */
        }
        .form-control:focus {
            background-color: #495057; /* Darker background for form elements */
            color: #f8f9fa; /* Light text color for form elements */
            border-color: #6c757d; /* Dark border color for focused form elements */
            box-shadow: none; /* Removes Bootstrap's default box-shadow */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-light">Edit Document</h1>
        <form method="POST" action="/documents/{{ $document->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="text-light">Name:</label>
                <input type="text" id="name" name="name" value="{{ $document->name }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="content" class="text-light">Content:</label>
                <textarea id="content" name="content" class="form-control">{{ $document->content }}</textarea>
            </div>
            <div class="text-center">
                <input type="submit" value="Update Document" class="btn btn-primary">
                <a href="/documents" class="btn btn-primary ml-2">Return</a>
            </div>
        </form>
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

