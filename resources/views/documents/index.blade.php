<!DOCTYPE html>
<html>
<head>
    <title>Document List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
	    background-color: #343a40;
            color: #fff;
        }
        .container {
            background-color: #1f2326;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
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
<body class="p-3">
    <h1 class="text-center text-light mb-4">Document List</h1>

    <div class="container">
	<div class="d-flex justify-content-between">
	    <div>
	    	<a href="/documents/create" class="btn btn-primary mb-3">Create document</a>
	    	<a class="btn btn-danger mb-3" href="{{ route('logout') }}"
   	        	onclick="event.preventDefault();
            		document.getElementById('logout-form').submit();">
    	    		Logout
            	</a>
	    </div>

    	    <div class="d-flex justify-content-end mb-3">
            	<form class="form-inline align-items-center my-2 my-lg-0" action="/documents" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
                    <button class="btn btn-dark my-2 my-sm-0 form-control" type="submit">Search</button>
    	    	</form>
            </div>
	</div>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    	    @csrf
	</form>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Content</th>
                    <th class="d-flex justify-content-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documents as $document)
                <tr>
		    <td><a href="/documents/{{ $document->id }}" class="text-light">{{ Str::limit( $document->name, 20, '...')  }}</a></td>
		    <td>{{ Str::limit($document->content, 20, '...') }}</td>
		    <td class="d-flex justify-content-end">
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

