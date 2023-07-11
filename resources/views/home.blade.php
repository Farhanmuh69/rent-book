<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/styless.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="icon" href="{{ asset('img/logos.png') }}">
    @stack('scripts')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BookBase | Home</title>
</head>
<body>
<div>
      <header>
            <nav class="navbar navbar-expand-lg" id="nav">
              <div class="container-fluid mt-4 ml-4">
                <div draggable="false">
                  <img draggable="false" src=" {{ asset('img/logo.svg') }}" >
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
      <div class=" ">
        <div class="row flex-lg-row-reverse align-items-center g-2 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
                <img  draggable="false" src="{{ asset('img/imageBook.svg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="text-start col-lg-6 p-3 p-lg-5 pt-lg-3" style="margin-top:0px">
                <h1 class="display-2 fw-bold lh-1 mb-3">Your place to rent books</h1>
                <p class="lead">Welcome to bookbase, rent the book you want to read and get the best price</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <a href="/login"><button type="button" style="box-shadow: 0px 8px 18px 0px rgba(0, 0, 0, 0.14); border:none" class="btn-color btn btn-primary btn-lg px-4 me-md-2">Rent Now!</button></a>
                </div>
          </div>
        </div>
      </div>
    </div>



<div class="container-trending" id="product">
  <div class="title text-center">
    <h1><b>Trending Books</b></h1>
    <img draggable="false" src= "{{asset('img/line 2.png')}}". alt="">
  </div>
    <div class="slider">
              <div class="owl-carousel">
              @foreach ($books as $item)
               @if($loop->index < 5)
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img class="h-100" draggable="false" src="{{ $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('storage/image/cover-not-found.jpg') }}" class="card-img-top" alt="..." >
                      </div>
                      <h5 class="mb-0 text-center"><b>{{ $item->title }}</b></h5>
                      <p class="text-center p-4"></p>
                  </div>
                  @endif
              @endforeach
        </div>
        <br>
        <a style="text-decoration: none" href="/login"><h5 class="text-center" style="color:darkgrey;">more books -></h5></a>
 </div>

<div class="categories" style="margin-right: 20px">
  <div class="title-categories text-center">
    <h1><b>Books Categories</b></h1>
    <img draggable="false" src="{{asset('img/line 2.png')}}" alt="">
  </div>
        <div class="slider">
          <div class="owl-carousel">
              <div class="slider-category">
                  <div class="d-flex justify-content-center align-items-center mb-4">
                    <img draggable="false" class="category-item" src="{{asset('img/Group 3.svg')}}" alt="">
                  </div>
              </div>

              <div class="slider-category">
                  <div class="d-flex justify-content-center align-items-center mb-4">
                    <img draggable="false" class="category-item" src="{{asset('img/Group 5.svg')}}" alt="">
                  </div>
              </div>

              <div class="slider-category">
                  <div class="d-flex justify-content-center align-items-center mb-4">
                    <img draggable="false" class="category-item" src="{{asset('img/Group 2.svg')}}" alt="">
                  </div>
              </div>

              <div class="slider-category">
                  <div class="d-flex justify-content-center align-items-center mb-4">
                    <img draggable="false" class="category-item" src="{{asset('img/Group 6.svg')}}" alt="">
                  </div>
              </div>

              <div class="slider-category">
                  <div class="d-flex justify-content-center align-items-center mb-4">
                    <img draggable="false" class="category-item" src="{{asset('img/Group 1.svg')}}" alt="">
                  </div>
              </div>
      </div>
</div>

