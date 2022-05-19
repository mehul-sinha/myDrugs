<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="index.css"/> 
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#04D1BD;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" id="head"><b>myDrugs</b></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Topics
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Technology</a></li>
                            <li><a class="dropdown-item" href="#">Web Development</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                            <li><a class="dropdown-item" href="#">Write for us</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="mx-2">
                  <button class="btn btn-danger" data-toggle="modal" data-target="#loginModal">Log In</button>
                  <button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">Sign UP</button>
                </div>
            </div>
        </div>
    </nav>

    <!--Log In Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login to iCoder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group my-2">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group my-2">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group form-check my-2">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
          </div>
          <button type="submit" class="btn btn-primary">Log In</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Sign Up Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Get an iCoder Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <div class="modal-body">
        <div class="form-group my-2">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group my-2">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group my-2">
          <label for="cexampleInputPassword1">Confirm Password</label>
          <input type="password" class="form-control" id="cexampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check my-2">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Agree to the Terms and Conditions</label>
        </div>
        <button type="submit" class="btn btn-primary">Create Account</button>
      </form>
    </div>
      </div>
    </div>
  </div>
</div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="c1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="c2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="c3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block text-primary">16 tablets </strong>
                  <h3 class="mb-0">Bistol paracetamol 500mg</h3>
                  <strong class="d-inline-block mb-2 text-danger">Rs 20</strong>
                  <div class="mb-1 text-muted">Dosage</div>
                  <p class="card-text mb-auto">one or two 500mg tablets up to 4 times in 24 hours</p>
                  <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="paracetamol.jpeg" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block text-primary">24 tablets</strong>
                  <h3 class="mb-0">Disprin 500mg</h3>
                  <strong class="d-inline-block mb-2 text-danger">Rs 26</strong>
                  <div class="mb-1 text-muted">Dosage</div>
                  <p class="mb-auto">maximum of 13 tablets in 24 hours</p>
                  <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
                <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="200" height="250" src="disprin.jpeg" alt="">
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block text-primary">200 tablets </strong>
                  <h3 class="mb-0">Norfloxacin 400</h3>
                  <strong class="d-inline-block mb-2 text-danger">Rs 500</strong>
                  <div class="mb-1 text-muted">Dosage</div>
                  <p class="card-text mb-auto">400 mg every 12 hours for 3 to 21 days</p>
                  <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="norfloxacin.jpeg" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block text-primary">50 tablets</strong>
                  <h3 class="mb-0">Combiflam</h3>
                  <strong class="d-inline-block mb-2 text-danger">Rs 120</strong>
                  <div class="mb-1 text-muted">Dosage</div>
                  <p class="mb-auto">1 tablet 3 times a day, or as directed by your physician.</p>
                  <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
                <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="200" height="250" src="combiflam.jpeg" alt="">
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block text-primary">20 tablets</strong>
                  <h3 class="mb-0">Bell's ibuprofen 200mg</h3>
                  <strong class="d-inline-block mb-2 text-danger">Rs 40</strong>
                  <div class="mb-1 text-muted">Dosage</div>
                  <p class="card-text mb-auto">Maximum 4 tablets in 24 hours</p>
                  <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="ibuprofen.jpeg" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block text-primary">65 tablets</strong>
                  <h3 class="mb-0">Zantac 150</h3>
                  <strong class="d-inline-block mb-2 text-danger">Rs 100</strong>
                  <div class="mb-1 text-muted">Dosage</div>
                  <p class="mb-auto">4-8 mg/kg orally every 12 hours</p>
                  <button type="button" class="btn btn-success">Add to Cart</button>
                </div>
                <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="200" height="250" src="zantac.jpeg" alt="">
                </div>
              </div>
            </div>
          </div>
    </div>


<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>