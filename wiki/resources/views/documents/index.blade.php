<!DOCTYPE html>
<html>
<head>
    <title>Document List</title>
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
    </style>
</head>
<body class="p-3">
    <h1 class="text-center text-light mb-4">Document List</h1>
    <div class="container">
        <a href="/documents/create" class="btn btn-primary mb-3">Create document</a>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documents as $document)
                <tr>
                    <td>{{ $document->id }}</td>
                    <td><a href="/documents/{{ $document->id }}" class="text-light">{{ $document->name }}</a></td>
                    <td>{{ $document->content }}</td>
                    <td>
                        <form method="POST" action="/documents/{{ $document->id }}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

