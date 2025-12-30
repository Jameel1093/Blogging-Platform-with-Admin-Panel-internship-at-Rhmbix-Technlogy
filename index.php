
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bloging Website</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Welcome to Bloging Websites</a>
        <form class="d-flex" action="index.php" method="GET">
            <input class="form-control me-2" type="search" name="search" placeholder="Search posts...">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <script>
                            $search = $_GET['search'] ?? '';
            $query = "SELECT * FROM posts WHERE title LIKE '%$search%' ORDER BY created_at DESC";
            $result = $conn->query($query);

            while($row = $result->fetch_assoc()): ?>
            </script>
                <div class="card mb-4 shadow-sm">
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Categories</div>
                <ul class="list-group list-group-flush">
                </ul>
            </div>
        </div>
    </div>


    
    <h2>Create New Post</h2>
    <form method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Category</label>
            <select name="category" class="form-select">
                <option>Technology</option>
                <option>Lifestyle</option>
                <option>Travel</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Featured Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea name="content"></textarea>
            <script>CKEDITOR.replace('content');</script>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Publish Post</button>
    </form>
</body>
</html>