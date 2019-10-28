<?php
$awal = 'webpro2/CodeIgniter/';
?>
<!doctype html>
<html lang="en">

<head>
   <?php $this->load->view("_partial/header.php"); ?>
   <title>My Portfolio</title>
</head>

<body class="mt-5">

   <?php $this->load->view("_partial/navbar.php"); ?>

   <div style="background-color:#ffeaf0 !important" class="jumbotron jumbotron-fluid">
      <div class="container text-center">
         <img src="<?php echo base_url($awal . 'asset/img/my_Pas.jpg'); ?>" class="rounded-circle img-thumbnail" width="25%" alt="">
         <h1 class="display-4">Andri Ilham</h1>
         <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
   </div>

   <!-- about section -->
   <section id="about" class="about">
      <div class="container">
         <div class="row mb-4">
            <div class="col">
               <h2 class="text-center">About</h2>
            </div>
         </div>

         <div class="row justify-content-center">
            <div class="col-md-5 text-center">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sapiente velit, odio veniam hic
                  excepturi, maiores molestias laudantium tenetur, pariatur ratione ipsum. Reprehenderit eligendi
                  pariatur consectetur ducimus saepe tenetur!</p>
            </div>
            <div class="col-md-5 text-center">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sapiente velit, odio veniam hic
                  excepturi, maiores molestias laudantium tenetur, pariatur ratione ipsum. Reprehenderit eligendi
                  pariatur consectetur ducimus saepe tenetur</p>
            </div>
         </div>
      </div>
   </section>


   <section id="portfolio" style="background-color:#ffeaf0 !important" class="portfolio bg-light pb-4">
      <div class="container">
         <div class="row mb-4 pt-4">
            <div class="col">
               <h2 class="text-center">Portfolio</h2>
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md">
               <div class="card">
                  <img class="card-img-top" src="<?= base_url($awal . "asset/img/tumbs/1.png"); ?>" alt="Card image cap">
                  <div class="card-body">
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                  </div>
               </div>
            </div>
            <div class="col-md">
               <div class="card">
                  <img class="card-img-top" src="<?= base_url($awal . "asset/img/tumbs/2.png"); ?>" alt="Card image cap">
                  <div class="card-body">
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                  </div>
               </div>
            </div>
            <div class="col-md">
               <div class="card">
                  <img class="card-img-top" src="<?= base_url($awal . "asset/img/tumbs/3.png"); ?>" alt="Card image cap">
                  <div class="card-body">
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md">
               <div class="card">
                  <img class="card-img-top" src="<?= base_url($awal . "asset/img/tumbs/4.png"); ?>" alt="Card image cap">
                  <div class="card-body">
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                  </div>
               </div>
            </div>
            <div class="col-md">
               <div class="card">
                  <img class="card-img-top" src="<?= base_url($awal . "asset/img/tumbs/5.png"); ?>" alt="Card image cap">
                  <div class="card-body">
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                  </div>
               </div>
            </div>
            <div class="col-md">
               <div class="card">
                  <img class="card-img-top" src="<?= base_url($awal . "asset/img/tumbs/6.png"); ?>" alt="Card image cap">
                  <div class="card-body">
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section id="contact" class="contact">
      <div class="container">
         <div class="row pt-4 mb-4">
            <div class="col text-center">
               <h2>Contact Us</h2>
            </div>
         </div>

         <div class="row justify-content-center">
            <div class="col-lg-4">
               <div class="card text-white bg-primary mb-3">
                  <div class="card-body text-center">
                     <h5 class="card-title">Contact Us</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                  </div>
               </div>
               <ul class="list-group">
                  <li class="list-group-item">
                     <h1>Location</h1>
                  </li>
                  <li class="list-group-item">My Office</li>
                  <li class="list-group-item">Blok Desa XII, Kebon Lega, Bandung</li>
                  <li class="list-group-item">West Java, Indonesia</li>
               </ul>
            </div>

            <div class="col-lg-6">
               <form>
                  <div class="form-group">
                     <label for="nama">Nama</label>
                     <input type="text" class="form-control" id="nama">
                  </div>
                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="text" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                     <label for="telp">No. Telpon</label>
                     <input type="text" class="form-control" id="telp">
                  </div>
                  <div class="form-group">
                     <label for="msg">Pesan</label>
                     <textarea name="msg" id="msg" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                     <label for="button" class="btn btn-primary">Kirim Pesan!</label>
                  </div>
               </form>
            </div>
         </div>

      </div>
   </section>

   <?php $this->load->view("_partial/footer.php"); ?>

   <?php $this->load->view("_partial/script.php"); ?>
</body>

</html>