<?php include 'include/head.php';?>
<?php include 'include/header.php';?>
<style>
</style>
<!-- Custom Code -->
<!-- Custom Code End -->




<section class="jobs-page content-start">

    <!-- Search Are -->
    
    <!-- Search Are End -->

</section>

<!-- Recent Jobs -->
<section id="resent-job-post" class="background-color-white">
    <div class="vertical-space-85"></div>
    <div class="container text-center">
        <h3 class="text-center">Explore available jobs </h3>
        <div class="vertical-space-30"></div>
        <p class="max-width">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis
            suspendisse pretium dictumst inceptos mattis euismod
        </p>
        <div class="vertical-space-60"></div>

        <?php
    $myconn1 = mysqli_connect('127.0.0.1', 'root', '', 'my_cv_online') or die("Error");
    if(isset($_POST['filter_job'])){
        $filter = $_POST['filter_job'];
        $select = "Select * from jobs Where job_title like '%$filter%'";
    }
    else{
        $select = "Select * from jobs";
    }
    $result = mysqli_query($myconn1, $select) or die("Error");
    while ($row = mysqli_fetch_array($result)) {
        $compid = $row['company_id'];
        $select2 = "Select * from companies where company_id='$compid'";
        $result2 = mysqli_query($myconn1, $select2) or die("Error");
        $row2 = mysqli_fetch_array($result2);
        
?>
        <form action="job-detail.php" method="post">
            <div class="detail">
                <div class="media display-inline text-align-center">
                    <img src="imags/<?php echo ($row2['company_image']);?>" alt="John Doe" class="mr-3 ">
                    <div class="media-body text-left  text-align-center">
                        <h6><?php echo ($row['job_title']); ?></h6>
                        <i class="large material-icons">account_balance</i>
                        <span class="text"><?php echo ($row2['company_name']); ?></span>
                        <br />
                        <i class="large material-icons">monetization_on</i>
                        <span class="text"><?php echo ($row['job_salary']); ?></span>
                        <br />
                        <i class="large material-icons">place</i>
                        <span
                            class="text font-size">
                            <?php echo ($row2['company_city'] . ', '); echo ($row2['company_province']); ?></span>
                        <div class="float-right margin-top text-align-center">
                            <a href="job-detail.php" class="part-full-time">
                                <input type="hidden" value="<?php echo ($row['job_id']); ?>" name="job_id">
                                <input type="hidden" value="<?php echo ($row['company_id']); ?>" name="company_id">
                                <!-- View More -->
                                <input type="submit" class="btn btn-primary btn-block" name="view_more"value="View More" >
                            </a>
                            <p class="date-time" style="text-transform: capitalize;"><?php echo ($row['job_type']); ?>
                            </p>
                            <p class="date-time">Deadline:<?php echo ($row['job_expires']); ?></p>
                        </div>  
                    </div>
                </div>
            </div>
        </form>
        <!-- <p> </p> -->
        <?php
        }
        mysqli_close($myconn1);
        // }
    ?>
        <!--  php-->
<?php 
    if(isset($_POST['filter_job'])){
?>
        <div class="vertical-space-20"></div>
        <div class="job-list">
            <!-- <a href="#" class="Open-Jobs-Page margin-auto">Open Jobs Page<i class="large material-icons float-right">trending_flat</i></a> -->
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