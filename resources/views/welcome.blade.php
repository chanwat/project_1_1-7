<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>it shop</title>
    <!-- improt CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg "  style="background-color: #f70c0c;">

      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="frontend\img\logoicon.png " alt="" width="30" height="24"> 
        <a class="navbar-brand" href="#">IT Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
              </li>

              

            </ul>
            <form class="d-flex" role="search">
              <button class="btn btn-outline-success" type="submit">Login</button>
            </form>
          </div>
        </div>
      </nav>

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="frontend\img/25211FFB9101410294DA83A0F99AE423.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="frontend\img/download.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="frontend\img/PicsArt-Full-Moon.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
         
      </div>

    

     

   <script src="{{ asset('frontend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
   <script src="{{ asset('frontend/node_modules/@popperjs/core/dist/umd/popper.min.js')}}"></script>
   <script src="{{ asset('frontend/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

   
</body>
</html>