<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Hotel Management Project -Contact</title>
        <?php require('inc/links.php'); ?>
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
        
        <style>
          .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition:  all 0.3s;
          }
        </style>
    </head>

    <body class="bg-light">

      <?php require('inc/header.php'); ?>

      <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark ">  </div>
        <p class="text-center mt-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima suscipit minus assumenda esse reiciendis possimus, <br>sequi iure nemo dicta fugit et! Natus atque dolor deleniti saepe ratione, ipsum dignissimos nulla.
        </p>
      </div>
        
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 px-4">
            <div class="bg-white rounded shadow p-4">
              <div class="d-flex align-items-center mb-2">
              <img src="Images\rooms\wifi_100x100.jpg">
              <h5 class="m-0 ms-3">Wifi</h5>
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequatur aperiam voluptatum eaque asperiores ex quis libero.
              </p>

            </div>
          </div>
          <div class="col-lg-6 col-md-6 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 pop">
              <div class="d-flex align-items-center mb-2">
              <img src="Images\rooms\wifi_100x100.jpg">
              <h5 class="m-0 ms-3">Wifi</h5>
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequatur aperiam voluptatum eaque asperiores ex quis libero.
              </p>

            </div>
          </div>
          
        </div>
      </div>


      <?php require('inc/footer.php'); ?>


</body>
</html> 