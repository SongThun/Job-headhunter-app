<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/AdminDashboard.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Carrois+Gothic&family=Neonderthaw&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <?php include './assets/header.php' ?>

    <!-- Main  -->
    <div class="container my-3">
        <!-- New job post section -->
        <section class="mb-5">
            <!-- Title -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold title">New job posts</h2>
                <a href="#" class="view-all-button">
                    View all
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right ms-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M0 8a.5.5 0 0 1 .5-.5h12.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H0.5A.5.5 0 0 1 0 8" />
                    </svg>
                </a>
            </div>
            <!-- Job posts container-->
            <div class="job-posts d-flex p-2">
                <!-- A single post -->
                <div class="job-post">
                    <div class="row align-items-start mb-3">
                        <!-- Company logo -->
                        <div class="col-auto">
                            <img src="https://placehold.co/69x69" alt="Company logo">
                        </div>
                        <div class="col">
                            <!-- Company name -->
                            <p class="company-name fw-bold fs-5 mb-2">NVIDIA</p>
                            <!-- Submit day -->
                            <p class="submit-day fs-6 mb-2">Submit 24/12/2025</p>
                            <!-- Job position -->
                            <p class="job-position fw-bold mt-1 fs-5 mb-2">Software Engineer</p>
                            <!-- Due day -->
                            <p class="due-day mb-0">Due date: 01/03/2025</p>
                        </div>
                    </div>
                </div>
                <!-- Thêm các job-post để kiểm tra cuộn ngang, khi nào thêm backend xoá phần này -->
                <div class="job-post">
                    <div class="row align-items-start mb-3">
                        <!-- Company logo -->
                        <div class="col-auto">
                            <img src="https://placehold.co/69x69" alt="NVIDIA logo">
                        </div>
                        <div class="col">
                            <!-- Company name -->
                            <p class="company-name fw-bold fs-5 mb-2">NVIDIA</p>
                            <!-- Submit day -->
                            <p class="submit-day fs-6 mb-2">Submit 24/12/2025</p>
                            <!-- Job position -->
                            <p class="job-position fw-bold mt-1 fs-5 mb-2">Software Engineer</p>
                            <!-- Due day -->
                            <p class="due-day mb-0">Due date: 01/03/2025</p>
                        </div>
                    </div>
                </div>
                <div class="job-post">
                    <div class="row align-items-start mb-3">
                        <!-- Company logo -->
                        <div class="col-auto">
                            <img src="https://placehold.co/69x69" alt="NVIDIA logo">
                        </div>
                        <div class="col">
                            <!-- Company name -->
                            <p class="company-name fw-bold fs-5 mb-2">NVIDIA</p>
                            <!-- Submit day -->
                            <p class="submit-day fs-6 mb-2">Submit 24/12/2025</p>
                            <!-- Job position -->
                            <p class="job-position fw-bold mt-1 fs-5 mb-2">Software Engineer</p>
                            <!-- Due day -->
                            <p class="due-day mb-0">Due date: 01/03/2025</p>
                        </div>
                    </div>
                </div>
                <div class="job-post">
                    <div class="row align-items-start mb-3">
                        <!-- Company logo -->
                        <div class="col-auto">
                            <img src="https://placehold.co/69x69" alt="NVIDIA logo">
                        </div>
                        <div class="col">
                            <!-- Company name -->
                            <p class="company-name fw-bold fs-5 mb-2">NVIDIA</p>
                            <!-- Submit day -->
                            <p class="submit-day fs-6 mb-2">Submit 24/12/2025</p>
                            <!-- Job position -->
                            <p class="job-position fw-bold mt-1 fs-5 mb-2">Software Engineer</p>
                            <!-- Due day -->
                            <p class="due-day mb-0">Due date: 01/03/2025</p>
                        </div>
                    </div>
                </div>
                <div class="job-post">
                    <div class="row align-items-start mb-3">
                        <!-- Company logo -->
                        <div class="col-auto">
                            <img src="https://placehold.co/69x69" alt="Company logo">
                        </div>
                        <div class="col">
                            <!-- Company name -->
                            <p class="company-name fw-bold fs-5 mb-2">NVIDIA</p>
                            <!-- Submit day -->
                            <p class="submit-day fs-6 mb-2">Submit 24/12/2025</p>
                            <!-- Job position -->
                            <p class="job-position fw-bold mt-1 fs-5 mb-2">Software Engineer</p>
                            <!-- Due day -->
                            <p class="due-day mb-0">Due date: 01/03/2025</p>
                        </div>
                    </div>
                </div>
                <div class="job-post">
                    <div class="row align-items-start mb-3">
                        <!-- Company logo -->
                        <div class="col-auto">
                            <img src="https://placehold.co/69x69" alt="NVIDIA logo">
                        </div>
                        <div class="col">
                            <!-- Company name -->
                            <p class="company-name fw-bold fs-5 mb-2">NVIDIA</p>
                            <!-- Submit day -->
                            <p class="submit-day fs-6 mb-2">Submit 24/12/2025</p>
                            <!-- Job position -->
                            <p class="job-position fw-bold mt-1 fs-5 mb-2">Software Engineer</p>
                            <!-- Due day -->
                            <p class="due-day mb-0">Due date: 01/03/2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- New application section -->
        <section>
            <!-- Title and View all button -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold title">New applications</h2>
                <a href="#" class="view-all-button">
                    View all
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right ms-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M0 8a.5.5 0 0 1 .5-.5h12.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H0.5A.5.5 0 0 1 0 8" />
                    </svg>
                </a>
            </div>
            <!-- Application container -->
            <div class="applications p-3">
                <!-- A single application -->
                <div class="application mb-3">
                    <div class="row align-items-start">
                        <!-- Company logo -->
                        <div class="col-auto">
                            <img src="https://placehold.co/69x69" alt="NVIDIA logo">
                        </div>
                        <div class="col">
                            <!-- Company name -->
                            <p class="company-name fw-normal mb-2">NVIDIA</p>
                            <!-- Hàng chứa Job position, Date, View link -->
                            <div class="row align-items-between">
                                <!-- Job position (start) -->
                                <div class="col-auto">
                                    <p class="job-position fw-bold mb-0">Software Engineer</p>
                                </div>
                                <!-- Date (center) -->
                                <div class="col text-center">
                                    <p class="mb-0">01/03/2025</p>
                                </div>
                                <!-- View applications link (end) -->
                                <div class="col-auto ms-auto">
                                    <a href="#" class="view-application-link">View 25 applications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Thêm vào cho nhiều, khi nào thêm backend thì xoá nha -->
                <div class="application mb-3">
                    <div class="row align-items-start">
                        <!-- Company logo -->
                        <div class="col-auto">
                            <img src="https://placehold.co/69x69" alt="NVIDIA logo">
                        </div>
                        <div class="col">
                            <!-- Company name -->
                            <p class="company-name fw-normal mb-2">NVIDIA</p>
                            <!-- Hàng chứa Job position, Date, View link -->
                            <div class="row align-items-between">
                                <!-- Job position (start) -->
                                <div class="col-auto">
                                    <p class="job-position fw-bold mb-0">Software Engineer</p>
                                </div>
                                <!-- Date (center) -->
                                <div class="col text-center">
                                    <p class="mb-0">01/03/2025</p>
                                </div>
                                <!-- View applications link (end) -->
                                <div class="col-auto ms-auto">
                                    <a href="#" class="view-application-link">View 25 applications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="application mb-3">
                    <div class="row align-items-start">
                        <!-- Company logo -->
                        <div class="col-auto">
                            <img src="https://placehold.co/69x69" alt="NVIDIA logo">
                        </div>
                        <div class="col">
                            <!-- Company name -->
                            <p class="company-name fw-normal mb-2">NVIDIA</p>
                            <!-- Hàng chứa Job position, Date, View link -->
                            <div class="row align-items-between">
                                <!-- Job position (start) -->
                                <div class="col-auto">
                                    <p class="job-position fw-bold mb-0">Software Engineer</p>
                                </div>
                                <!-- Date (center) -->
                                <div class="col text-center">
                                    <p class="mb-0">01/03/2025</p>
                                </div>
                                <!-- View applications link (end) -->
                                <div class="col-auto ms-auto">
                                    <a href="#" class="view-application-link">View 25 applications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="application mb-3">
                    <div class="row align-items-start">
                        <!-- Company logo -->
                        <div class="col-auto">
                            <img src="https://placehold.co/69x69" alt="NVIDIA logo">
                        </div>
                        <div class="col">
                            <!-- Company name -->
                            <p class="company-name fw-normal mb-2">NVIDIA</p>
                            <!-- Hàng chứa Job position, Date, View link -->
                            <div class="row align-items-between">
                                <!-- Job position (start) -->
                                <div class="col-auto">
                                    <p class="job-position fw-bold mb-0">Software Engineer</p>
                                </div>
                                <!-- Date (center) -->
                                <div class="col text-center">
                                    <p class="mb-0">01/03/2025</p>
                                </div>
                                <!-- View applications link (end) -->
                                <div class="col-auto ms-auto">
                                    <a href="#" class="view-application-link">View 25 applications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Footer -->
    <?php include './assets/footer.php' ?>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>