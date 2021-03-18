<?php 

require_once('../connect.php');
require_once 'security.php';

$error = "";
$sql = "SELECT id, nom FROM categorie";
$res = mysqli_query($conn, $sql);

if(isset($_POST['soumis'])){

    if(isset($_POST['titre']) && isset($_POST['auteur']) && isset($_POST['date_created']) ){

        
        $titre = trim(htmlspecialchars(addslashes($_POST['titre'])));
        $auteur = trim(htmlspecialchars(addslashes($_POST['auteur'])));
        $description = trim(htmlspecialchars(addslashes($_POST['description'])));
        $date_created = trim(htmlspecialchars(addslashes($_POST['date_created'])));
        $id_categorie = trim(htmlspecialchars(addslashes($_POST['categorie'])));

        $image= $_FILES['image']['name'];
        $destination= "../assets/images/";

        move_uploaded_file($_FILES['image']['tmp_name'],$destination.$image);

        $sql2= "INSERT INTO article(titre,auteur,description,date_created,id_categorie,image)
        VALUES('$titre','$auteur','$description', '$date_created','$id_categorie','$image')";


        $result = mysqli_query($conn, $sql2);

        if(mysqli_insert_id($conn) > 0){

            header('location:list.php');

        }else{
            $error = '<div class="alert alert-danger">Erreur d\'insertion</div>';
        }
        
    }
}

require_once('../partials/header.inc'); 
?>

<div class="p-0"> 
<div class="offset-2 col-8 p-5">
<a href="list.php"><i class="fas fa-angle-double-left mt-1 h1"></i></a>
<h1 class="bg-dark text-center text-white">Administration</h1>

<h2 class="text-center text-info border border-info display-3 mt-3 mb-3">Formulaire d'Ajout</h2>

    <?php $error; ?>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="col-6">
            <label for="titre">Titre</label>
            <input type="text" class="form-control " id="titre" name="titre" placeholder="Entrez votre titre svp" >
        </div>
        <div class="col-6">
            <label for="auteur">auteur*</label>
            <input type="text" class="form-control" id="auteur" name="auteur" placeholder="Entrez votre auteur svp" >
        </div>
    </div>

    <div class="row">
    <div class="col">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date_created" name="date_created">
    </div>
    <div class="col">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <div class="col">
        <label for="categorie">Categorie</label>
        <select class="form-select" id="categorie" name="categorie" >
        <option >Choisir</option>

        <?php while($rows = mysqli_fetch_assoc($res)){ ?>

            <option value="<?php echo  $rows['id']; ?>"><?php echo $rows['nom']; ?></option>
            
        <?php } ?>

        </select>
    </div>
    </div>
    <div class="row">
    <div class="col mb-2">
        <label for="article">Article</label>
        <textarea  class="form-control" id="description" name="description" rows="5" placeholder="Entrez l'article' svp"></textarea>
    </div>

    </div>
    <button type="submit" class="btn btn-success col-12" name="soumis" >Soumettre</button>
    </form>
</div>
</div><div style="height: 100px;"></div>
<?php require_once('../partials/footer.inc');?>
