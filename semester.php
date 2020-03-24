<?php
   session_start();
   if (!isset($_SESSION['username'])){
    header('location:login.php');
   }
?>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>SWEBOOK</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="./Style.css" />
  <link rel="stylesheet" href="./mobile-style.css">
  <link rel="stylesheet" href="./book.js" />
</head>

<body>
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <i class="fas fa-book-reader fa-2x mx-3"></i>SWEBOOK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="semester.php">SEMESTER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BOOKS</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">TEACHERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT</a>
            </li>  
             <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>      
          </ul>
            
        </div>
      </nav>
    

    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h6>AUTHOR:Department of SWE</h6>
          <h1>EXCITING ADVENTURE</h1>
          <p>
            Our beloved country is full for young people who have the necessary intellectual potential and patriotism to bring about enormous changes to everything concerning the economic welfare of its people. We in SWE are here to help students burgeon their potential into complete professional person.
          </p>
          
        </div>
        <div class="col-md-5 col-sm-12  h-25">
          <img src="./header-img.png" alt="Book" />
        </div>
      </div>
    </div>
  </header>
<main>
<section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">Semester Wise Books</h1>
        <p class="text-secondary">Students can Download Or Read </p>
      </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 1 </h3>
                  
                  <a href="course1.php" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-413</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-313</a>
                 
                </div>
              </div>
        </div>
       <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 2 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-213</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-421</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-221</a>
                 
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 5 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                 
                </div>
              </div>
        </div>
    </section>
<section class="section-4">
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 1 </h3>
                  
                  <a href="course1" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="course1" class="text-secondary text-decoration-none">SWE-413</a>
                  <a href="course1" class="text-secondary text-decoration-none">SWE-313</a>
                 
                </div>
              </div>
        </div>
       <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 2 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-213</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-421</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-221</a>
                 
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 3 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                 
                </div>
              </div>
        </div>
    </section>
<section class="section-4">
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 4 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-413</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-313</a>
                 
                </div>
              </div>
        </div>
       <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 5 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-213</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-421</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-221</a>
                 
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 6 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                 
                </div>
              </div>
        </div>
    </section>
<section class="section-4">
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 7 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-413</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-313</a>
                 
                </div>
              </div>
        </div>
       <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 8 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-213</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-421</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-221</a>
                 
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 9 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                 
                </div>
              </div>
        </div>
    </section>
<section class="section-4">
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 10 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-413</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-313</a>
                 
                </div>
              </div>
        </div>
       <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Semester 11 </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-213</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-421</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-221</a>
                 
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
            
                <div class="card-body">
                  <h3 class="card-title"> Project Or Paper </h3>
                  
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                  <a href="" class="text-secondary text-decoration-none">SWE-321</a>
                 
                </div>
              </div>
        </div>
    </section>

     <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum maxime ea similique illum corrupti</p>
          <p class="pt-4 text-muted">Copyright ©2019 All rights reserved | This template is made with by
            <span> Ekram Hossain</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>

  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>