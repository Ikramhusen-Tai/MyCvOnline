<?php include 'include/head.php';?>
<?php include 'include/header.php';?>
<style>
    .colorgraph {
        height: 5px;
        border-top: 0;
        background: #c4e17f;
        border-radius: 5px;
        background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    }
</style>
<!-- Custom Code -->
<!-- Custom Code End -->



<?php
        // session_start();
        // $myconn = mysqli_connect('127.0.0.1', 'root', '', 'my_cv_online') or die("Error");
        
        if (isset($_POST['login'])) {

            $email = $_POST['email'];  
            $password = $_POST['password'];

            $select1 = "Select * from users WHERE user_email='$email'";
            $result = mysqli_query($myconn, $select1);
            $data = mysqli_fetch_array($result);
                
            if (isset($data)) {
                if ($_POST['password'] == $data['user_password']) {
                    $_SESSION['logged_in_user_id'] = $data['user_id'];
                    $_SESSION['logged_in_user_category'] = $data['user_category'];
                    if($_SESSION['logged_in_user_category'] == 'candidate'){
                        //echo "<script type='text/javascript'>alert('This is candidate');</script>."; 
                    }
                    
                    header("Location: include/index.php");
                } else {
                   // echo "<script type='text/javascript'>alert('Worng Email or Password');</script>";
                }
                unset($data);
            }else{
                echo "<script type='text/javascript'>alert('User not found');</script>";
                unset($data);
            }
        }
    ?>

<section class="find-resume-page content-start"  style="padding: 3em; font-family: 'proxima nova rg';">



    <div class="container">
        <div class="row" style="margin-top:20px">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <form role="form" method="post">
                    <fieldset>
                        <h2>Please Sign In</h2>
                        <hr class="colorgraph">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg"
                                placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg"
                                placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="cand-register.php" class="btn btn-lg btn-primary btn-block">Register</a>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" name="login" class="btn btn-lg btn-success btn-block" value="Sign In">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>


<?php include 'include/footer.php';?>
<?php include 'include/js.php';?>