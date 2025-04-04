<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Application</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="../css/AdminApplicationView.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Carrois+Gothic&family=Neonderthaw&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/fdab99180b.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar -->
  <?php include './assets/header.php' ?>

  <!--          Main                 -->
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 col-lg-2 sidebar p-3 mt-3">
        <button class="create-new-btn btn w-100 mb-3">Create new job</button>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            All <span class="sidebar-badge badge">18</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            Approved <span class="sidebar-badge badge">12</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            Pending <span class="sidebar-badge badge">6</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
            Disapproved <span class="sidebar-badge badge">0</span>
          </a>
        </div>
      </div>

      <!-- Main content -->
      <div class="col-md-10 col-lg-10 p-3">
        <div class="col-lg-10 p-3 main-content">
          <div class="row mb-3 align-items-center">
            <div class="col-auto d-lg-none">
              <button class="navbar-toggler" type="button" onclick="toggleSidebar()">
                <i class="bi bi-list-nested"></i>
              </button>
            </div>
            <div class="col">
              <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" class="form-control" placeholder="Search company">
              </div>
            </div>
            <div class="col-auto sort-section d-flex align-items-center">
              <i class="fa-solid fa-sliders me-2 sort-icon"></i>
              <select class="form-select" name="sort">
                <option selected>Sort newest</option>
                <option value="oldest">Sort oldest</option>
                <option value="name">Sort by name</option>
              </select>
            </div>
          </div>

          <!-- Job posts grid -->
          <div class="container">
            <!-- A single job card -->
            <div class="row job-card">
              <div class="col-2 d-flex flex-column align-items-center">
                <img src="https://assets.datamation.com/uploads/2022/04/NVIDIA-logo-icon.png" alt="Company Logo"
                  class="company-logo mb-1">
                <h6 class="text-center">NVIDIA</h6>
              </div>
              <div class="col-10">
                <div class="d-flex justify-content-between">
                  <h5>Software Engineer</h5>
                  <span class="badge job-status-pending">Pending</span>
                </div>
                <p class="mb-1">
                  <i class="bi bi-calendar3"></i> 1/1/2025 - 1/3/2025
                  <i class="ml-4 bi bi-geo-alt"></i> Ho Chi Minh City
                </p>
                <p class="mb-1">
                  <i class="bi bi-hash"></i> Software Engineer, JavaScript
                </p>
                <p class="mb-0">
                  <i class="bi bi-clock-history"></i> > 2 years experience
                </p>
              </div>
            </div>
            <!-- Mấy job card dư xoá đi nếu thêm backend nha -->
            <div class="row job-card">
              <div class="col-2 d-flex flex-column align-items-center">
                <img src="https://assets.datamation.com/uploads/2022/04/NVIDIA-logo-icon.png" alt="Company Logo"
                  class="company-logo mb-1">
                <h6 class="text-center">NVIDIA</h6>
              </div>
              <div class="col-10">
                <div class="d-flex justify-content-between">
                  <h5>Software Engineer</h5>
                  <span class="badge job-status-pending">Pending</span>
                </div>
                <p class="mb-1">
                  <i class="bi bi-calendar3"></i> 1/1/2025 - 1/3/2025
                  <i class="ml-4 bi bi-geo-alt"></i> Ho Chi Minh City
                </p>
                <p class="mb-1">
                  <i class="bi bi-hash"></i> Software Engineer, JavaScript
                </p>
                <p class="mb-0">
                  <i class="bi bi-clock-history"></i> > 2 years experience
                </p>
              </div>
            </div>

            <div class="row job-card">
              <div class="col-2 d-flex flex-column align-items-center">
                <img src="https://assets.datamation.com/uploads/2022/04/NVIDIA-logo-icon.png" alt="Company Logo"
                  class="company-logo mb-1">
                <h6 class="text-center">NVIDIA</h6>
              </div>
              <div class="col-10">
                <div class="d-flex justify-content-between">
                  <h5>Software Engineer</h5>
                  <span class="badge job-status-approved">Approved</span>
                </div>
                <p class="mb-1">
                  <i class="bi bi-calendar3"></i> 1/1/2025 - 1/3/2025
                  <i class="ml-4 bi bi-geo-alt"></i> Ho Chi Minh City
                </p>
                <p class="mb-1">
                  <i class="bi bi-hash"></i> Software Engineer, JavaScript
                </p>
                <p class="mb-0">
                  <i class="bi bi-clock-history"></i> > 3 years experience
                </p>
              </div>
            </div>

            <div class="row job-card">
              <div class="col-2 d-flex flex-column align-items-center">
                <img src="https://assets.datamation.com/uploads/2022/04/NVIDIA-logo-icon.png" alt="Company Logo"
                  class="company-logo mb-1">
                <h6 class="text-center">NVIDIA</h6>
              </div>
              <div class="col-10">
                <div class="d-flex justify-content-between">
                  <h5>Job Position</h5>
                  <span class="badge job-status-disapproved">Disapproved</span>
                </div>
                <p class="mb-1">
                  <i class="bi bi-calendar3"></i> 1/1/2025 - 1/3/2025
                  <i class="ml-4 bi bi-geo-alt"></i> Ho Chi Minh City
                </p>
                <p class="mb-1">
                  <i class="bi bi-hash"></i> Software Engineer, JavaScript
                </p>
                <p class="mb-0">
                  <i class="bi bi-clock-history"></i> 2+ years
                </p>
              </div>
            </div>

            <div class="row job-card">
              <div class="col-2 d-flex flex-column align-items-center">
                <img src="https://assets.datamation.com/uploads/2022/04/NVIDIA-logo-icon.png" alt="Company Logo"
                  class="company-logo mb-1">
                <h6 class="text-center">NVIDIA</h6>
              </div>
              <div class="col-10">
                <div class="d-flex justify-content-between">
                  <h5>Job Position</h5>
                  <span class="badge job-status-pending">Pending</span>
                </div>
                <p class="mb-1">
                  <i class="bi bi-calendar3"></i> 1/1/2025 - 1/3/2025
                  <i class="ml-4 bi bi-geo-alt"></i> Ho Chi Minh City
                </p>
                <p class="mb-1">
                  <i class="bi bi-hash"></i> Software Engineer, JavaScript
                </p>
                <p class="mb-0">
                  <i class="bi bi-clock-history"></i> 2+ years
                </p>
              </div>
            </div>
            <!--  -->
          </div>

          <!-- Pagination -->
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                  <i class="bi bi-arrow-left"></i> Previous
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  Next <i class="bi bi-arrow-right"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
    <!-- Footer -->
    <?php include './assets/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('active');
      }

      // Đóng sidebar khi nhấp ra ngoài
      document.addEventListener('click', function (event) {
        const sidebar = document.querySelector('.sidebar');
        const toggler = document.querySelector('.navbar-toggler');

        // Kiểm tra xem nhấp chuột có nằm ngoài sidebar và nút toggler hay không
        if (!sidebar.contains(event.target) && !toggler.contains(event.target)) {
          sidebar.classList.remove('active');
        }
      });
    </script>
</body>

</html>