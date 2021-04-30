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




<section class="find-resume-page content-start" style="padding: 3em; font-family: 'proxima nova rg';">
    <div class="container">
        <div class="row" style="margin-top:20px">
            <div class="col-sm-12">
                <h2>Please Sign Up</h2>
                <p>Register as Job Seeker</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6 candidate-form" style="display: block;">
                <form role="form"  action="cand-regi.php" method="post" enctype="multipart/form-data"  name="RegForm" onsubmit="return FormValidate()">
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="c_first_name" class="form-control input-lg Name"
                                    placeholder="First Name" tabindex="1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="c_last_name " class="form-control input-lg Name"
                                    placeholder="Last Name" tabindex="2">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="c_email" class="form-control input-lg Email" placeholder="Email Address"
                            tabindex="4">
                    </div>
                    <div class="form-group">
                        <input type="text" name="c_phone" class="form-control input-lg Phone" placeholder="Phone"
                            tabindex="3">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="c_password" class="form-control input-lg Psw"
                                    placeholder="Password" tabindex="5">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="c_password_confirmation " class="form-control input-lg cPsw"
                                    placeholder="Confirm Password" tabindex="6">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 col-sm-1 col-md-1">
                            <span class="button-checkbox">
                                <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                            </span>
                        </div>
                        <div class="col-xs-10 col-sm-11 col-md-11">
                            By clicking <strong class="label label-primary">Register</strong>, you agree to the <a
                                href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out
                            by this site, including our Cookie Use.
                        </div>
                    </div>

                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <a href="login.php" class="btn btn-success btn-block btn-lg">Sign In</a>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="submit" value="Register" name="register_candidate" class="btn btn-primary btn-block btn-lg" tabindex="7">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6 employer-form">
                <h2>If you want to post a job</h2>
                <br>
                <a href="emp-register.php" class="btn btn-success btn-lg">
                    Register as Employer
                </a>
            </div>

        </div>
</section>

<script src="js/validation.js"></script>
<?php include 'include/footer.php';?>
<?php include 'include/js.php';?>