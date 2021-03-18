<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>  
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="../assets/js/script1.js" async ></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-info " >
  
  <div class="container-fluid ">


    <img id="img"src="../assets/images/log.png" width="50px">
<script>

var star = document.getElementById('img'),
  deg = 10;
setInterval(function() {
  star.style.transform = "rotate(" + deg + "deg)";
  deg = (deg + 10) % 360
}, 39);
</script>
<div class=" col-1 h2 text-white" style="font-family:Georgia, serif; font-size:35px">
  E-ART
</div>

    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 700px;">
      <ul class="navbar-nav " >
      <li>
          <a class="nav-link active text-white ml-5" aria-current="page" href="../index.php">HOME</a>
       </li>
       <li>
          <a class="nav-link text-white ml-5" href="../apropos.php">A PROPOS </a>
        </li>
        <li>
          <a class="nav-link text-white ml-5" href="../contact.php">CONTACT</a>
        </li>

  </div>
</nav>
</header>






<?php

require_once '../connect.php';



$error="";

if(isset($_POST['submit'])){


    if(!empty($_POST['login']) && !empty($_POST['pass'])){

        $login = trim(htmlspecialchars( $_POST['login']));
        $pass = md5(trim(htmlspecialchars( $_POST['pass'])));

        $sql ="SELECT * FROM utilisateurs WHERE login='$login' AND pass ='$pass'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            $data = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['auth']=$data;
            header('location:list.php');
        }else{

            $error="<div class='alert alert-danger text-center'>utilisateur introuvable veuillez vous inscrire</div>";
        }
    }else{
        
        $error="<div class='alert alert-danger text-center'>Login et le  Mot de pass sont requis</div>";
    }
}
   ?>


<div class="container ">
    <div class="card col-4 offset-4 mt-5" >
    <?php echo $error; ?>
    <div class=" card-header text-center">
    <h1>Connexion</h1>
    </div>
        <div class="card-body">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

                <div class="mb-3">
                    <label for="login" class="form-label">Login*</label>
                        <input type="text" class="form-control" name="login" id="login" placeholder="entrer votre login" required>
                </div>

                <div class="mb-3">
                    <label for="pass" class="form-label">Mot De Passe*</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="entrer votre Mot De Pass" required> 
                </div>

                <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<footer  class="fixed-bottom  mt-5" style="margin-top:200px">
<nav class="navbar navbar-expand-lg navbar-light bg-info ">

  <div class="container-fluid  ">

    <div class=" col-1 h2 text-white" style="font-family:Georgia, serif; font-size:35px">
  E-ART
    </div>

<div class="text-center" style="margin-right:00px">
  <ul class="d-flex">
  <li style="list-style:none;border-bottom:3px solid pink;width:160px" class="  "><a><img src="../assets/images/in.png" width="50px"></a></li>
  <li style="list-style:none;border-bottom:3px solid red;width:160px" class="  "><a><img src="../assets/images/yo.png" width="50px"></a></li> 
  <li style="list-style:none;border-bottom:3px solid blue;width:160px" class="  "><a><img src="../assets/images/fa.png" width="50px"></a></li>
  </ul>
</div> 

<div class="text-right text-white col-2"> Copyright &copy; 2021</div>


</nav>
</footer>
</body>
</html>
