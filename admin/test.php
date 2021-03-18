<?php
require_once('../connect.php');

// var_dump($_POST);
// if(isset($_POST['soumis'])){

// //     if(isset($_POST['titre']) && isset($_POST['auteur']) && isset($_POST['date_created']) ){

//         $id = trim(htmlspecialchars(addslashes($_POST['id_art'])));
//         $titre = trim(htmlspecialchars(addslashes($_POST['titre'])));
//         $auteur = trim(htmlspecialchars(addslashes($_POST['auteur'])));
//         $description = trim(htmlspecialchars(addslashes($_POST['description'])));
//         $date_created = trim(htmlspecialchars(addslashes($_POST['date_created'])));
//         $id_categorie = trim(htmlspecialchars(addslashes($_POST['categorie'])));

//         $image= $_FILES['image']['name'];




//         if(empty($image)){

//             $sql2 = "UPDATE article 
//             SET titre='$titre',
//             auteur='$auteur',
//             description='$description',
//             id_categorie='$id_categorie',
//             date_created = '$date_created',
//             WHERE id_art=".$id;

//             }else{

//             $sql2 = "UPDATE article 
//             SET titre='$titre',
//             auteur='$auteur',
//             description='$description',
//             id_categorie='$id_categorie',
//             date_created = '$date_created', 
//             image='$image'
//             WHERE id_art=".$id;
//         }

//         $resultat = mysqli_query($conn,$sql2);
//         if($resultat){

//             header('location:list.php');
//             // var_dump($_POST);


//         }
//         // else{
// //             $error = "<div class='alert alert-danger'>echec d'envoi</div>";

// //             var_dump($_POST);
// //         }
// //     }
// //     echo $image;
// }

if(isset($_POST['soumis'])){


        $id = trim(htmlspecialchars(addslashes($_POST['id_art'])));
        $titre = trim(htmlspecialchars(addslashes($_POST['titre'])));
        $auteur = trim(htmlspecialchars(addslashes($_POST['auteur'])));
        $description = trim(htmlspecialchars(addslashes($_POST['description'])));
        $date_created = trim(htmlspecialchars(addslashes($_POST['date_created'])));
        $id_categorie = trim(htmlspecialchars(addslashes($_POST['categorie'])));
        // $img = trim(htmlspecialchars(addslashes($_POST['img'])));

        $image= $_FILES['image']['name'];
        $destination= "../assets/images/";

        var_dump($_POST);
        var_dump($_FILES);


        echo $id.'<br>';
        echo $titre.'<br>';
        echo $auteur.'<br>';
        echo $description.'<br>';
        echo $date_created.'<br>';
        echo $id_categorie.'<br>';
        // echo $img.'<br>';
        echo $image.'<br>';
        // move_uploaded_file($_FILES['image']['tmp_name'],$destination.$image);

        if(empty($image)){

        $sql = "UPDATE article 
        SET 
        titre='$titre',
        auteur='$auteur',
        description='$description',   
        date_created='$date_created',
        id_categorie='$id_categorie',
        WHERE id_art=".$id;

        }
        // image='$img'

        else{
        
        $sql = "UPDATE article 
        SET 
        titre='$titre',
        auteur='$auteur',
        description='$description',   
        date_created='$date_created',
        id_categorie='$id_categorie',
        image= '$image'
        WHERE id_art=".$id;
        }
        
$resultat = mysqli_query($conn,$sql);
        var_dump($resultat);
        var_dump($sql);
        
        if($resultat){

            header('location:list.php');
            var_dump($_POST);


        }else{
            echo "<div class='alert alert-danger'>echec d'envoi</div>";

            var_dump($_POST);
        }
    }
// }