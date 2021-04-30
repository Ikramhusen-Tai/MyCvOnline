<?php include 'include/head.php';?>
<?php include 'include/header.php';?>

<!-- Custom Code -->
<!-- Custom Code End -->



<?php
if (isset($_SESSION['logged_in_user_id'])) {
    $id = $_SESSION['logged_in_user_id'];
    if ($_SESSION['logged_in_user_category'] == 'company') {
        $select = "Select * from companies Where company_id='$id'";
        $result = mysqli_query($myconn, $select);
        $data = mysqli_fetch_array($result);
    } else {
        $select = "Select * from candidates Where candidate_id='$id'";
        $result = mysqli_query($myconn, $select);
        $data = mysqli_fetch_array($result);

        $select2 = "Select * from cv Where candidate_id='$id'";
        $result2 = mysqli_query($myconn, $select2);
        $data2 = mysqli_fetch_array($result2);
        $num_rows2 = mysqli_num_rows($result2);
        
        $select3 = "Select * from application Where candidate_id='$id'";
        $result3 = mysqli_query($myconn, $select3);
        // $data3 = mysqli_fetch_array($result3);
        $num_rows3 = mysqli_num_rows($result3);

    }
    $_SESSION['logged_in_user_data'] = $data;
}
?>


<section class="cand-dashboard-page content-start">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading"><?php echo ($num_rows3); ?></h4>
                    <p>Total Jobs Applied</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-secondary" role="alert">
                    <h4 class="alert-heading"><?php echo ($num_rows2); ?></h4>
                    <p>Number of CV</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4">
                                <?php
                            if(isset($data['candidate_fname'])){
                            ?>
                                <img src="<?php echo ($data['candidate_image']); ?>" alt="" class="img-fluid">
                                <?php
                            }
                            else{
                                ?>
                                <img src="http://via.placeholder.com/365" alt="" class="img-fluid">
                                <?php
                            }
                                ?>
                            </div>

                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <h5 class="card-title"> <?php echo ($data['candidate_fname']); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Designation:
                                    <?php echo ($data['candidate_target']); ?></h6>
                                <p class="card-text">
                                    <?php echo ($data['candidate_address']); ?> <br>
                                    <?php echo ($data['candidate_city']); ?>,
                                    <?php echo ($data['candidate_province']); ?>,
                                    <?php echo ($data['candidate_country']); ?>
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Profile</strong>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">You can update your details from here</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <br>

                        <form action="Candidate-Update.php" method="POST" role="form">

                            <div class="row">
                                <div class="col-md-6">

                                   
                                    <div class="form-group">
                                        <input type="text" name="fname" class="form-control" value="<?php echo ($data['candidate_fname']); ?>" placeholder="Input field" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" class="form-control" value="<?php echo ($data['candidate_lname']); ?>" placeholder="Input field" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" value="<?php echo ($data['candidate_email']); ?>" placeholder="Input field" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" value="<?php echo ($data['candidate_phone']); ?>" placeholder="Phone" disabled>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" value="<?php echo ($data['candidate_address']); ?>" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" value="<?php echo ($data['candidate_city']); ?>" placeholder="City">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="province" class="form-control" value="<?php echo ($data['candidate_province']); ?>" placeholder="Province">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="country" class="form-control" value="<?php echo ($data['candidate_country']); ?>" placeholder="Country">
                                    </div>
                                </div>
                            </div>
                            <!-- <p><input type="submit" name="update" value="Update" class="btn btn-primary"> </p> -->
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Your CV</strong>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">You can update your CV from here</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <br>

                        <!-- <form action="Candidate-Update.php" method="POST" role="form"> -->

                            <div class="row">
                                <div class="col-md-12">
                                
                                
                                    <div class="form-group">
                                        <input type="text" name="experience" class="form-control" value="<?php echo ($data2['cv_experience']); ?>" placeholder="Experience">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="education" class="form-control" value="<?php echo ($data2['cv_education']); ?>" placeholder="Education">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="summary" class="form-control" value="<?php echo ($data2['cv_summary']); ?>" placeholder="Summary">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="skills" class="form-control" value="<?php echo ($data2['cv_skills']); ?>" placeholder="Skills">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="update">
                            <p><input type="submit"  name="update_cv" value="Update CV" class="btn btn-primary"> </p>
                        </form>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</section>


<?php include 'include/footer.php';?>
<?php include 'include/js.php';?>