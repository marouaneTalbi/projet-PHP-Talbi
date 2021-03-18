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
<script src="/js/script1.js" async ></script>
<link rel="stylesheet" href="style.css">
</head>
<body style="background: linear-gradient(#ffffff, #CDE0EA);">
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-info " >
  
  <div class="container-fluid ">

  <?php     if(isset($_SESSION['auth']['role'])){ ?>

    <img id="img"src="../assets/images/log.png" width="50px">
    <div class=" col-2 h1 text-white"  ><a href="list.php" class="text-white" style="text-decoration:none" >
  E-ART
</a></div>

<script>

var star = document.getElementById('img'),
  deg = 10;
setInterval(function() {
  star.style.transform = "rotate(" + deg + "deg)";
  deg = (deg + 10) % 360
}, 39);
</script>


    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 600px;">
      <ul class="navbar-nav " >
        <li class="nav-item">
          <a class="nav-link active text-white ml-5" aria-current="page" href="../index.php">HOME</a>
       </li>
        <li class="nav-item">
          <a class="nav-link text-white ml-5" href="../apropos.php">A PROPOS </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white ml-5" href="../contact.php">CONTACT</a>
        </li>

          <?php }else{ ?>

  <img id="img"src="assets/images/log.png" width="50px">

<div class=" col-2 h1 text-white" style="font-family:Georgia, serif; font-size:40px"><a href="index.php" class="text-white" style="text-decoration:none" >
  E-ART
</a></div>


<script>

var star = document.getElementById('img'),
  deg = 10;
setInterval(function() {
  star.style.transform = "rotate(" + deg + "deg)";
  deg = (deg + 10) % 360
}, 39);
</script>



<div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 700px;">
  <ul class="navbar-nav">
   
  <li class="nav-item ">
   <a class="nav-link active text-white ml-5" aria-current="page" href="index.php">HOME</a>
 </li>
            

        <li class="nav-item">
          <a class="nav-link text-white ml-5" href="apropos.php">A PROPOS </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white ml-5" href="contact.php">CONTACT</a>
        </li>

        <?php     } ?>
        

      </ul>
    </div>
          <div class="nav-item dropdown border border-danger mr-5" style='margin-right:200px'>
          <?php if(isset($_SESSION['auth'])){ ?>

            <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
            <?= $_SESSION['auth']['login'] ?>
            <?php } ?>

            </a>
            <ul style="list-style:none;" class="dropdown-menu mr-5">
          <?php if(isset($_SESSION['auth']) && $_SESSION['auth']['role']==1){ ?>
              <li style="list-style:none;"><a class="dropdown-item" href="inscription.php">Inscription</a></li>
            <?php } ?>
              <li style="list-style:none;"><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
            </ul>
        </div>
  </div>
</nav>
</header>



