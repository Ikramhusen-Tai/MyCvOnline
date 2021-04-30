<?php include 'include/head.php';?>
<?php include 'include/header.php';?>

<section class="jobs-page content-start">

<div class="container">
    	 <table class="table table-list-search">
                    <thead>
                        <tr>
                        <th>Id  </th>
                        <th>Company  </th>
                        <th>Applicant Name</th>
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
   application.id,
	  companies.company_name,
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
    JOIN companies
      ON companies.company_id= application.company_id";

    $result = mysqli_query($myconn, $select);
    while ($data = mysqli_fetch_array($result)) {
     
?>
                    <tbody>
                        <tr>
                        <td><p class="text-capitalize"><?php echo ($data['id']); ?></td>
                            <td><p class="text-capitalize"><?php echo ($data['company_name']); ?></p></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_fname']); ?></p></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_lname']); ?></p></td>
                            <td><?php echo ($data['candidate_email']); ?></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_city']); ?></p></td>
                            <td><?php echo ($data['candidate_phone']); ?></td>
                            <td><p class="text-capitalize"><?php echo ($data['candidate_target']); ?></p></td>
                        </tr>
                    </tbody>
                    <?php
                    
        }?>
         
        <tfoot>
                            <td><b>Total Applications</b></td>
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