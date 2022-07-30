<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Daliy Expenses</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <?php
                    $name = $this->session->userdata('fname');
                    ?>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $name; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo base_url('index'); ?>" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Expenses</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo base_url('add-expenses'); ?>" class="dropdown-item">Add Expenses</a>
                            <a href="<?php echo base_url('manage-expenses'); ?>" class="dropdown-item">Manage Expenses</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i> Expenses Report</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo base_url('day-wise-expenses'); ?>" class="dropdown-item">Day Expenses</a>
                            <a href="<?php echo base_url('month-wise-expenses'); ?>" class="dropdown-item">Month Expenses</a>
                            <a href="<?php echo base_url('year-wise-expenses'); ?>" class="dropdown-item">Year Expenses</a>
                        </div>
                    </div>

                    <a href="https://harsh21jain.github.io/Harsh.github.io/" class="nav-item nav-link"><i class="fa fa-th me-2"></i>My Portfolio</a>

                    <a href="<?php echo base_url('users'); ?>" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Users</a>

                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>

                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo base_url('login'); ?>" class="dropdown-item">Sign In</a>
                            <a href="<?php echo base_url('register'); ?>" class="dropdown-item">Sign Up</a>
                        </div>
                    </div>
                    <a href="<?php echo base_url('logout'); ?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Logout</a>                        
                </div>
            </nav>
        </div>