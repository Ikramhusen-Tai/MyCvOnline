<?php include 'include/head.php';?>
<?php include 'include/header.php';?>

<section class="jobs-page content-start">


</section>

<?php
$id = $_POST['candidate_id'];

$myconn1 = mysqli_connect('127.0.0.1', 'root', '', 'my_cv_online') or die("Error");


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
JOIN cv ON candidates.candidate_id = cv.candidate_id
where candidates.candidate_id = '$id'";

$result = mysqli_query($myconn1, $select) or die("Error");
$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result)
    ?>
   
          
<div class="container">
  <table class="table" style="text-align: left">
    
    <tbody>
    <tr>
        <td>Name</td>
        <td><p class="text-capitalize" > </p><?php echo ($row['candidate_fname']);?> <?php echo ($row['candidate_lname']);?></td>
        
      </tr>
      
      <tr>
        <td>Email</td>
        <td id="email"><?php echo ($row['candidate_email']);?></td>
        
      </tr>
      <tr>
        <td>Education</td>
        <td id="education"><?php echo ($row['candidate_education']);?></td>
        
      </tr>
      <tr>
        <td>Skills</td>
        <td id="skills"><?php echo ($row['cv_skills']);?></td>
      </tr>
      <tr>
        <td>Experience</td>
        <td id="experience"><?php echo ($row['cv_experience']);?></td>
      </tr>
      <tr>
        <td>Write a mail</td>
        <td ><form action="" method="post">
        <textarea rows="3" name="message" cols="140"></textarea> </td>
      </tr>
      <tr>
        <td></td>
        <td ><a href="#" class="btn btn-primary btn-block"> Send Message</a> </td>
        <!-- <input type="submit" name="submit" value="Send this Messege" class="btn btn-primary btn-block"> -->
        </form> 
    </tr>
    </tbody>
  </table>
  

</div>

<!-- <?php 
// if(isset($_POST['submit'])){
//     $to = $row['candidate_email']; // this is your Email address
//     $from =  // this is the sender's Email address
//     $subject = "Regarding a job";
    
//     $message = $_POST['message'];
//     $headers = "From:" . $from;
//     mail($to,$subject,$message,$headers);
   
//     echo "Mail Sent.";
    
//     }
?> -->

<script>
  
    document.getElementById("name").style.textTransform = "uppercase";
    document.getElementById("name").style.fontWeight: "bold";

</script>