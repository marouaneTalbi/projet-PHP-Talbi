<?php
require_once '../connect.php';
// require_once 'security.php';



if(isset($_GET['id']) && $_GET['id']<1000){

    $id = (int)htmlspecialchars(addslashes($_GET['id']));

    $req = "SELECT image FROM article where id_art =".$id ;
    $res =  mysqli_query($conn,$req);
    $data = mysqli_fetch_assoc($res);

    $sql = "DELETE FROM article WHERE id_art=".$id;

    $resultat = mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn) > 0){

        copy('../assets/images/'.$data['image'],'../assets/archives/'.$data['image']);
        unlink('../assets/images/'.$data['image']);
        header('location:list.php');


    }else{

        echo " ERROR" ;
    }
}