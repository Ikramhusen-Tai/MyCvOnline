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
                <p>Register as an Employer</p>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6 candidate-form" style="display: block;">
                <form role="form">
                    <hr class="colorgraph">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control input-lg" placeholder="Company Name" tabindex="1">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control input-lg" placeholder="Email Address"
                            tabindex="4">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control input-lg" placeholder="Phone" tabindex="3">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control input-lg"
                                    placeholder="Password" tabindex="5">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control input-lg"
                                    placeholder="Confirm Password" tabindex="6">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 col-sm-1 col-md-1">
                            <span class="button-checkbox">
                                <input type="checkbox" class="hidden" value="1">
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
                            <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6 employer-form">
                <h2>Register as Job Seeker</h2>
                <br>
                <a href="cand-register.php" class="btn btn-success btn-lg">
                    Register as Candidate
                </a>
            </div>

        </div>
</section>


<?php include 'include/footer.php';?>
<?php include 'include/js.php';?>