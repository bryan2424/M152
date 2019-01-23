<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="./bootstrap-4.2.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Blog</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <a class="navbar-brand" href="view/home.php">Logo</a>
                <li class="nav-item">
                    <a class="nav-link" href="view/home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Post</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <form class="form-inline" action="">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-info" type="submit">Search</button>
                </form>
            </ul>
        </nav>
        <div class="container">
            <h1>Ajouter un post</h1>
            <form>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Default</span>
                    </div>
                    <input type="text" class="form-control">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="./bootstrap-4.2.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>