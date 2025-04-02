<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/jobdescription.css">
  <script src="https://kit.fontawesome.com/fdab99180b.js" crossorigin="anonymous"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Document</title>
  <style>

    main{
      flex: 1;
      z-index: 1;
    }
  </style>
</head>
<body>
  <?php include './assets/header.php' ?>
  
  <main>
  <div class="outside-description">

      <div class="description">

        <div class="job-title">
          <h1>Software Engineer</h1>
        </div>
        <div class="job-description">
          <div class="job-description-sub">
            <div class="applicants">
              <h3>Applicants: </h3>
              <p>54</p>
            </div>
            <div class="locations">
              <h3>Location: </h3>
              <p>Ho Chi Minh City</p>
            </div>
          </div>
          <div class="job-description-sub">
            <div class="level">
              <h3>Level: </h3>
              <p>More than 2 year of experience</p>
            </div>
            <div class="due-date">
              <h3>Due date: </h3>
              <p>01/03/2025</p>
            </div>
          </div>
          <div class="job-description-section-title">
            <h3>Description</h3>
          </div>
          <div class="job-description-section">
            <div class="file-box"></div>
            <div class="job-details">
              <h3>Prerequisites: </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, obcaecati molestias. Animi alias non assumenda consectetur, ipsa nesciunt fugit velit magni minima modi repudiandae voluptas ullam ex similique tempore voluptatem!</p>
    
              <h3>Prerequisites: </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, obcaecati molestias. Animi alias non assumenda consectetur, ipsa nesciunt fugit velit magni minima modi repudiandae voluptas ullam ex similique tempore voluptatem!</p>
              
              <h3>Prerequisites: </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, obcaecati molestias. Animi alias non assumenda consectetur, ipsa nesciunt fugit velit magni minima modi repudiandae voluptas ullam ex similique tempore voluptatem!</p>
              
              <h3>Prerequisites: </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, obcaecati molestias. Animi alias non assumenda consectetur, ipsa nesciunt fugit velit magni minima modi repudiandae voluptas ullam ex similique tempore voluptatem!</p>
              
              <h3>Prerequisites: </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, obcaecati molestias. Animi alias non assumenda consectetur, ipsa nesciunt fugit velit magni minima modi repudiandae voluptas ullam ex similique tempore voluptatem!</p>
              
              <h3>Prerequisites: </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, obcaecati molestias. Animi alias non assumenda consectetur, ipsa nesciunt fugit velit magni minima modi repudiandae voluptas ullam ex similique tempore voluptatem!</p>
              
              <h3>Prerequisites: </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, obcaecati molestias. Animi alias non assumenda consectetur, ipsa nesciunt fugit velit magni minima modi repudiandae voluptas ullam ex similique tempore voluptatem!</p>
              
              <h3>Prerequisites: </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, obcaecati molestias. Animi alias non assumenda consectetur, ipsa nesciunt fugit velit magni minima modi repudiandae voluptas ullam ex similique tempore voluptatem!</p>
              
              <h3>Prerequisites: </h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, obcaecati molestias. Animi alias non assumenda consectetur, ipsa nesciunt fugit velit magni minima modi repudiandae voluptas ullam ex similique tempore voluptatem!</p>
              
            </div>
          </div>
        </div>
  
        <form action="" method="POST">
          <div class="application-form">
            <div class="form-title">
              <h1 style="margin: 2rem 0; color: var(--blue);">Application form</h1>
            </div>
            
            <div class="form-description">
              <div class="form-row">
                <div class="form-row-half">
                  <label for="full-name"><span style="color: red; margin-right: .2rem;">*</span>Full Name</label>
                  <input type="text" name="full-name" id="" required>
                </div>
                <div class="form-row-half">
                  <label for="email-applicant"><span style="color: red; margin-right: .2rem;">*</span>Email</label>
                  <input type="email" name="email-applicant" id="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-row-half">
                  <label for="phone-num"><span style="color: red; margin-right: .2rem;">*</span>Phone Number</label>
                  <input type="tel" name="phone-num" id="" required>
                </div>
                <div class="form-row-half">
                  <label for="address"><span style="color: red; margin-right: .2rem;">*</span>Address</label>
                  <input type="text" name="address" id="" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-row-half">
                  <label for="district"><span style="color: red; margin-right: .2rem;">*</span>District</label>
                  <input type="text" name="district" id="" required>
                </div>
                <div class="form-row-half">
                  <label for="city"><span style="color: red; margin-right: .2rem;">*</span>City</label>
                  <input type="text" name="city" id="" required>
                </div>
              </div>
              <div class="form-row-1">
                <label for="level"><span style="color: red; margin-right: .2rem;">*</span>Level</label>
                <input type="text" name="level" id="" required>
              </div>
              <div class="form-row-1">
                <div class="form-row-1-file">
                  <label for="resume"><span style="color: red; margin-right: .2rem;">*</span>Resume</label>
                  <input type="file" name="resume" id="file-applicant" required>
                </div>
                
                <div class="form-row-1-file">
                  <label for="cover-letter"><span style="color: red; margin-right: .2rem;">*</span>Cover Letter</label>
                  <input type="file" name="cover-letter" id="" required>
                </div>

              </div>

            </div>
            <div class="form-btn"><button type="submit">Apply Now</button></div>
          </div>
        </form>
  
      </div>

    </div>

  </main>

  <?php include './assets/footer.php' ?>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let currentPage = window.location.pathname.split("/").pop().replace(/\.[^/.]+$/, "");
      console.log(currentPage);

      let button = document.querySelectorAll(".list .sub-list");

      button.forEach(button => {
        let btnPage = button.getAttribute("data-links");
        console.log(btnPage);
          if ( btnPage && (btnPage.includes(currentPage) || currentPage.includes("jobdescription"))) {

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