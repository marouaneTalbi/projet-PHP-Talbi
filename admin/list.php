<?php

require_once '../connect.php';
require_once 'security.php';




if(isset($_POST['submit']) && !empty($_POST['search'])){
    
    $motCle = trim(htmlspecialchars(addslashes($_POST['search'])));
    
    $sql="SELECT * FROM article a
    INNER JOIN  categorie c 
    ON a.id_categorie = c.id
    WHERE titre LIKE '%$motCle%'
    OR auteur LIKE '%$motCle%'";

}else{


    $sql="SELECT * FROM article a
    INNER JOIN  categorie c 
    ON a.id_categorie = c.id";
    
}

$result = mysqli_query($conn,$sql);




 require_once '../partials/header.inc';
 
 
 
 
 ?>


<div class="container p-5" >

    <div class="container"style="margin-bottom:100px">
        
        <h1 class="text-center bg-light p-3 border border-success">liste d'utilisateurs</h1>
        
        <p class="text-right">
            <a href="ajouter.php" class="btn btn-warning ">AJOUTER<i class="fas fa-plus"></i></a>
        </p>
        
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <div class="input-group justify-content-end ">
                <input type="search" name="search" id="search" class="form-control col-5 " placeholder="Rechercher">
                
                <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i></button>
            </div>
        </form>

        
        <table class="container table table-striped mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Image</th>
                    <th>Categorie</th>
                    <th>Article</th>
                    <th>Date de creation</th>
                    <?php  if(isset($_SESSION['auth']) && $_SESSION['auth']['role']==1){ ?>
                        
                        <th colspan=2 class="text-center">Actions</th>
                        <?php  } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php  

while($rows = mysqli_fetch_assoc($result)){
    
    
    ?>

                <tr>
                    <td><?php echo  $rows['id_art'] ?></td>
                    <td><?php echo substr($rows['titre'],0,40) ?>..</td>
                    <td><?php echo $rows['auteur'] ?></td>
                    <td><img src="../assets/images/<?php echo  $rows['image']?>" width="200px" height="130px"></td>
                    <td><?php echo $rows['nom'] ?></td>
                    <td><?php echo substr($rows['description'],0,50)  ?>...</td>
                    <td><?php  echo $rows['date_created'] ?></td>

                        <?php  if(isset($_SESSION['auth']) && $_SESSION['auth']['role']==1){ ?>
                   
                    <td><a href="modifArticle.php?id=<?php echo  $rows['id_art']?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                    <td>
                        <a href="supprimer.php?id=<?php echo $rows['id_art']?>" class="btn btn-danger" onclick="return confirm('etes vous sur de vouloir supprimer')">
                    <i class="fas fa-trash"></i></a>
                    </td>
                    <?php } ?>
                </tr>
            
            
                <?php   }?>

        </tbody>
    </table>


</div>
</div>
<?php require_once '../partials/footer.inc';




?>