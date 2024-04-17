<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post['title'] }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add your custom CSS styles here */
        body {
            padding-top: 20px;
        }
        .post-container {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container post-container">
    <div class="card">
        <div class="card-header">
            <h2>{{ $post['title'] }}</h2>
        </div>
        <div class="card-body">
            <p>{{ $post['post'] }}</p>
            <p><strong>Publisher:</strong> {{ $post->user->name }}</p>
        </div>
        <div class="card-footer">
            <a href="/" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
</div>
<!-- Bootstrap JS (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
