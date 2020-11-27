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
            <h4 class="display-4" style="text-align: center;">Hello, Welcome To Shinigami Library</h4>
            <h3 style="text-align: center; text-weight:lighter;">Berikut Data Visual Novel di Database</h3>
            <?php $connection = new mysqli('localhost', 'root', '', 'crud');
$getProduct = $connection->query("SELECT * FROM vn ");
while ($fetchVN = $getProduct->fetch_assoc()){
?>
        </div>
        <div class="card mb-3 mr-auto ml-auto border-info" style="max-width: 940px;">
            <div class="card-header">
                Id: <?=$fetchVN["ID"]?>
            </div>
            <div class="row no-gutters">
                <div class="col-md-3">
                    <img class="card-img" style="margin-left:6px; margin-top:16px;" src="<?=$fetchVN["linkPict"]?>"
                        alt="">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title"><?=$fetchVN["namaVN"]?></h5>
                        <p class="card-text">Developer: <?=$fetchVN["creatorVN"]?></p>
                        <p class="card-text overflow-auto" style="height: 12rem;"><?=$fetchVN["sinopsisVN"]?></p>
                        <a href="edit.php?id=<?=$fetchVN["ID"]?>"><button type="button" class="btn btn-sm btn-warning"
                                style="margin-right: 20px;">Edit</button></a>
                        <a href="delete.php?id=<?=$fetchVN["ID"]?>"><button type="button"
                                class="btn btn-sm btn-danger">Delete</button></a>
                    </div>
                </div>
            </div>
            <?php 
        }
        ?>
        </div>

    </div>

</body>

</html>