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
  <nav class="navbar navbar-expand-xl navbar-light fixed-top">
    <div class="container-fluid ps-0">
      <!-- Logo -->
      <div class="d-flex flex-grow-1 position-relative">
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
      <div class="collapse navbar-collapse py-xl-3 py-4" id="navbarSupportedContent">
        <div class="d-flex justify-content-center flex-grow-1">
          <ul class="navbar-nav mb-xl-0 align-items-center mb-3">
            <li class="nav-item">
              <a class="me-xl-2 btn text-center nav-link ijo rounded-pill text-white fw-bold item" aria-current="page" data-nutri="Index" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="mx-xl-2 btn text-center nav-link oren rounded-pill text-white fw-bold item" href="#">How It Works</a>
            </li>
            <li class="nav-item">
              <a class="mx-xl-2 btn text-center nav-link ijo rounded-pill text-white fw-bold item" href="#">Recipes</a>
            </li>
            <li class="nav-item">
              <a class="mx-xl-2 btn text-center nav-link oren rounded-pill text-white fw-bold item" href="#">Callculator</a>
            </li>
            <li class="nav-item">
              <a class="mx-xl-2 btn text-center nav-link ijo rounded-pill text-white fw-bold item" href="#">Planner</a>
            </li>
          </ul>
        </div>
        <div class="d-flex justify-content-center flex-grow-0">
          <ul class="navbar-nav align-items-center mb-xl-0">
            <li class="nav-item item">
              <a class="btn text-center nav-link oren rounded-pill text-white px-5 fw-bold" href="#">Log In/Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <main>
    <!-- Isi konten -->
    <div class="container-fluid min-vh-100 lat-blkg px-4 konten" width="100%">
      <div class="row min-vh-100 align-items-center mb-5">
        <!-- Paragraf -->
        <div class="col-lg-6 col-md-12 prg">
          <h1 class="pg1-h1 fw-bold col-xl-6 col-8 text-wrap">Cook Smart, Waste Less</h1>
          <h2 class="fw-bold">Smart Meal Planning for a Healthier Life</h2>
          <p class="parag-homepage fw-bold">
            Plan healthier meals based on your BMI, calorie needs, and dietary preferences.
            NutriPlan helps you create personalized meal plans using BMI analysis,
            nutrition data, and smart recommendations.
          </p>
          <!-- Button main -->
          <div class="col-lg-12 d-flex">
            <a href="#" class="align-items-center btn ijo text-white rounded-pill fw-bold px-4 me-3" width="33%">Calculate Your Plan</a>
            <a href="#" class="align-items-center btn oren text-white rounded-pill fw-bold px-4 ms-3" width="33%">Explore Recipes</a>
          </div>
        </div>
        <!-- Elemen gambar -->
        <div class="container col-6">
          <div class="row text-center">
            <div class="col-md-2 d-none d-lg-block position-relative">
              <img src="img/brokoli.png" alt="" class="img-fluid brokoli">
              <img src="img/Ellipse 3.png" alt="" class="elip1 img-fluid">
            </div>
            <div class="col-md-7 d-none position-relative d-lg-block">
              <img src="img/tanaman.png" alt="Ini plate" class="img-fluid plate">
            </div>
            <div class="col-md-2 d-none d-lg-block position-relative wadah">
              <img src="img/wortel.png" alt="" class="wortel img-fluid">
              <img src="img/Ellipse 1.png" alt="" class="elip2 img-fluid">
            </div>
            <div class="col-md-6 d-none d-lg-block position-relative wadah">
              <img src="img/protein.png" alt="" class="img-fluid protein">
              <img src="img/jagung.png" alt="" class="img-fluid jagung">
              <img src="img/Ellipse 2.png" alt="" class="img-fluid elip3">
            </div>
            <div class="col-md-6 d-none d-lg-block position-relative wadah">
              <img src="img/serat.png" alt="" class="img-fluid serat">
            </div>
          </div>
        </div>
      </div>
      <div class="row min-vh-100 border">
        <div class="container border col-12">
          <h1 class="pg2-h1 fw-bold">How NutriPlan Works</h1>
          <h2 class="text-center">From body data to personalized meals - everything is designed to help you smarter and live healtier</h2>
        </div>
        <div class="container mt-5 col-12 d-flex flex-wrap justify-content-evenly border">
          <div class="card m-3 d-flex align-items-center justify-content-center">
            <p><span class="Num me-3">01</span><span class="Txt">Create Account</span></p>
          </div>
          <div class="card m-3 align-items-center justify-content-center">
            <p><span class="Num me-3">01</span><span class="Txt">Create Account</span></p>
          </div>
          <div class="card m-3 align-items-center justify-content-center">
            <p><span class="Num me-3">01</span><span class="Txt">Create Account</span></p>
          </div>
          <div class="card m-3 align-items-center justify-content-center">
            <p><span class="Num me-3">01</span><span class="Txt">Create Account</span></p>
          </div>
          <div class="card m-3 align-items-center justify-content-center">
            <p><span class="Num me-3">01</span><span class="Txt">Create Account</span></p>
          </div>
          <div class="container">
            <div class="d-flex justify-content-center border my-5">
              <a href="#" class="btn ijo text-white rounded-pill fw-bold px-4 me-3" width="33%">Calculate Your Plan</a>
              <a href="#" class="btn oren text-white rounded-pill fw-bold px-4 ms-3" width="33%">Explore Recipes</a>
            </div>
          </div>

        </div>
      </div>
      <div class="row min-vh-100">
        <div class="container col-12 border px-5">
          <h1 class="pg3-h1 fw-bold">Explore Healthy Recipes</h1>
          <h2 class="pg3-h2">Discover nutritions and delicious recipes tailored to your lifestyle. From quick breakfast to balanced dinners, NutriPlan helps you find meals you’ll actually enjoy</h2>
          <div class="container">
            <div class="d-flex justify-content-center my-4">
              <a href="#" class="btn oren text-white rounded-pill fw-bold px-4 ms-3" width="33%">Explore Recipes</a>
            </div>
          </div>

          <div class="container mt-5 col-12 d-flex flex-wrap justify-content-evenly border">
            <div class="card-1 m-3 d-flex align-items-center justify-content-center">
              <p><span class="Num me-3">01</span><span class="Txt">Create Account</span></p>
            </div>
            <div class="card-1 m-3 d-flex align-items-center justify-content-center">
              <p><span class="Num me-3">01</span><span class="Txt">Create Account</span></p>
            </div>
            <div class="card-1 m-3 d-flex align-items-center justify-content-center">
              <p><span class="Num me-3">01</span><span class="Txt">Create Account</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row min-vh-100 prg">
        <div class="col-7 border">
          <div class="col-6">
            <h1 class="pg3-h1 text-start fw-bold">Calculate Your Health Need</h1>
          </div>
          <h2 class="pg3-h2 text-start">Use NutriPlan’s calculator to estimate your BMI, calori needs, and personalized nutrition targets based on your body data and goals</h2>
          <a href="#" class="btn ijo text-white rounded-pill fw-bold mt-4" width="33%">Try Calculator</a>
        </div>
        <div class="col-5 border"></div>
      </div>
      <div class="row min-vh-100 plg">
        <div class="col-6 border"></div>
        <div class="col-6 border">
          <h1 class="pg3-h1 text-end fw-bold">Stay On Track With Your Meals</h1>
          <h2 class="pg3-h2 text-end">NutriPlan makes it easy to plan and personalized your meals for the day and the week. Stay organized, track your nutrition, and achieve your health goals!</h2>
          <div class="d-flex justify-content-end mt-4">
            <a href="#" class="btn oren text-white rounded-pill fw-bold mt-4" width="33%">Start Planning</a>
          </div>
        </div>
      </div>


    </div>
    </div>
    </div>
  </main>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Javascript -->
  <script src="script/script.js" defer></script>
</body>

</html>