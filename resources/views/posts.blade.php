<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .card-text {
            color: #555;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .text-muted {
            font-size: 0.9rem;
            color: #888;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Posts</h1>
    @foreach($posts as $post)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">{{ $post['post'] }}</p>
                <p class="card-text text-muted">Published by {{ $post['publisher'] }}</p>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
