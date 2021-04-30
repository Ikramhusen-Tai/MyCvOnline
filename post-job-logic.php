<?php
$myconn = mysqli_connect('127.0.0.1', 'root', '', 'my_cv_online') or die("Error");

if(isset($_POST['post_job'])){
    $title = $_POST['job_title'];
    $type = $_POST['job_type'];
    $desc = $_POST['job_description'];
    $category = $_POST['job_category'];
    $salary = $_POST['job_salary'];
    $exp = $_POST['job_experience'];
    $edu = $_POST['job_education'];
    $by = $_SESSION['logged_in_user_id'];
    $exp_date = $_POST['job_date'];

    $insert1 = "INSERT INTO jobs(job_title,job_type,job_description,job_category,job_salary,job_experience,job_education,company_id,job_expires)
                   VALUES('$title','$type','$desc','$category','$salary','$exp','$edu','$by','$exp_date')";
        $rows = mysqli_query($myconn, $insert1) or die("Error while inserting values 1");
}
echo "<script type='text/javascript'>alert('Job Posted');</script>";
// header("location:index.php");
echo ($_SESSION['logged_in_user_id']);
?>