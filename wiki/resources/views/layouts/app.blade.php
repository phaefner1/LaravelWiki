<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

