<footer  class="fixed-bottom " style="margin-top:200px" >


    <nav class="navbar navbar-expand-lg navbar-light bg-info ">

        <div class="container-fluid" width="0px">

        <?php     if(isset($_SESSION['auth']['role'])){ ?>

      <div class=" col-1 h2 text-white" style="font-family:Georgia, serif; font-size:45px"><a href="../index.php" class="text-white" style="text-decoration:none" >
        E-ART
      </a></div>

      <div class="text-center" style="margin-right:-100px ; ">
        <ul class="d-flex">
        <li style="list-style:none;border-bottom:3px solid pink;width:160px" class="  "><a><img src="../assets/images/in.png" width="50px"></a></li>
        <li style="list-style:none;border-bottom:3px solid red;width:160px" class=" "><a><img src="../assets/images/yo.png" width="50px"></a></li> 
        <li style="list-style:none;border-bottom:3px solid blue;width:160px" class=" "><a><img src="../assets/images/fa.png" width="50px"></a></li>
        </ul>
      </div> 

      <div class="text-right text-white col-2"> Copyright &copy; 2021</div>


        <?php }else{ ?>

      <div class=" col-1 h2 text-white" style="font-family:Georgia, serif; font-size:35px" ><a href="index.php" class="text-white" style="text-decoration:none" >
        E-ART
      </a></div>
        


      <div class="text-center" style="margin-right:00px ; ">
        <ul class="d-flex">
        <li style="list-style:none;border-bottom:3px solid pink;width:160px" class="  "><a><img src="assets/images/in.png" width="50px"></a></li>
        <li style="list-style:none;border-bottom:3px solid red;width:160px" class="  "><a><img src="assets/images/yo.png" width="50px"></a></li>
        <li style="list-style:none;border-bottom:3px solid blue;width:160px" class="  "><a><img src="assets/images/fa.png" width="50px"></a></li>
        </ul>
      </div> 

      <div class="text-right text-white col-2" ><a class="text-dark"style="text-decoration:none" href="admin/index.php"> Copyright &copy; 2021 </a></div>

      <?php } ?>
        </div>
    </nav>
</footer>
</body>
</html>