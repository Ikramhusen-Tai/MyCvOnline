<?php include 'include/head.php';?>
<?php include 'include/header.php';?>

<section class="jobs-page content-start">

<div class="container">
	
    	 <table class="table table-list-search">
                    <thead>
                        <tr>
                        <strong>  <th>Applicant Name   </th></strong>
                            <th><b>Last Name </b> </th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Phone Number</th>
                            <th>Candidate Target</th>
                        </tr>
                    </thead>               
<?php

//$id = $_SESSION['logged_in_user_id'];
    $select = "
    SELECT 
candidate_id,
candidate_fname,
candidate_lname,
candidate_email,
candidate_phone,
candidate_city,
candidate_target
FROM candidates"
;

    $result = mysqli_query($myconn, $select);
    // $data = mysqli_fetch_array($result);
    while ($data = mysqli_fetch_array($result)) {
?>
                    <tbody>
                        <tr>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_id']); ?></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_fname']); ?></p></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_lname']); ?></p></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_email']); ?></p></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_phone']); ?></p></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_city']); ?></p></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_target']); ?></p></td>
                        </tr>
                    </tbody>
                    <?php
        }
        
    ?>
    <tfoot>
                            <td><b>Total Candidates</b></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?php
               $rows = mysqli_num_rows($result);
              echo $rows ?></td>
                        </tr>
        
    
        </tfoot>   
        </table>   
              
	
</div>
</section>