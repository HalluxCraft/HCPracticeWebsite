<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="HalluxCraft Practice | Home">
    <meta property="og:description" content="HalluxCraft Practice is a modern and uique Minecraft Bedrock Server">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>HalluxCraft Practice | Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet"/>

    <!-- HalluxCraft Icons -->
    <link rel="icon" href="assets/icons/hc-logo.jpg">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #010101">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/icons/hc-logo.jpg" alt="hc-logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
            <li class="nav-item col-6 col-md-auto">
              <a class="nav-link p-2" href="https://github.com/HalluxCraft" target="_blank" rel="noopener">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 512 499.36" role="img">
                  <title>GitHub</title>
                  <path fill="currentColor" fill-rule="evenodd" d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z"></path>
                </svg>
                <small class="d-md-none ms-2">GitHub</small>
              </a>
            </li>
            <li class="nav-item col-6 col-md-auto">
              <a class="nav-link p-2" href="#" target="_blank" rel="noopener">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 16 16" role="img">
                  <title>Discord</title>
                  <path d="M13.545 2.907a13.2 13.2 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.2 12.2 0 0 0-3.658 0 8 8 0 0 0-.412-.833.05.05 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.04.04 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032q.003.022.021.037a13.3 13.3 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019q.463-.63.818-1.329a.05.05 0 0 0-.01-.059l-.018-.011a9 9 0 0 1-1.248-.595.05.05 0 0 1-.02-.066l.015-.019q.127-.095.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.05.05 0 0 1 .053.007q.121.1.248.195a.05.05 0 0 1-.004.085 8 8 0 0 1-1.249.594.05.05 0 0 0-.03.03.05.05 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.2 13.2 0 0 0 4.001-2.02.05.05 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.03.03 0 0 0-.02-.019m-8.198 7.307c-.789 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612"/>
                </svg>
                <small class="d-md-none ms-2">Discord</small>
              </a>
            </li>
            <li class="nav-item col-6 col-md-auto">
              <a class="nav-link p-2" href="#" target="_blank" rel="noopener">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 16 16" role="img">
                  <title>Info</title>
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
                </svg>
                <small class="d-md-none ms-2">Info</small>
              </a>
            </li>
          </ul>
          <div class="d-flex">
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- First Layout Start -->
    <div class="container-fluid d-flex justify-content-center align-items-center text-light" style="height: 100vh; background-image: url('assets/images/background.jpg'); background-size: cover; background-position: center;">
      <button type="button" class="badge bg-dark text-wrap d-flex flex-column justify-content-center align-items-center" style="width: 10rem; height: 4rem; font-size: 1rem; position: relative;">
        <span style="position: absolute; top: 40%; transform: translateY(-50%);">PLAY</span>
        <span style="font-size: 0.75rem; margin-top: auto;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 20 20">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
          </svg>
          0 online
        </span>
        <a href="#" target="_blank" rel="noopener"></a>
      </button>
    </div>
      
    <!-- First Layout End -->

    <!-- Footer Start -->
      <footer class="py-16 text-center text-sm text-black dark:text-white/70" style="background-color: #010101">
        © 2024 Hallux Craft - All Rights Reserved
      </footer>
    <!-- Footer End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>