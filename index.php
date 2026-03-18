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
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top py-3">
    <div class="container-fluid">
      <div class="col-2" id="navbarSupportedContent">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="Logo NutriPlan" width="37px" height="37px">
          <span class="nutri">Nutri</span><span class="plan">Plan</span>
        </a>
      </div>

      <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-10" id="navbarSupportedContent">
        <div class="d-flex justify-content-center flex-grow-1">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item tex">
              <a class="nav-link ijo rounded-pill text-white fw-bold mx-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link oren rounded-pill text-white fw-bold mx-2" href="#">How It Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ijo rounded-pill text-white fw-bold mx-2" href="#">Recipes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link oren rounded-pill text-white fw-bold mx-2" href="#">Callculator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ijo rounded-pill text-white fw-bold mx-2" href="#">Planner</a>
            </li>
          </ul>

        </div>
        <ul class="navbar-nav mb-2 ms-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link oren rounded-pill text-white fw-bold login" href="#">Log In/Sign Up</a>
          </li>
        </ul>
      </div>

  </nav>
  <main> @yield(section:"content")
    <div class="container-fluid min-vh-100 lat-blkg px-4 konten" width="100%">
      <div class="row min-vh-100 align-items-center ps-5">
        <div class="col-md-6 flex-column">
          <h1 class="fw-bold col-6 text-wrap">Cook Smart, Waste Less</h1>
          <h2 class="fw-bold">Smart Meal Planning for a Healthier Life</h2>
          <p class="parag-homepage fw-bold">
            Plan healthier meals based on your BMI, calorie needs, and dietary preferences.
            NutriPlan helps you create personalized meal plans using BMI analysis,
            nutrition data, and smart recommendations.
          </p>
          <div class="button d-flex">
            <a href="#" class="align-items-center btn ijo text-white rounded-pill fw-bold me-4" width="33%">Calculate Your Plan</a>
            <a href="#" class="align-items-center btn oren text-white rounded-pill fw-bold ms-4" width="33%">Explore Recipes</a>
          </div>
        </div>
        <div class="container col-md-6">
          <div class="row text-center">
            <div class="col-md-2 position-relative border">
              <img src="img/brokoli.png" alt="" width="65px" class="img-fluid brokoli">
              <img src="img/Ellipse 3.png" alt="" width="50px" class="elip1 img-fluid">
            </div>
            <div class="col-md-8 position-relative border">
              <img src="img/tanaman.png" alt="Ini plate" width="350px" class="img-fluid plate">
            </div>
            <div class="col-md-2 position-relative border">
              <img src="img/wortel.png" alt="" width="60px" class="wortel img-fluid">
              <img src="img/Ellipse 1.png" alt="" width="50px" class="elip2 img-fluid">
            </div>
            <div class="col-md-6 position-relative border">
              <img src="img/serat.png" alt="" width="250px" class="img-fluid">
            </div>
            <div class="col-md-6 position-relative border">
              <img src="img/protein.png" alt="" width="300px" class="img-fluid">
            </div>
            <div class="col-md-12 position-relative wadah border">
              <img src="img/jagung.png" alt="" width="80px" class="img-fluid jagung">
              <img src="img/Ellipse 2.png" alt="" width="80px" class="img-fluid elip3">
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</body>

</html>