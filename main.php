<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/style2.css">
</head>

<body>
    <!-- Just an image -->
    <div class="navigasi">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">
                <img src="src/img/iconWeb.png" height="60" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler " data-toggle="collapse" data-target="#navMenu">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="navMenu">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item ">
                        <a href="main.php" class="nav-link ">Add VN</a>
                    </li>
                    <li class="nav-item ">
                        <a href="view.php" class="nav-link ">View VN</a>
                    </li>
                    <li class="nav-item ">
                        <a href="# " class="nav-link ">About Me</a>
                    </li>
                    <li class="nav-item ">
                        <a href="# " class="nav-link ">Contact</a>
                    </li>

                </ul>

            </div>

        </nav>
    </div>


    <div class="container justify-content-center">

        <div class="jumbotron">
            <h4 class="display-4" style="text-align: center;">Hello, Welcome To Shinigami VN Library</h4>
            <h3 style="text-align: center; text-weight:lighter;">Silakan Tambah Data Visual Novel ke Database</h3>

        </div>
        <form style="margin-left: 50px;margin-right: 50px;" action="addVN.php" method="post"
            enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Judul Visual Novel</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputName">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCreator" class="col-sm-2 col-form-label">Creator</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputCreator">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputSinopsis" class="col-sm-2 col-form-label">Sinopsis</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="inputSinopsis"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCreator" class="col-sm-2 col-form-label">Link Cover</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inputLink">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button class="btn btn-success">ADD</button>
                </div>
            </div>

        </form>
        <?php 
        if(isset($_SESSION["message"])){
            echo($_SESSION["message"]);
            unset($_SESSION["message"]);
            
        }
        ?>
    </div>

</body>

</html>