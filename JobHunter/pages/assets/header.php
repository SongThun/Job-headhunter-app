<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    :root {
    --dark-gray: #3C3744;
    --deep-blue: #090C9B;
    --blue: #3D52D5;
    --light-blue: #B4C5E4;
    --off-white: #FBFFF1;
    }
    html, body{
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
      overflow-x: hidden;
      height: 100vh;
      width: 100vw;
    }

    header{
      position: sticky;
      top: 0;
      margin: 0.5% 1%;
      z-index: 1000;
      background: white;
    }
    *{
      text-decoration: none;
    }
    .navbar{
      display: grid;
      grid-template-columns: 35% 55% 30%;
      gap: 10px;
      padding: 0.8rem 3rem 1rem 2rem;
      border-style: solid;
      border-top: none;
      border-right: none;
      border-left: none;
      align-items: center;
    }
    .navbar .logo{
      display: block;
    }
    .navbar .logo a,
    .navbar .list a{
      color: black;
    }
    .navbar .list{
      display: flex;
      gap: 8%;
    }
    .navbar .sign-up-in{
      display: flex;
      gap: 3%;
    }
    .nav-btn-sign-in,
    .sub-list{
      border:none;
      background: none;
      outline: none;
      cursor: pointer;
    }
    .nav-btn-sign-up{
      height: 2.3rem;
      width: 5rem;
      border-radius: 10px;
      border: none;
      box-sizing: border-box;
      background: var(--blue);
      color: white;
      cursor: pointer;
    }

    .active-list{
      height: 2.3rem;
      min-width: 5rem;
      width: max-content;
      border-radius: 10px;
      border: none;
      box-sizing: border-box;
      background: var(--blue);
      color: white;
      cursor: pointer;
    }

  </style>
  <header>
    <nav>
      <div class="navbar">
        <div class="logo">
          <div><a href="" style="cursor: default;"><h2 style="margin: 0; max-width: fit-content;cursor: pointer;">JOB</h2></a></div>
          <div><a href="" style="cursor: default;"><h2 style="margin: 0; max-width: fit-content;cursor: pointer;">PORTAL</h2></a></div>
        </div>
        <div class="list">
          <button href="" class="sub-list" data-links="">Home</button>
          <button href="" class="sub-list" data-links="jobposts.html">Job Listing</button>
          <button href="" class="sub-list" data-links="">Help</button>
          <button href="" class="sub-list" data-links="">Contact</button>
        </div>
        <div class="sign-up-in">
          <button class="nav-btn-sign-in">Sign in</button>
          <button class="nav-btn-sign-up">Sign up</button>
        </div>
      </div>
    </nav>
  </header>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let currentPage = window.location.pathname.split("/").pop().replace(/\.[^/.]+$/, "");
      // console.log(currentPage);

      let button = document.querySelectorAll(".list .sub-list");

      button.forEach(button => {
        let btnPage = button.getAttribute("data-links");
        // console.log(btnPage);
          if ( btnPage && btnPage.includes(currentPage)) {

            button.classList.add("active-list"); // Add active class
          } else {
            button.classList.remove("active-list"); // Ensure others don't have it
          }
          button.addEventListener("click", () => {
          window.location.href = btnPage;
        });
      });
    });
  </script>

  
</body>
</html>