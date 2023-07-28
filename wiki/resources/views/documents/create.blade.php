<!DOCTYPE html>
<html>
<head>
    <title>Create Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #222;
            color: #fff;
        }
        .container {
            background-color: #333;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            background-color: #444;
            border-color: #666;
            color: #fff;
        }
        .form-control:focus {
            background-color: #444;
            border-color: #666;
            color: #fff;
            box-shadow: none;
        }
    </style>
</head>
<body class="p-3">
    <div class="container">
        <h1 class="text-center text-light mb-4">Create Document</h1>
        <form method="POST" action="/documents">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="content" name="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Create Document" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>

