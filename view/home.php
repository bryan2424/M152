<?php require_once './model/frontend.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="./bootstrap-4.2.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="./css/style.css" rel="stylesheet" type="text/css"/>
        <title>Blog</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <a class="navbar-brand" href="#">Logo</a>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="posts.php">Post</a>
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
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <h2>Bonjour</h2>
                    <h5>Bryan</h5>
                    <img src="./upload/cover.jpg" alt="" style="height: 100px;width: 100px;"/>
                    <hr>
                    <p>BIOGRAPHIE</p>
                    <hr>
                    <h3>Infos</h3>
                    <p>Homme</p>
                    <hr>
                </div>  
                <div class="col-sm-8">
                    <?php echo showListPosts(getPosts())?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="./bootstrap-4.2.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>