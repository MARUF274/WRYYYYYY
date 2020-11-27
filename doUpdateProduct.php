<?php
    session_start();
    if(isset($_POST["productName"])) {
        include 'connect.php'; 

        $VNID = $_POST['ID'];
        $NameVN = $_POST['inputName'];
        $CreatorVN = $_POST['inputCreator'];
        $sinopsisVN = $_POST['inputSinopsis'];
        $linkImage = $_POST['inputLink'];
        $placeholder = "https://via.placeholder.com/300x420/000000/FFFFFF/?text=IMAGE+NOT+FOUND";
        $message    ="";
    
        if($NameVN==""){
            $message    = "Product Name must be filled";
        }else if ($CreatorVN==""){
            $message    = "Product Description must be filled";
        }else if ($sinopsisVN==""){
            $message    = "Product Price must be filled";
        }else{

            if(isset($linkImage["linkPict"]) && $linkImage["linkPict"]!==""){
            $connection->query("UPDATE vn SET linkPict='".$linkImage."' WHERE ID = ".$VNID);
        }
            $connection->query("UPDATE vn SET namaVN='.$NameVN.', creatorVN='.$CreatorVN.', sinopsisVN='.$sinopsisVN.' WHERE ID=".$VNID);
            query.exec();
            $message = "Successfully update new Product";
        }

        $_SESSION["message"] = $message;

        header("location:edit.php?id=".$VNID);
        exit();
    }

    header("location:main.php");
    exit();
?>