<?php

require_once 'connect.php';
require_once 'partials/header.inc';

$sql="SELECT * FROM article a
    INNER JOIN  categorie c 
    ON a.id_categorie = c.id";

$result = mysqli_query($conn,$sql);

?>

<div class="bg-light p-5 text-center  mt-5">
    <h1 style="font-family:Georgia, serif; font-size:50px">E-ART/ARTICLES</h1>
<img src="assets/images/mol.jpg" width="1000px" class="offset-0 mt-5">
</div>



<div class="container offset-0 col-12 mt-5 border border-danger">


    <div class="row  text-center offset-1" >
        <div class="row col-5 ">
            <img id="img1"src="assets/images/log.png"  >
        </div>
        <div class="row col-4 text-center offset-2 bg-danger">
            <h1 style="font-family:Georgia, serif; font-size:45px" class="mt-5 text-white"> E-ART <br> TOUJOURS À VOS CÔTÉS</h1>
            <h2 style="font-family:Georgia, serif;">DEMAIN SE FABRIQUE AUJOURD'HUI</h2>
        </div>
    </div>
</div>
<script>
    console.log(200)
    var star1 = document.getElementById('img1'),
    deg = 10;
    
    setInterval(function() {
        star1.style.transform = "rotate(" + deg + "deg)";
        deg = (deg + 10) % 360
    }, 59);
    
    </script>
<div class="container"  style="box-shadow: 5px 0px 5px 5px rgba(0, 0, 0, 0.2);border-radius:5px;z-index: 1;">

<div class="container p-0 mt-5 " >

        <div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <?php while($rows = mysqli_fetch_assoc($result)){ 
                  
                   ?>

                <div class="col ">
                    <div class="card">
                        <img src="assets/images/<?php echo $rows['image'] ?>" class="card-img-top" alt="..." width="300px" height="260px">
                        <div class="card-body">
                            <h3 class="card-title text-center"><?php echo $rows['titre'] ?></h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><p class="card-text"><?php echo substr($rows['description'],0,150) ?>...</p></li>
                                <li class="list-group-item"><h6 class="card-title">ecrit par :<?php echo $rows['auteur'] ?></h6></li>
                                <li class="list-group-item"><p class="card-text"> le :<?php echo $rows['date_created'];?></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div><div style="margin-bottom: 150px;"></div>  

<?php require_once 'partials/footer.inc';?>