<div class="my-5" id="about">
      <div class="container-team">
            <div class="row justify-content-center mb-4">
              <div class="col-md-7 text-center">
                  <h1><b>Our Team</b></h1>
                  <img draggable="false" src="{{asset('img/line 2.png')}}" alt="">
              </div>
            </div>
            <div class="row" style="margin-left: 50px">
                  <div class="col-lg-4 mb-3">
                    <div class="row">
                      <div class="col-md-10 text-center">
                        <img src="{{asset('img/foto1.jpg')}}" alt="" class="img-circle rounded-circle h-100" style="width: 200px" />
                      </div>
                      <div class="col-md-10 text-center">
                        <div class="pt-1">
                          <h5 class="mt-4 font-weight-medium mb-0">Muhammad Farhan</h5>
                          <h6 class="subtitle mb-3">Back End</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-3">
                    <div class="row">
                      <div class="col-md-10 text-center">
                        <img src="{{asset('img/foto2.jpg')}}" alt="" class="img-circle rounded-circle h-100" style="width: 200px" />
                      </div>
                      <div class="col-md-10 text-center">
                        <div class="pt-1">
                          <h5 class="mt-4 font-weight-medium mb-0">Fitria Amanda</h5>
                          <h6 class="subtitle mb-3">Front End</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-3">
                    <div class="row">
                      <div class="col-md-10 text-center">
                        <img src="{{asset('img/foto4.jpeg')}}" alt="" class="img-circle rounded-circle h-100" style="width: 200px" />
                      </div>
                      <div class="col-md-10 text-center">
                        <div class="pt-1">
                          <h5 class="mt-4 font-weight-medium mb-0">Daffa Rafsanjani</h5>
                          <h6 class="subtitle mb-3">Front End</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-3">
                    <div class="row">
                      <div class="col-md-10 text-center">
                        <img src="{{asset('img/foto5.jpeg')}}" alt="" class="img-circle rounded-circle h-100" style="width: 200px" />
                      </div>
                      <div class="col-md-10 text-center">
                        <div class="pt-1">
                          <h5 class="mt-4 font-weight-medium mb-0">Fauzan Luthfi</h5>
                          <h6 class="subtitle mb-3">Back End</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-3">
                    <div class="row">
                      <div class="col-md-10 text-center">
                        <img src="{{asset('img/foto3.jpeg')}}" alt="" class="img-circle rounded-circle h-100" style="width: 200px" />
                      </div>
                      <div class="col-md-10 text-center">
                        <div class="pt-1">
                          <h5 class="mt-4 font-weight-medium mb-0">Lina Rohmatun</h5>
                          <h6 class="subtitle mb-3">Front End</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-3">
                    <div class="row">
                      <div class="col-md-10 text-center">
                        <img src="{{asset('img/foto6.1.jpeg')}}" alt="" class="img-circle rounded-circle h-100" style="width: 200px" />
                      </div>
                      <div class="col-md-10 text-center">
                        <div class="pt-1">
                          <h5 class="mt-4 font-weight-medium mb-0">Anugrah Mulki</h5>
                          <h6 class="subtitle mb-3">Front End</h6>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
      </div>
    </div>
  </div>
</div>

<div class="my-0 mb-0 " >
  <footer
          class="text-center text-lg-start text-dark"
          style="background-color: #F3DECD"
          >
    <div class="container p-4 pb-0">
      <section class="">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              <img src="{{ asset('img/logo.svg') }}" alt="">
            </h6>
            <p>
              Condong Catur, Depok, Sleman, Daerah Istimewa Yogyakarta 
            </p>
          </div>

          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-bold mb-4 font-weight-bold">Contact Us</h6>
            <p>
              <a href="https://wa.me/62882005613374" class="text-dark" target="_blank">Phone : +62-8820-0561-3374</a>
            </p>
            <p>
              <a href="mailto:bookbase@gmail.com" class="text-dark" target="_blank">Email : bookbase@gmail.com</a>
            </p>
          </div>

          <hr class="w-100 clearfix d-md-none" />

          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class=" mb-4 font-weight-bold">Discover</h6>
            <a href="#nav"><p><i class="fas fa-home mr-3" ></i> Home</p></a>
            <p><i class="fas fa-envelope mr-3"></i> About Us</p>
            <p><i class="fas fa-phone mr-3"></i> Our Products</p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Reviews</h6>
            <div>
              <img src="{{ asset('img/Component 1.svg') }}" alt="">
            </div>
            <div>
              <span>
                <img src="{{ asset('img/instagram.png') }}" alt="">
                <img src="{{ asset('img/facebook.png') }}" alt="">
                 <img src="{{ asset('img/twitter.png') }}" alt="">
              </span>
            </div>

           
          </div>
        </div>
      </section>
    </div>

    <div
         class="text-center p-3"
         style="background-color: #F3DECD"
         >
      © 2023 Copyright:BookBase
    
    </div>
  </footer>
</div>




@push('scripts')
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>

@endpush

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>