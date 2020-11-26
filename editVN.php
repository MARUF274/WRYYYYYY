<?php
    session_start();
    if(isset($_POST["inputName"])){
        $connection = new mysqli('localhost', 'root', '', 'crud');
        $VNID = $_POST["id"];
        $NamaVN = $_POST["inputName"];
        $CreatorVN = $_POST["inputCreator"];
        $SinopsisVN = $_POST["inputSinopsis"];

        $LinkPict = $_POST["inputLink"];
        $placeholder = "https://via.placeholder.com/300x420/000000/FFFFFF/?text=IMAGE+NOT+FOUND";
        $message    ="";
        if ($NamaVN=="") {
            $message    = "Nama harus diisi!";
        } else if ($CreatorVN=="") {
            $message    = "Deskripsi harus diisi!";
        } else if ($SinopsisVN=="") {
            $message    = "Harga harus diisi!";
        } else if ($LinkPict==""){
            $connection->query("UPDATE vn SET namaVN='".$NamaVN."', creatorVN='".$CreatorVN."', sinopsisVN='".$SinopsisVN."', linkPict='".$placeholder."' WHERE id=".$VNID);
            }
            else{
            $connection->query("UPDATE vn SET namaVN='".$NamaVN."', creatorVN='".$CreatorVN."', sinopsisVN='".$SinopsisVN."', linkPict='".$LinkPict."' WHERE id=".$VNID);
            $message = "Berhasil mengedit produk!";
        }
        $_SESSION["message"] = $message;
        header("location:edit.php");
        exit();
    }
    header("location:edit.php");
    exit();
?>