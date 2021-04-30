<?php include 'include/head.php';?>
<?php include 'include/header.php';?>


<!-- Custom Code -->
<!-- Custom Code End -->



<section id="intro">
    <div class="carousel-item active">
        <div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
        <div class="carousel-container">
            <div class="carousel-content">
                <h2 class="font-color-white">Post new Job</h2>
                <p>To post the job you must have to be registered and logged in by employer account.</p>
                <p class="font-color-white width-100">
                    <a href="index.php" class="font-color-white"> Home </a>
                    / Post New
                </p>
            </div>
        </div>
    </div>
</section>


<section id="post_job">
    <div class="vertical-space-100"></div>
    <div class="vertical-space-101"></div>
    <div class="container">
        <div class="list-box">
            <a href="#" class="font-color-black margin-right">Job </a> > <a href="#"
                class="font-color-orange margin-left"> Post job</a>
        </div>
        <div class="vertical-space-60"></div>
        <div class="job-post-box">
            <form action="post-job-logic.php" method="post">
                <div class="form-group">
                    <label>Job title</label>
                    <input type="text" class="form-control" placeholder="Enter your job title" name="job_title" required />
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Job Type</label>
                            <select name="job_type" class="form-control" required="required">
                                <option value="Full Time">Full Time</option>
                                <option value="Contract">Contract</option>
                                <option value="Internship">Internship</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group ">
                            <label>Category</label>
                            <select name="job_category" class="form-control" required="required">
                                <option value="Education & Training">Education & Training</option>
                                <option value="Sales and Marketing">Sales and Marketing</option>
                                <option value="Computer Programing">Computer Programing</option>
                                <option value="Customer Support">Customer Support</option>
                                <option value="Design & Multimedia">Design & Multimedia</option>
                                <option value="Web Developmente">Web Development</option>
                                <option value="Medical/Pharma">Medical/Pharma</option>
                                <option value="Engineer/Architects">Engineer/Architects</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" class="form-control" name="job_salary" placeholder="Salary" required />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Experience</label>
                            <input type="text" class="form-control" name="job_experience" placeholder="Experience"
                                required />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Education</label>
                                <select name="job_education" class="form-control" required="required">
                                    <option value="Diploma">Diploma</option>
                                    <option value="Bachelors">Bachelors</option>
                                    <option value="Masters">Masters</option>
                                    <option value="Phd">Phd</option>
                                </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Expires On</label>
                            <input type="date" name="job_date" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Short Description</label>
                    <textarea class="form-control small" placeholder="Write short description" rows="3" required name="job_description"></textarea>
                </div>
                <div class="form-group">
                    <label>Agree with term and conditions</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input " id="exampleCheck1" required />
                        <label class="form-check-label text-left" for="exampleCheck1">Lorem ipsum tempus amet
                            conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst
                            inceptos mattis euismod lorem nulla magna duis nostra sodales luctus nulla</label>
                    </div>
                </div>
                <button type="submit" class="btn Post-Job-Offer" name="post_job">Post Job Offer</button>
            </form>
        </div>
    </div>
</section>


<?php include 'include/footer.php';?>
<?php include 'include/js.php';?>