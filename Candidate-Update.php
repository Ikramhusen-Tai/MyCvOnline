<?php include 'include/head.php';?>
<?php include 'include/header.php';?>
<section class='content-start'>
</section>

<?php 
$id = $_SESSION['logged_in_user_id'];


if (isset($_POST['update_cv'])) {

$address = $_POST['address'];
$city = $_POST['city'];
$province = $_POST['province'];
$country = $_POST['country'];

$skills = $_POST['skills'];
$experience = $_POST['experience'];
$education = $_POST['education'];
$summary = $_POST['summary'];




$update1 = "UPDATE candidates
        SET candidate_address='$address',
        candidate_city='$city',
        candidate_province='$province',
        candidate_country='$country'
        WHERE candidate_id = '$id'";

        $rows = mysqli_query($myconn, $update1) or die("Error while inserting values 1");
        
        $insert = "INSERT INTO cv ( `candidate_id`, `cv_experience`, `cv_education`, `cv_summary`, `cv_skills` )
        VALUES
        ( '$id','$experience', '$education','$summary','$skills') ";
        $rows2 = mysqli_query($myconn, $insert) or die("Error");

       

        mysqli_close($myconn);
}
?>
<div class="container">
<table class="table">
<tr>
<td style="text-align:center"><p>You have successfully updated your details</p> </td>
</tr>
<tr>
<td style="text-align:center"> <a href="jobs.php" class="btn btn-primary">Go back to Jobs</button></td>
</tr>
</table>
</div>