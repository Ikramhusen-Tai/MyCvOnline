<header class="header">

    <div class="top_bar background-color-orange">
        <div class="top_bar_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <ul class="top_bar_contact_list">
                                <li>
                                    <i class="fa fa-phone coll" aria-hidden="true"></i>
                                    <div class="contact-no">0123 4567 8912</div>
                                </li>
                                <li>
                                    <i class="fa fa-envelope coll" aria-hidden="true"></i>
                                    <div class="email"><a href="" class="__cf_email__">ikramhusen@gmail.com</a>
                                    </div>
                                </li>
                            </ul>
                            <div class=" ml-auto ">
                                <div class="search_button search"><i
                                        class="large material-icons search-icone">search</i></div>
                                <div class="hamburger menu_mm  search_button transparent search display"><i
                                        class="large material-icons font-color-white  search-icone  menu_mm ">menu</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header_container background-color-orange-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="index.php">
                                <img src="imags/logo.png" class="logo-text" alt="">
                            </a>
                        </div>
                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                <li><a href="index.php">Home</a></li>
                                
                                <?php 
                            if(isset($_SESSION['logged_in_user_category'])){
                                if($_SESSION['logged_in_user_category']=='candidate'){
                                    ?>
                                    
                                <li><a href="jobs.php">Job List</a></li>
                                <li><a href="cand-dashboard.php">Dashboard</a></li>
                              
                                <?php
                                        }
                                        elseif(($_SESSION['logged_in_user_category']=='admin')){
                                            ?>
                                            <li><a href="AllApplications.php">Applications</a></li>
                                            <li><a href="AllCandidates.php">Candidates</a></li>
                                            <li><a href="AllCompanies.php">Companies</a></li>
                                         
                            </ul>
                            <?php
                                    }
                                    
                                        else{
                                            ?>
                                            <li><a href="find-resume.php">Find Resume</a></li>
                                            <li><a href="post-job.php">Post Jobs</a></li>
                                            <li><a href="applications.php">Applications</a></li>
                                            
                                            <li><a href="emp-dashboard.php">Dashboard</a></li>
                            </ul>
                            <?php
                                    }
                                    ?>
                            <div class="Post-Jobs">
                            <a href="logout.php">Logout</a> 
                                <!-- <form method="post" action="index.php" class="m-0 p-0">
                                    <input type="submit" name="logout" class="btn btn-default btn-round border border-white btn-lg"
                                        value="Logout"/>
                                </form> -->
                            </div>
                            <?php
                            
                                }
                                    else{
                                    ?>
                            <div class="Post-Jobs">
                                <a href="cand-register.php">Register</a>
                            </div>
                            <div class="Post-Jobs">
                                <a href="login.php">Login</a>
                            </div>
                            <?php } ?>
                            <!-- <div class="hamburger menu_mm menu-vertical">
                                <i class="large material-icons font-color-white menu_mm menu-vertical">menu</i>
                            </div> -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container">
            <div class="menu_close">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button
                    class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li><a href="index.php">Home</a></li>
                <li><a href="jobs.php">Job List</a></li>
                <li><a href="find-resume.php">Find Resume</a></li>
                <li><a href="">Post Job</a></li>
            </ul>
        </nav>
    </div> -->
</header>