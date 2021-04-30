<?php include 'include/head.php';?>
<?php include 'include/header.php';?>

<!-- Custom Code -->
<!-- Custom Code End -->



  
  

<section class="jobs-page content-start">

    <!-- Search Are -->
    <div id="search-box" style="padding: 2em 0;margin-bottom: 0;">
        <div class="container">
            <div class="col-md-6 offset-md-3 search-box" style="top: 0; position: relative;">
                <form action="find-resume.php" method="post" id="search-box_search_form_3"
                    class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
                    <div class="d-flex flex-row align-items-center justify-content-start inline-block">
                        <!-- <span class="large material-icons search">search by Job Title</span> -->
                        <input class="search-box_search_input" placeholder="Search by Designation"
                            required="required" name="filter_resume" type="sumbmit">
                    </div>
                    <button type="submit" class="search-box_search_button">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Search Are End -->

</section>

<!-- Recent Jobs -->
<section id="resent-job-post" class="background-color-white">
    <div class="vertical-space-85"></div>
    <div class="container text-center">
        <h3 class="text-center">Explore Talents Available Around You </h3>
        <div class="vertical-space-30"></div>
        <p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis
            suspendisse pretium dictumst inceptos mattis euismod
        </p>
        <div class="vertical-space-60"></div>

        <?php
    $myconn1 = mysqli_connect('127.0.0.1', 'root', '', 'my_cv_online') or die("Error");
    
    if(isset($_POST['filter_resume'])){
        $filter = $_POST['filter_resume'];
        $select = "Select * from candidates Where candidate_target like '$filter%'";
        $result = mysqli_query($myconn1, $select) or die("Error");
        $num_rows = mysqli_num_rows($result);
    }
    else{
        $select = "Select 
        candidates.candidate_id,
        candidates.candidate_fname,
        candidates.candidate_lname,
        candidates.candidate_email,
        candidates.candidate_phone,
        candidates.candidate_education,
        candidates.candidate_city,
        candidates.candidate_province,
        candidates.candidate_target,
        cv.cv_skills,
        cv.cv_experience
        from candidates 
        JOIN cv ON candidates.candidate_id = cv.candidate_id";
        $result = mysqli_query($myconn1, $select) or die("Error");
    // $num_rows = mysql_num_rows($result);
    }
    while ($row = mysqli_fetch_array($result)) {
    ?>
    
        <form action="candidate-details.php" method="post">
            <div class="detail">
                <div class="media display-inline text-align-center">
                    <img src="imags/<?php echo ($row['candidate_image']);?>" alt="" class="mr-3 ">
                    <div class="media-body text-left  text-align-center">
                        <h6><?php echo ($row['candidate_target']);?></h6>
                        <span class="text">Name : </span>
                        <span class="text"><?php echo ($row['candidate_fname']);?> <?php echo ($row['candidate_lname']); ?></span>
                        <br />
                        <i class="large material-icons">place</i>
                        <span class="text font-size"><?php echo ($row['candidate_city']); print ", "; echo ($row['candidate_province']);?></span>
                        <br>
                        <div class="float-right margin-top text-align-center">
                        <a href="candidate-details.php" class="part-full-time" >
                        <input type="hidden" value="<?php echo ($row['candidate_id']);?>" name="candidate_id" >
                        <input type="submit" class="btn btn-primary btn-block" name="view_more" value="View More" style=' border: none;outline:none;background-color: none'>   
                                
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </form>
       

  <!-- Modal -->
  <?php
        }
        mysqli_close($myconn1);
        // }
    ?> 
        <!--  php-->
<?php 
    if(isset($_POST['filter_resume'])){
?>
        <div class="vertical-space-20"></div>
        <div class="job-list">
            <!-- <a href="#" class="Open-Jobs-Page margin-auto">Open Jobs Page<i class="large material-icons float-right">trending_flat</i></a> -->

            <ul class="pagination justify-content-start margin-auto">
                <li><p>Total Record found : <?php echo($num_rows); ?></p></li>
            </ul>
            <ul class="pagination justify-content-end margin-auto">
                <li class="page-item"><a class="page-link pdding-none" href="javascript:void(0);"><i
                            class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
                <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                <li class="page-item">
                    <a class="page-link pdding-none" href="javascript:void(0);"> <i
                            class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="vertical-space-60"></div>

    <?php
    }
    unset($_POST);
?>
</section>
<!-- Recent Jobs End-->




<?php include 'include/footer.php';?>
<?php include 'include/js.php';?>