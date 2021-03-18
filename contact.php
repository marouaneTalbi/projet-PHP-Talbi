<?php require_once 'partials/header.inc';?>

    <div class="container">

    
        
<div class="container">
    <h1 class="display-2 mt-5 mb-5 text-center" >Contactez-nous </h1>
</div>



<div class="container  offset-1">
<div class="row">


<div class="col-5" >
    <form class=" col-12 offset-0 p-3 " style="height: 500px;box-shadow: 5px 0px 5px 5px rgba(0, 0, 0, 0.2);border-radius:5px;    z-index: 1;">
        <div class="mb-3 ">
            <label htmlfor="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre Nom"/>
        </div>
        <div class="mb-3">
            <label htmlfor="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre Prenom"/>
        </div>
        <div class="mb-3">
            <label htmlfor="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre E-mail"/>
        </div>
        <label htmlfor="floatingTextarea2">Votre Message</label>
            <div class="form-floating mb-5" >
                <textarea class="form-control" placeholder="Message" id="floatingTextarea2" ></textarea>
            </div>
        <button type="submit" class="btn btn-primary col-12">Submit</button>
    </form>
</div>

<div class="col-4 p-3  offset-1" style="height: 500px;box-shadow:  5px 0px 5px 5px rgba(0, 0, 0, 0.2);border-radius:10px;z-index: 1;" >
    <form class=" col-12 offset-0" >
        <div class="col-12 mt-5 bg-danger text-white text-center ">
        <h1 style="font-family:Georgia, serif; font-size:40px">E-ART/ARTICLES</h1>
        </div>
        <div class="col-12 mt-5  text-center">
           <p class=" display-6">75 rue paris 75000</p>
        </div>
        <div class="col-12 mt-5  text-center ">
           <p class="display-6">e-art@gmail.com</p>
        </div>
        <div class="col-12 mt-5 text-center">
           <p class="display-6">00.33.66.52.63</p>
        </div>
    </form>
</div>
</div>
<div class=" mt-5 offset-0 col-12 ">
    <div id="map-container-google-1" class="z-depth-1-half map-container mb-5">
        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameBorder="0"
        allowfullscreen style="width:85%;height:400px" >
        </iframe>
    </div>
</div>
</div><div style="height: 100px;"></div>





    </div>
    <?php require_once 'partials/footer.inc';?>
