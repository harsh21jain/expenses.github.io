<?php?>

<?php?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Month Expenses | Daily Expenses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
    	 <!-- Sidebar Start -->
        <?php include APPPATH.'views/sidebar.php'; ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include APPPATH.'views/navbar.php'; ?>

            <!-- Navbar End -->
        <!-- Content Start -->
        <div class="content">
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <?php if($this->session->flashdata('success')) echo '<div class="alert alert-success"> '.$this->session->flashdata('success').'. </div>'; ?>
                        <?php if($this->session->flashdata('error')) echo '<div class="alert alert-danger"> '.$this->session->flashdata('error').'. </div>'; ?>
                       
                            <h6 class="mb-4">Month Expenses</h6>
                            <form method="post" enctype="multipart/formdata">
                            	<div class="mb-3">
                                    <label class="form-label">From Date</label>
                                    <input type="date" name="fromdate" class="form-control">                    
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">To Date</label>
                                    <input type="date" name="todate" class="form-control">                    
                                </div>

				        		<input type="submit" name="submit" class="btn btn-danger" value="Add"/>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Form End -->


        </div>
        <!-- Content End -->


            <!-- Footer Start -->
            
        <?php include APPPATH.'views/footer.php'; ?>
            <!-- Footer End -->
        <!-- Back to Top --><!-- 
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/chart/chart.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>