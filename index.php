<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NutriPlan - Homepage</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-xl navbar-light bg-transparent fixed-top">
    <div class="container-fluid">
      <!-- Logo -->
      <div class="col-2 position-relative">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="Logo NutriPlan" width="37px" height="37px">
          <span class="nutri">Nutri</span><span class="plan">Plan</span>
        </a>
      </div>
      <!-- Button navbar responsive -->
      <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Elemen navbar -->
      <div class="collapse navbar-collapse pe-3 resp" id="navbarSupportedContent">
        <div class="d-flex justify-content-center align-items-center flex-grow-1">
          <ul class="navbar-nav mb-2 mb-xl-0">
            <li class="nav-item tex">
              <a class="btn w-100 text-center nav-link ijo rounded-pill text-white fw-bold mx-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="btn w-100 text-center nav-link oren rounded-pill text-white fw-bold mx-2" href="#">How It Works</a>
            </li>
            <li class="nav-item">
              <a class="btn w-100 text-center nav-link ijo rounded-pill text-white fw-bold mx-2" href="#">Recipes</a>
            </li>
            <li class="nav-item">
              <a class="btn w-100 text-center nav-link oren rounded-pill text-white fw-bold mx-2" href="#">Callculator</a>
            </li>
            <li class="nav-item">
              <a class="btn w-100 text-center nav-link ijo rounded-pill text-white fw-bold mx-2" href="#">Planner</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav mb-2 mb-xl-0">
          <li class="nav-item">
            <a class="btn text-center w-100 nav-link oren rounded-pill text-white fw-bold login" href="#">Log In/Sign Up</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <main>
    <!-- Isi konten -->
    <div class="container-fluid min-vh-100 lat-blkg px-4 konten" width="100%">
      <div class="row min-vh-100 align-items-center">
        <!-- Paragraf -->
        <div class="col-lg-6 col-md-12 flex-column prg">
          <h1 class="fw-bold col-6 text-wrap">Cook Smart, Waste Less</h1>
          <h2 class="fw-bold">Smart Meal Planning for a Healthier Life</h2>
          <p class="parag-homepage fw-bold">
            Plan healthier meals based on your BMI, calorie needs, and dietary preferences.
            NutriPlan helps you create personalized meal plans using BMI analysis,
            nutrition data, and smart recommendations.
          </p>
          <div class="button col-12 d-flex">
            <a href="#" class="align-items-center btn ijo text-white rounded-pill fw-bold me-3" width="33%">Calculate Your Plan</a>
            <a href="#" class="align-items-center btn oren text-white rounded-pill fw-bold ms-3" width="33%">Explore Recipes</a>
          </div>
        </div>
        <!-- Elemen gambar -->
        <div class="container col-6">
          <div class="row text-center">
            <div class="col-md-2 d-none d-md-block position-relative">
              <img src="img/brokoli.png" alt="" width="70px" class="img-fluid brokoli">
              <img src="img/Ellipse 3.png" alt="" width="50px" class="elip1 img-fluid">
            </div>
            <div class="col-md-8 d-none d-md-block position-relative">
              <img src="img/tanaman.png" alt="Ini plate" width="350px" class="img-fluid plate">
            </div>
            <div class="col-md-2 d-none d-md-block position-relative">
              <img src="img/wortel.png" alt="" width="65px" class="wortel img-fluid">
              <img src="img/Ellipse 1.png" alt="" width="50px" class="elip2 img-fluid">
            </div>
            <div class="col-md-6 d-none d-md-block position-relative">
              <img src="img/serat.png" alt="" width="250px" class="img-fluid">
            </div>
            <div class="col-md-6 d-none d-md-block position-relative ">
              <img src="img/protein.png" alt="" width="300px" class="img-fluid">
            </div>
            <div class="col-md-12 d-none d-md-block position-relative wadah" width="80px">
              <img src="img/jagung.png" alt="" width="80px" class="img-fluid jagung">
              <img src="img/Ellipse 2.png" alt="" width="80px" class="img-fluid elip3">
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>