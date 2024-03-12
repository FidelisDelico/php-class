<html lang="en">
<head>
    <title>Document</title>
</head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<body>
   
    <style>
        body {
            background-color: antiquewhite;
            color: rgb(163, 9, 9);
        }
    </style>
    <div>
      <?php include_once ('nav.html'); ?>
        
        
    </div>
    
    <p>we are glad to hear from you</p>

    <div class="card" style="width:400px">
        <img class="card-img-top" src="Images/pngegg.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">read more</a>
        </div>
      </div>

      <div class="row">
        <div id="carouselExample" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
            <center>
            <div class="carousel-inner bg-secondary">
              <div class="carousel-item active">
                <p class="text-bg-danger display-6">Slide 1</p>
                <img src="Images/N1.jpg" alt="GFG" width="600" height="300" class="d-block w-50" alt="...">
              </div>
              <div class="carousel-item">
                <p class="text-bg-danger display-6">Slide 2</p>
                <img src="Images/N2.jpg" alt="GFG" width="600" height="300 class="d-block w-50" alt="...">
              </div>
              <div class="carousel-item">
                <p class="text-bg-danger display-6">Slide 3</p>
                <img src="Images/N3.jpg"GFG" width="600" height="300 class="d-block w-50" alt="...">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
            </center>
          </div>

      </div>


    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>