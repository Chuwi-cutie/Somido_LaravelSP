<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: pink;
            margin: 0;
            padding: 20px;
        }
        nav {
            background-color: white;
            padding: 15px;
            margin-bottom: 20px;
        }
        nav a {
            margin-right: 20px;
            text-decoration: none;
            color: black;
        }
        .container {
            background-color: white;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .btn {
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/students') }}">Students</a>
        <a href="{{ url('/students/create') }}">Add Student</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
