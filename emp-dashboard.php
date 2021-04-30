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
        $num_rows1 = mysqli_num_rows($result2);

        $selectJobs = "Select * from jobs where company_id='$id'";
        $result_new = mysqli_query($myconn, $selectJobs);
        $dataNew = mysqli_fetch_array($result_new);
        $num_rows2 = mysqli_num_rows($result_new);
    }
    $_SESSION['logged_in_user_data'] = $data;
}
?>


<section class="cand-dashboard-page content-start">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading"><?php echo ($num_rows2); ?></h4>
                    <p>Total Jobs Posted</p>
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
                            if(isset($data['company_name'])){
                            ?>
                                <img src="imags/<?php echo ($data['company_image']); ?>" alt="" class="img-fluid">
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
                                <h5 class="card-title"> <?php echo ($data['company_name']); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Email:
                                    <?php echo ($data['company_email']); ?></h6>
                                <p class="card-text">
                                    <?php echo ($data['company_address']); ?> <br>
                                    <?php echo ($data['company_city']); ?>,
                                    <?php echo ($data['company_province']); ?>,
                                    <?php echo ($data['company_country']); ?>
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

                        <form action="cand-dashboard.php" method="POST" role="form">

                            <div class="row">
                                <div class="col-md-6">

                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo ($data['company_name']); ?>" placeholder="Input field">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo ($data['company_email']); ?>" placeholder="Input field">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo ($data['company_phone']); ?>" placeholder="Input field">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo ($data['company_address']); ?>" placeholder="Input field">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo ($data['company_city']); ?>" placeholder="Input field">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo ($data['company_province']); ?>" placeholder="Input field">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo ($data['company_country']); ?>" placeholder="Input field">
                                    </div>
                                </div>
                            </div>

                        </form>
                        <a href="#" class="btn btn-primary">Update</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
</section>


<?php include 'include/footer.php';?>
<?php include 'include/js.php';?>