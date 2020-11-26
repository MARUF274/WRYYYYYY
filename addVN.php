<?php
    session_start();
    if(isset($_POST["inputName"])){
        $connection = new mysqli('localhost', 'root', '', 'crud');

        $NamaVN = $_POST["inputName"];
        $CreatorVN = $_POST["inputCreator"];
        $SinopsisVN = $_POST["inputSinopsis"];

        $LinkPict = $_POST["inputLink"];
        $placeholder = "https://via.placeholder.com/300x420/000000/FFFFFF/?text=IMAGE+NOT+FOUND";
        $message    ="";

        if ($NamaVN=="") {
            $message    = "Nama harus diisi!";
        } else if ($CreatorVN=="") {
            $message    = "Kreator harus diisi!";
        } else if ($SinopsisVN=="") {
            $message    = "Sinopsis harus diisi!";
        } else if ($LinkPict==""){
            $connection->query("INSERT INTO vn(ID, NamaVN, creatorVN, sinopsisVN, linkPict) VALUES (null,'$NamaVN', '$CreatorVN', '$SinopsisVN', '$placeholder')");
        } else {

            $connection->query("INSERT INTO vn(ID, NamaVN, creatorVN, sinopsisVN, linkPict) VALUES (null,'$NamaVN', '$CreatorVN', '$SinopsisVN', '$LinkPict')");

            $message = "Berhasil menambah produk!";

        }
        $_SESSION["message"] = $message;
    }
    header("location:main.php");
    exit();
?>