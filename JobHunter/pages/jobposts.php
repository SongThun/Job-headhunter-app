<?php 
  // error_reporting(E_ALL);
  // ini_set('display_errors',1);

  require '../config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/search.css">
  <link rel="stylesheet" href="../css/jobposts.css">
  <script src="https://kit.fontawesome.com/fdab99180b.js" crossorigin="anonymous"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Document</title>
  <style>
    main{
      flex: 1;
    }
  </style>
</head>
<body>
  <?php include './assets/header.php' ?>
  
  <main>
  <div class="container-search">
      <div class="search-box">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Search anything here...">
      </div>
      <div class="right-box">
        <div class="filter-box">
          <button><i class="fa-solid fa-sliders"></i></button>
       </div>
       <div class="sort-by-box">
        <label for="sort">Sort by:</label>
         <select name="" id="sort"> 
           <option value="Recently">Recently</option>
           <option value="Oldest">Oldest</option>
           <option value="a">a</option>
           <option value="b">b</option>
           <option value="c">c</option>
         </select>
       </div>
      </div>
    </div>

    <div class="container-list-job">
      <div class="container-job-card">
        <div class="container-job-card-left">
          <div class="containter-job-title">
            <h2>Fresher/Junior Software Engineer</h2>
          </div>
          <div class="container-job-description">
            <div class="calender">
              <i class="fa-regular fa-calendar-check"></i>
              01/01/2025 - 01/03/2025
            </div>
            <div class="location">
              <i class="fa-regular fa-map"></i>
              Ho Chi Minh City
            </div>
          </div>
        </div>
        <div class="container-job-card-right">
          <div>
            <a href="">
              <button class="apply-now">Apply now</button>
            </a>
          </div>
        </div>
      </div>
      <div class="container-job-card">
        <div class="container-job-card-left">
          <div class="containter-job-title">
            <h2>Fresher/Junior Software Engineer</h2>
          </div>
          <div class="container-job-description">
            <div class="calender">
              <i class="fa-regular fa-calendar-check"></i>
              01/01/2025 - 01/03/2025
            </div>
            <div class="location">
              <i class="fa-regular fa-map"></i>
              Ho Chi Minh City
            </div>
          </div>
        </div>
        <div class="container-job-card-right">
          <div>
            <a href="">
              <button class="apply-now">Apply now</button>
            </a>
          </div>
        </div>
      </div>
      <div class="container-job-card">
        <div class="container-job-card-left">
          <div class="containter-job-title">
            <h2>Fresher/Junior Software Engineer</h2>
          </div>
          <div class="container-job-description">
            <div class="calender">
              <i class="fa-regular fa-calendar-check"></i>
              01/01/2025 - 01/03/2025
            </div>
            <div class="location">
              <i class="fa-regular fa-map"></i>
              Ho Chi Minh City
            </div>
          </div>
        </div>
        <div class="container-job-card-right">
          <div>
            <a href="">
              <button class="apply-now">Apply now</button>
            </a>
          </div>
        </div>
      </div>
      <div class="container-job-card">
        <div class="container-job-card-left">
          <div class="containter-job-title">
            <h2>Fresher/Junior Software Engineer</h2>
          </div>
          <div class="container-job-description">
            <div class="calender">
              <i class="fa-regular fa-calendar-check"></i>
              01/01/2025 - 01/03/2025
            </div>
            <div class="location">
              <i class="fa-regular fa-map"></i>
              Ho Chi Minh City
            </div>
          </div>
        </div>
        <div class="container-job-card-right">
          <div>
            <a href="">
              <button class="apply-now">Apply now</button>
            </a>
          </div>
        </div>
      </div>
      <div class="container-job-card">
        <div class="container-job-card-left">
          <div class="containter-job-title">
            <h2>Fresher/Junior Software Engineer</h2>
          </div>
          <div class="container-job-description">
            <div class="calender">
              <i class="fa-regular fa-calendar-check"></i>
              01/01/2025 - 01/03/2025
            </div>
            <div class="location">
              <i class="fa-regular fa-map"></i>
              Ho Chi Minh City
            </div>
          </div>
        </div>
        <div class="container-job-card-right">
          <div>
            <a href="">
              <button class="apply-now">Apply now</button>
            </a>
          </div>
        </div>
      </div>
      <div class="container-job-card">
        <div class="container-job-card-left">
          <div class="containter-job-title">
            <h2>Fresher/Junior Software Engineer</h2>
          </div>
          <div class="container-job-description">
            <div class="calender">
              <i class="fa-regular fa-calendar-check"></i>
              01/01/2025 - 01/03/2025
            </div>
            <div class="location">
              <i class="fa-regular fa-map"></i>
              Ho Chi Minh City
            </div>
          </div>
        </div>
        <div class="container-job-card-right">
          <div>
            <a href="">
              <button class="apply-now">Apply now</button>
            </a>
          </div>
        </div>
      </div>
      <div class="container-job-card">
        <div class="container-job-card-left">
          <div class="containter-job-title">
            <h2>Fresher/Junior Software Engineer</h2>
          </div>
          <div class="container-job-description">
            <div class="calender">
              <i class="fa-regular fa-calendar-check"></i>
              01/01/2025 - 01/03/2025
            </div>
            <div class="location">
              <i class="fa-regular fa-map"></i>
              Ho Chi Minh City
            </div>
          </div>
        </div>
        <div class="container-job-card-right">
          <div>
            <a href="">
              <button class="apply-now">Apply now</button>
            </a>
          </div>
        </div>
      </div>
      <div class="container-job-card">
        <div class="container-job-card-left">
          <div class="containter-job-title">
            <h2>Fresher/Junior Software Engineer</h2>
          </div>
          <div class="container-job-description">
            <div class="calender">
              <i class="fa-regular fa-calendar-check"></i>
              01/01/2025 - 01/03/2025
            </div>
            <div class="location">
              <i class="fa-regular fa-map"></i>
              Ho Chi Minh City
            </div>
          </div>
        </div>
        <div class="container-job-card-right">
          <div>
            <a href="">
              <button class="apply-now">Apply now</button>
            </a>
          </div>
        </div>
      </div>
      <div class="container-job-card">
        <div class="container-job-card-left">
          <div class="containter-job-title">
            <h2>Fresher/Junior Software Engineer</h2>
          </div>
          <div class="container-job-description">
            <div class="calender">
              <i class="fa-regular fa-calendar-check"></i>
              01/01/2025 - 01/03/2025
            </div>
            <div class="location">
              <i class="fa-regular fa-map"></i>
              Ho Chi Minh City
            </div>
          </div>
        </div>
        <div class="container-job-card-right">
          <div>
            <a href="">
              <button class="apply-now">Apply now</button>
            </a>
          </div>
        </div>
      </div>
      <div class="container-job-card">
        <div class="container-job-card-left">
          <div class="containter-job-title">
            <h2>Fresher/Junior Software Engineer</h2>
          </div>
          <div class="container-job-description">
            <div class="calender">
              <i class="fa-regular fa-calendar-check"></i>
              01/01/2025 - 01/03/2025
            </div>
            <div class="location">
              <i class="fa-regular fa-map"></i>
              Ho Chi Minh City
            </div>
          </div>
        </div>
        <div class="container-job-card-right">
          <div>
            <a href="">
              <button class="apply-now">Apply now</button>
            </a>
          </div>
        </div>
      </div>
      
    </div>
    <div class="container-pagination">
      <a href="" style="gap: .3rem;" class="page-links disabled-page">
        <i class='bx bx-left-arrow-alt'></i>
        Previous
      </a>
      <a href="" class="page-links active-page">
        1
      </a>
      <a href="" class="page-links">
        2
      </a>
      <a href="" class="page-links">
        3
      </a>
      <a href="" class="page-links">
        ...
      </a>
      <a href="" class="page-links">
        66
      </a>
      <a href="" class="page-links">
        67
      </a>
      <a href="" style="gap: .3rem;" class="page-links">
        Next
        <i class='bx bx-right-arrow-alt' ></i>
      </a>
    </div>
  </main>

  <?php include './assets/footer.php' ?>
</body>
</html>