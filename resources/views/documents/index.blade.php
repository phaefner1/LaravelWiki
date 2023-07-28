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
	<a class="btn btn-danger mb-3" href="{{ route('logout') }}"
   	    onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
    	    Logout
	</a>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    	    @csrf
	</form>

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
		    <td><a href="/documents/{{ $document->id }}" class="text-light">{{ Str::limit( $document->name, 20, '...')  }}</a></td>
		    <td>{{ Str::limit($document->content, 20, '...') }}</td>
		    <td>
                        <form method="POST" action="/documents/{{ $document->id }}">
                            @csrf
                            @method('delete')
			    <input type="submit" class="btn btn-danger" value="Delete">

			    <a href="/documents/{{ $document->id }}/edit" class="btn btn-secondary ml-2">Edit</a>

			    <a href="/documents/{{ $document->id }}" class="btn btn-primary ml-2">Show</a>
			</form>
		    </td>
                </tr>
                @endforeach
            </tbody>
	</table>
	<p class="fs-6 text-start"> made by phil </p>
    </div>
</body>
</html>

