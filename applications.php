<?php include 'include/head.php';?>
<?php include 'include/header.php';?>


<!------ Include the above in your HEAD tag ---------->

<section class="jobs-page content-start">

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <form action="candidate-details.php" method="post">
    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>Applicant Name</th>
                            <th><b>Last Name </b> </th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Phone Number</th>
                            <th>Candidate Target</th>
                            <th> </th>
                        </tr>
                    </thead>
                    
<?php

$id = $_SESSION['logged_in_user_id'];
    $select = "
    SELECT
      application.id,
      candidates.candidate_id,
      candidates.candidate_fname,
      candidates.candidate_lname,
      candidates.candidate_email,
      candidates.candidate_city,
      candidates.candidate_phone,
      candidates.candidate_target
    FROM candidates
    JOIN application
      ON candidates.candidate_id = application.candidate_id
    JOIN jobs 
      ON jobs.job_id = application.job_id
      WHERE application.company_id ='$id'
      ORDER BY application.id DESC";

    $result = mysqli_query($myconn, $select);
    // $data = mysqli_fetch_array($result);
    while ($data = mysqli_fetch_array($result)) {
?> 

                    <tbody>
                        <tr>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_fname']); ?></p></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_lname']); ?></p></td>
                            <td><?php echo ($data['candidate_email']); ?></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_city']); ?></p></td>
                            <td><?php echo ($data['candidate_phone']); ?></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_target']); ?></p></td>
                            <td> <a href="candidate-details.php" class="part-full-time" >
                              <input type="hidden" value="<?php echo ($data['candidate_id']); ?>" name="candidate_id" >
                              <input type="submit" name="view_more" value="View More"  class="btn btn-primary btn-block"></a> </td>
                        </tr>
                    </tbody>
 

                    <?php
        }
        mysqli_close($myconn);
    ?>
        </table>  
        </form>
    </div>
  </div>
	
    	  
              
	
</div>
</section>