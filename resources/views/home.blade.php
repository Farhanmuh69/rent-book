<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/styless.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BookBase | Home</title>
</head>
<body>
<div>
      <header>
            <nav class="navbar navbar-expand-lg" id="nav">
              <div class="container-fluid mt-4 ml-4">
                <div draggable="false">
                  <img draggable="false" src="./img/logo.svg" >
                </div>
                <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="#home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="#about">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="#product">Our Product</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                      </li>
                    </ul>
                  <form class="d-flex">
                    <a href="/login"><button class="btn  me-md-2" type="button">Sign In</button></a>
                    <a href="/register"><button class="btn-color btn" type="button">Sign Up</button></a>
                  </form>
                </div>
              </div>
            </nav>
      </header>
    </div>
    <div class="content">
      <div class="container col-xxl-8 px-20 py-0">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img draggable="false" src="./img/imageBook.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="text-content col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Your place to rent books</h1>
            <p class="lead">Welcome to bookbase, rent the book you want to read and get the best price</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <a href="/login"><button type="button" class="btn-color btn btn-primary btn-lg px-4 me-md-2">Rent Now!</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container-trending" id="product">
  <div class="title text-center">
    <h1><b>Trending Books</b></h1>
    <img src= "{{asset('img/line 2.png')}}". alt="">
  </div>
    <div class="slider">
              <div class="owl-carousel">
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img class="h-100" src="img/sikancil.jpg" alt="" >
                      </div>
                      <h5 class="mb-0 text-center"><b>Sikancil</b></h5>
                      <p class="text-center p-4"></p>
                  </div>

                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img class="h-100" src="/img/cover1.jpg" alt="">
                      </div>
                      <h5 class="mb-0 text-center"><b>Matahari</b></h5>
                      <p class="text-center p-4"></p>
                  </div>

                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img class="h-100" src="img/cover2.jpg" alt="">
                      </div>
                      <h5 class="mb-0 text-center">Ruang Sunyi<b></b></h5>
                      <p class="text-center p-4"></p>
                  </div>

                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img class="h-100" src="img/cover3.jpg" alt="">
                      </div>
                      <h5 class="mb-0 text-center"><b>Menanti Restu Langit</b></h5>
                      <p class="text-center p-4"></p>
                  </div>

                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img class="h-100" src="img/cover4.jpg" alt="">
                      </div>
                      <h5 class="mb-0 text-center"><b>Peony's world</b></h5>
                      <p class="text-center p-4"></p>
                  </div>
        </div>
 </div>

<div class="categories">
  <div class="title-categories text-center">
    <h1><b>Books Categories</b></h1>
    <img src="./img/Line 2.png" alt="">
  </div>
  <div class="slider">
    <div class="owl-carousel">
        <div class="slider-category">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img draggable="false" class="category-item" src="./img/Group 3.svg" alt="">
            </div>
        </div>

        <div class="slider-category">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img draggable="false" class="category-item" src="./img/Group 5.svg" alt="">
            </div>
        </div>

        <div class="slider-category">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img draggable="false" class="category-item" src="./img/Group 3.svg" alt="">
            </div>
        </div>

        <div class="slider-category">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img draggable="false" class="category-item" src="./img/Group 6.svg" alt="">
            </div>
        </div>

        <div class="slider-category">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img draggable="false" class="category-item" src="./img/Group 1.svg" alt="">
            </div>
        </div>
</div>

</div>


<div class="container-team mt-5" id="about">
  <div class="categories-title text-center">
    <h1><b>Our Team</b></h1>
    <img src= "{{asset('img/line 2.png')}}". alt="">
  </div>
  <div class="row">
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
</div>

<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="my-5" >
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-dark"
          style="background-color: #F3DECD"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              <img src="img/logo.svg" alt="">
            </h6>
            <p>
              Condong Catur, Depok, Sleman, Daerah Istimewa Yogyakarta 
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-bold mb-4 font-weight-bold">Contact Us</h6>
            <p>
              <a href="https://wa.me/6288376493512" class="text-dark">Phone : +62 883 7649 3512</a>
            </p>
            <p>
              <a href="https://mailto:{{ 'bookbase@gmail.com' }}" class="text-dark">Email : bookbase@gmail.com</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class=" mb-4 font-weight-bold">Discover</h6>
            <a href="#nav"><p><i class="fas fa-home mr-3" ></i> Home</p></a>
            <p><i class="fas fa-envelope mr-3"></i> About Us</p>
            <p><i class="fas fa-phone mr-3"></i> Our Products</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Reviews</h6>
            <div>
              <img src="img/Component 1.svg" alt="">
            </div>
            <div>
              <span>
                <img src="img/instagram.png" alt="">
                <img src="img/facebook.png" alt="">
                 <img src="img/twitter.png" alt="">
              </span>
            </div>

           
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: #F3DECD"
         >
      © 2023 Copyright:BookBase
    
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->






<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>