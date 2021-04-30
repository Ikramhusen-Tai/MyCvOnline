<?php include 'include/head.php';?>
<?php include 'include/header.php';?>

<!-- Custom Code -->
<!-- Custom Code End -->




<?php

    // function phpAlert($msg) {
    //     echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    // }
    // phpAlert($job_id);
//     $insert1 = "INSERT INTO jobs(job_title,job_type,job_description,job_category,job_salary,job_experience,job_education,company_id,job_expires)
//                    VALUES('$title','$type','$desc','$category','$salary','$exp','$edu','$by','$exp_date')";
//         $rows = mysqli_query($myconn, $insert1) or die("Error while inserting values 1");
// ?>

<section id="intro">
    <div class="carousel-item active">
        <div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
        <div class="carousel-container">
            <div class="carousel-content">
                <h2 class="font-color-white">Job Result</h2>
                <p class="font-color-white width-100">
                    <a href="index.html" class="font-color-white">Home /</a>
                    <a href="Job_Category-2.html" class="font-color-white"> Job </a>
                    / Details
                </p>
            </div>
        </div>
    </div>
</section>



<section id="job-Details">
    <div class="container background-color-full-white job-Details">
        <div class="row">
            <div class="col-md-3">
                <img src="http://via.placeholder.com/350" alt="Logo" class="img-responsive" style="max-width: 100%;">
            </div>
            <div class="col-md-5">
                <div class="Exclusive-Product">
                    <h3>Exclusive Product Manager Needed</h3>
                    <h6 class="font-color-orange">Airbnx Expross Soft</h6>
                    <i class="material-icons">place</i>
                    <span class="text">11907 Doyle Cape Cydneyview</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Exclusive-Product">
                    <form action="job-detail.php" method = 'post'>
                    <input type='submit' class = "btn btn-primary" name = 'apply' value='Apply'> 
                    </form>
                    <!-- <a href="#" class="Apply-Now">Apply Now</a> -->
                </div>
            </div>
        </div>
        <div class="Exclusive-Product">
            <h4>Short description</h4>
            <p>Porttitor amet condimentum non fringilla nostra scelerisque suscipit torquent sem tempor hac rutrum
                posuere etiam, in risus a aenean nibh dapibus quis litora lobortis torquent ligula torquent commodo
                pretium massa gravida senectus donec scelerisque cursus sit, sapien quam eros euismod volutpat
                commodo convallis interdum, habitant leo himenaeos dictumst lorem taciti quisque.
            </p>
        </div>
        <img src="imags/job-detail.jpg" alt="" class="job-detail-img">
        <div class="Job-Description">
            <h4>Job Description / Responsibility</h4>
            <ul>
                <li class="list-style">Et vestibulum ullamcorper curae tellus consectetur erat pharetra et cubilia
                    Nibh est auctor lacus nam lacinia aptent</li>
                <li class="list-style">
                    Vitae sociosqu a nisi cubilia vulputate aliquam vulputate imperdiet tempor arcu fames</li>
                <li class="list-style">
                    Odio habitasse senectus morbi dapibus mauris non primis, nisl ante hendrerit consectetur nulla
                    phasellus eleifend, ad at scelerisque vulputate habitant tempor</li>
                <li class="list-style">
                    Dictum tortor praesent aliquam lectus est vestibulum, viverra arcu fringilla lectus luctus proin
                    conubia, et porta pellentesque donec mollisEt vestibulum ullamcorper curae tellus consectetur
                    erat pharetra et cubilia</li>
                <li class="list-style">
                    Vitae sociosqu a nisi cubilia vulputate aliquam vulputate imperdiet tempor arcu fames</li>
                <li class="list-style">
                    Odio habitasse senectus morbi dapibus mauris non primis, nisl ante hendrerit consectetur nulla
                    phasellus eleifend, ad at scelerisque vulputate habitant tempor</li>
                <li class="list-style">
                    Dictum tortor praesent aliquam lectus est vestibulum, viverra arcu fringilla lectus luctus proin
                    conubia</li>
            </ul>
            <div class="vertical-space-20"></div>
            <h4>Experience & Requirement</h4>
            <p class="margin-bottom">Suspendisse augue pulvinar placerat himenaeos odio nec turpis augue sem
                maecenas, faucibus erat lacinia consectetur sapien suscipit vestibulum venenatis himenaeos elit
                etiam lobortis luctus tempor phasellus vitae aliquam aenean tincidunt suscipit rhoncus mauris,
                lectus duis aenean fermentum aptent laoreet habitant suspendisse donec malesuada lectus quisque
                primis tristique donec mattis, per euismod quisque urna proin ornare, convallis litora curae
                dictumst.</p>
            <ul>
                <li class="list-style">Et vestibulum ullamcorper curae tellus consectetur erat pharetra et cubilia
                    Nibh est auctor lacus nam lacinia aptent</li>
                <li class="list-style">
                    Et vestibulum ullamcorper curae tellus consectetur erat pharetra et cubilia Nibh est auctor
                    lacus nam lacinia aptent</li>
                <li class="list-style">
                    Vitae sociosqu a nisi cubilia vulputate aliquam vulputate imperdiet tempor arcu fames</li>
                <li class="list-style">
                    Odio habitasse senectus morbi dapibus mauris non primis, nisl ante hendrerit consectetur nulla
                    phasellus eleifend, ad at scelerisque vulputate habitant temmollis</li>
            </ul>
        </div>
    </div>
</section>
<?php
$job_id ='';
$company_id='';

if(isset($_POST['view_more'])){
     
    $job_id = $_POST['job_id'];
    $company_id = $_POST['company_id'];
    $id = $_SESSION['logged_in_user_id'];
    // $insert = "INSERT INTO application  ( job_id, company_id, candidate_id, status) VALUES ('$job_id','$company_id','$id','1')";
    // $rows = mysqli_query($myconn, $insert) or die("Error while inserting values 1");
    // echo '<script>alert("You have successfully applied for this job")</script> ';
    // mysqli_close($myconn);
}

if(isset($_POST['apply'])){
    $insert = "INSERT INTO application  ( job_id, company_id, candidate_id, status) VALUES ('$job_id','$company_id','$id','1')";
    $rows = mysqli_query($myconn, $insert) or die("Error while inserting values 1");
    echo '<script>alert("You have successfully applied for this job")</script> ';
    mysqli_close($myconn);

}

?>
<?php include 'include/footer.php';?>
<?php include 'include/js.php';?>
